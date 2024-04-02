@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Events</h1>

        <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Add Event</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->start_time->format('Y-m-d H:i') }}</td>
                        <td>{{ $event->end_time->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


