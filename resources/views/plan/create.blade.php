@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Create Plan</h2>
                <form method="POST" action="/plans">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                        @include('includes.error-field', ['fieldName' => 'subject'])
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        @include('includes.error-field', ['fieldName' => 'description'])
                    </div>
                    <div class="form-group">
                        <label for="plan_date">Date</label>
                        <input class="form-control" type="date" id="plan_date" name="plan_date">
                        @include('includes.error-field', ['fieldName' => 'plan_date'])
                    </div>
                    <div class="form-group">
                        <label for="start_time">Starts</label>
                        <input class="form-control" type="time" id="start_time" name="start_time">
                        @include('includes.error-field', ['fieldName' => 'start_time'])

                    </div>
                    <div class="form-group">
                        <label for="end_time">Ends</label>
                        <input class="form-control" type="time" id="end_time" name="end_time">
                        @include('includes.error-field', ['fieldName' => 'end_time'])

                    </div>
                    <div class="form-group">
                        <label for="reminder">
                            <input class="form-control" type="checkbox" id="reminder" name="reminder">
                            Set Reminder
                        </label>

                    </div>
                    <button type="submit" class="btn btn-primary">Add Plan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('foot')

@endsection