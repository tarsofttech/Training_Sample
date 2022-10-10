@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule Edit') }}</div>

                <div class="card-body">
                    <form action="{{ route('schedule.update', $schedule) }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $schedule->title }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="Please Enter Schedule Description">{{ $schedule->description }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update My Schedule</button>   
                            <a href="{{ route('schedule.index') }}" class="btn btn-link">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
