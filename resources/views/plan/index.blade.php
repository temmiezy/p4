@extends('layouts.app')

@section('head')
    <link href="/css/planner/dashboard.css" rel="stylesheet">
@endsection

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>View Today's Plans</h4>
                <ul class="timeline">
                    @foreach($plans as $plan)
                    <li>
                        <a target="_blank" href="/plans/{{ $plan->id }}">{{ $plan->subject }}</a>
                        <a href="#" class="float-right">{{ $plan->plan_date }} @ {{ $plan->start_time.' - '. $plan->end_time }}</a>
                        <p>{{ $plan->description }}</p>
                        {{ round((strtotime($plan->end_time) - time()) / 3600) }} hours
                        <a href="/plans/{{ $plan->id }}/complete"><i class="far fa-check-square">close</i></a><a href="/plans/{{ $plan->id }}/edit"><i class="far fa-edit">Edit</i></a>
                        @if(  round((strtotime($plan->end_time) - time()) / 3600) < 0 ) <p style="color: red;">*Plan schedule passed, please close</p> @endif

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

@endsection

