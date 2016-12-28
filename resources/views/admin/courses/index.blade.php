@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of courses</h3>
            <a href="{{ route('course.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Batch Name</td>
                    <td>Course Code</td>
                    <td>Department</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $index => $course)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->courseDepartment->name }}</td>
                        <td>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="{{ route('course.show', $course->id) }}" type="button" class="btn btn-default">Details</a>
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
            {{ $courses->render() }}
        </div>
    </div>

@endsection