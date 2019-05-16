@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-12">
                <h4>Dashboard</h4>
                <a href="/plans/closed">
                    <button class="btn btn-success btn-lg col-4" type="button">
                        Plans Completed Today- <span class="badge">{{ $closed }}</span>
                    </button>
                </a>
                <a href="/plans/active">
                    <button class="btn btn-warning btn-lg col-4" type="button">
                        Incomplete Plans Today- <span class="badge">{{ $active }}</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection