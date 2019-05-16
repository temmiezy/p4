<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{

    public function dashboard()
    {
        $currentUser = Auth::user();
        $plans = Plan::where('user_id', '=', $currentUser->id)
            ->whereDate('plan_date', date('Y-m-d'))
            ->orderBy('plan_date', 'desc')
            ->orderBy('start_time')
            ->get();

        $activeCount = 0;
        $closedCount = 0;
        foreach ($plans->toArray() as $plan){
            if($plan['status'] == 'active'){
                $activeCount++;
            } elseif($plan['status'] == 'closed') {
                $closedCount++;
            }
        }

        return view('plan.dashboard')->with(['active' => $activeCount, 'closed' => $closedCount]);
    }

    /**
     * GET /
     */
    public function index()
    {
        # get plans
        $currentUser = Auth::user();
        $plans = Plan::where('status', '=', 'active')
            ->where('user_id', '=', $currentUser->id)
            ->whereDate('plan_date', date('Y-m-d'))
            ->orderBy('plan_date', 'desc')
            ->orderBy('start_time')
            ->get();
        //dump($plans->toArray());
        return view('plan.index')->with(['plans' => $plans]);
    }

    public function week()
    {
        $currentUser = Auth::user();
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime('+6 day', strtotime(date('Y-m-d'))));
        $plans = Plan::where('status', '=', 'active')
            ->where('user_id', '=', $currentUser->id)
            ->whereBetween('plan_date', [$start_date, $end_date])
            ->get();
        //dd($plans);
        $weekPlans = array();
        foreach ($plans->toArray() as $plan){
            if(!array_key_exists($plan['plan_date'], $weekPlans)){
                $weekPlans[$plan['plan_date']][] = $plan;
            } else {
                array_push($weekPlans[$plan['plan_date']], $plan);
                //$weekPlans[$plan->plan_date] = [$plan];
            }
        }
        //dd($weekPlans);
        return view('plan.week')->with(['week' => $weekPlans]);

    }

    public function edit($id)
    {
        $plan = Plan::find($id);
        //dump($plan->toArray());
        return view('plan.edit')->with(['plan' => $plan]);

    }

    public function update(Request $request, $id)
    {
        $currentUser = Auth::user();
        $plan = Plan::find($id);
        $plan->subject = $request->subject;
        $plan->description = $request->description;
        $plan->plan_date = $request->plan_date;
        $plan->start_time = $request->start_time;
        $plan->end_time = $request->end_time;
        $plan->set_reminder = ($request->reminder == 'on') ? 1:0;
        $plan->user_id = $currentUser->id;
        $plan->save();

        return redirect('/plans/'. $id .'/edit')->with(['alert' => 'update successful']);
    }

    public function complete($id)
    {
        $plan = Plan::find($id);
        $plan->status = 'closed';
        $plan->save();
        return redirect('/plans')->with(['alert' => 'Plan with subject '.$plan->subject.' closed']);
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(Request $request)
    {
        $currentUser = Auth::user();
        //dump($request->all()); exit();
        $validateData = $request->validate([
            'subject' => 'required|max:255',
            'description' => 'required',
            'plan_date' => 'required|date',
            'start_time' => 'required|date_format:H:i|different:end_time',
            'end_time' => 'required|date_format:H:i|different:start_time',
        ]);
        $reminder = 0;
        if($request->input('reminder') == 'on'){
            $reminder = 1;
        }
        $plan = new Plan();
        $plan->subject = $request->input('subject');
        $plan->description = $request->input('description');
        $plan->plan_date = $request->input('plan_date');
        $plan->start_time = $request->input('start_time');
        $plan->end_time = $request->input('end_time');
        $plan->set_reminder = $reminder;
        $plan->user_id = $currentUser->id;
        $plan->save();

        return redirect("/create")->with(["alert" => "the plan added" ]);




    }

    public function logout()
    {
        return view('plan.logout');
    }

    public function active()
    {
        $plans = $this->getPlans();

        return view('plan.index')->with(['plans' => $plans]);
    }

    public function closed()
    {
        $plans = $this->getPlans('closed');

        return view('plan.index')->with(['plans' => $plans]);
    }

    protected function getPlans($status='active')
    {
        $currentUser = Auth::user();
        $plans = Plan::where('status', '=', $status)
            ->where('user_id', '=', $currentUser->id)
            ->whereDate('plan_date', date('Y-m-d'))
            ->orderBy('plan_date', 'desc')
            ->orderBy('start_time')
            ->get();

        return $plans;
    }
}
