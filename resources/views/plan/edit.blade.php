@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <a href="javascript:history.back()" class="btn btn-primary">Back</a>
                <h2>Editing plan with subject - {{ $plan->subject }}</h2>
                <form method="POST" action="/plans/{{ $plan->id }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                               value="{{ old('subject', $plan->subject) }}">
                        @include('includes.error-field', ['fieldName' => 'subject'])
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"
                                  rows="3">{{ old('description', $plan->description) }}</textarea>
                        @include('includes.error-field', ['fieldName' => 'description'])
                    </div>
                    <div class="form-group">
                        <label for="plan_date">Date</label>
                        <input class="form-control" type="date" id="plan_date" name="plan_date"
                               value="{{ old('plan_date', $plan->plan_date) }}">
                        @include('includes.error-field', ['fieldName' => 'plan_date'])
                    </div>
                    <div class="form-group">
                        <label for="start_time">Starts</label>
                        <input class="form-control" type="time" id="start_time" name="start_time"
                               value="{{ old('start_time', $plan->start_time) }}">
                        @include('includes.error-field', ['fieldName' => 'start_time'])

                    </div>
                    <div class="form-group">
                        <label for="end_time">Ends</label>
                        <input class="form-control" type="time" id="end_time" name="end_time"
                               value="{{ old('end_time', $plan->end_time) }}">
                        @include('includes.error-field', ['fieldName' => 'end_time'])

                    </div>
                    <div class="form-group">
                        <label for="reminder">
                            <input class="form-control" type="checkbox" id="reminder"
                                   name="reminder" {{ ($plan->set_reminder == 1) ? 'checked' : '' }}>
                            Set Reminder
                        </label>

                    </div>
                    <button type="submit" class="btn btn-primary">Update Plan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('foot')

@endsection