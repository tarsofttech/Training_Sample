@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($schedules as $schedule)
                        <tbody>
                            <tr>
                                <td>{{ $schedule->id }}</td>
                                <td>{{ $schedule->title }}</td>
                                <td>{{ $schedule->description }}</td>
                                <td>{{ $schedule->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('schedule.show', $schedule) }}" class="btn btn-primary">Show</a>
                                    <a href="{{ route('schedule.edit', $schedule) }}" class="btn btn-success">Edit</a>
                                    <a onclick="return confirm('Are you sure?')" href="{{ route('schedule.delete', $schedule) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
