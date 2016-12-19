@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of departments</h3>
            <a href="{{ route('department.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Department Name</td>
                    <td>Department Head</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($departments as $index => $department)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->departmentHead->name }}</td>
                        <td>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="{{ route('department.show', $department->id) }}" type="button" class="btn btn-default">Details</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
        <div class="text-center">
            {{ $departments->render() }}
        </div>
    </div>

@endsection