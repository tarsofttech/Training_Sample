@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        @foreach ($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->id }}</td>
                            <td>{{ $schedule->title }}</td>
                            <td>{{ $schedule->description }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
