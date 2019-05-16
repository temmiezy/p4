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
                        <a href="/plans/{{ $plan->id }}/complete"><i class="far fa-check-square">close</i></a><a href="/plans/{{ $plan->id }}/edit"><i class="far fa-edit">Edit</i></a>

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

@endsection

