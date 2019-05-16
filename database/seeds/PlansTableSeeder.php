<?php

use Illuminate\Database\Seeder;
use App\Plan;
use Illuminate\Foundation\Auth\User;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            ['Job Interview', 'job interview for product manager position', '2019-05-17', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-17', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-17', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-17', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-17', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-17', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-17', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-17', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-17', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],

            ['Job Interview', 'job interview for product manager position', '2019-05-18', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-18', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-17', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-18', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-18', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-18', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-18', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-18', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-18', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],
            
            ['Job Interview', 'job interview for product manager position', '2019-05-19', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-19', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-19', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-19', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-19', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-19', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-19', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-19', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-19', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],
            
            ['Job Interview', 'job interview for product manager position', '2019-05-20', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-20', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-20', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-20', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-20', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-20', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-20', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-20', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-20', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],

            ['Job Interview', 'job interview for product manager position', '2019-05-21', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-21', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-21', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-21', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-21', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-21', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-21', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-21', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-21', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],

            ['Job Interview', 'job interview for product manager position', '2019-05-22', '08:00:00', '09:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Test Plan', 'description for testing my plan', '2019-05-22', '09:30:00', '10:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Dinner Date', 'Dinner date with wife', '2019-05-22', '10:30:00', '12:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['Meeting', 'Breakfast meeting with colleagues and supervisor', '2019-05-22', '12:30:00', '13:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['demo presentation', 'demo presentation with the didital team', '2019-05-22', '13:00:00', '15:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['road trip', 'family road trip to michigan', '2019-05-22', '15:00:00', '16:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['choir rehearsal', 'choir rehearsal with the choir team', '2019-05-22', '16:00:00', '16:30:00', 1, 'Kehinde Afolabi', 'active'],
            ['morning devotion', 'morning prayer devotion', '2019-05-22', '16:30:00', '19:00:00', 1, 'Kehinde Afolabi', 'active'],
            ['breakfast', 'breakfast with family and parents', '2019-05-22', '19:00:00', '21:00:00', 1, 'Kehinde Afolabi', 'active'],


            
            
        ];

        $count = count($plans);

        foreach ($plans as $key => $planSeed)
        {
            $user_id = User::where('name', '=', $planSeed[6])->pluck('id')->first();


            $plan = new Plan();

            $plan->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $plan->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $plan->subject = $planSeed[0];
            $plan->description = $planSeed[1];
            $plan->plan_date = $planSeed[2];
            $plan->start_time = $planSeed[3];
            $plan->end_time = $planSeed[4];
            $plan->set_reminder = $planSeed[5];
            $plan->user_id = $user_id;
            $plan->save();
            $count--;
        }
    }
}
