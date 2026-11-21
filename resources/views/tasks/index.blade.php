@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1>Task List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td><span class="badge {{ $task->status }}">{{ ucfirst($task->status) }}</span></td>
                    <td>{{ $task->task_date->format('M d, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection