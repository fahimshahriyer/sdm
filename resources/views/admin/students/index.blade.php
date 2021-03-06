@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of students</h3>
            <a href="{{ route('student.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Student Name</td>
                        <td>Student Roll</td>
                        <td>Registration No</td>
                        <td>Batch</td>
                        <td>Dept</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $index => $student)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->roll }}</td>
                            <td>{{ $student->registration_no }}</td>
                            <td>{{ $student->batch->name }}</td>
                            <td>{{ $student->department->name }}</td>
                            <td>
                                <!-- Split button -->
                                <div class="btn-group">
                                    <a href="{{ route('student.show', $student->id) }}" type="button" class="btn btn-default">Details</a>
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
            {{ $students->render() }}
        </div>
    </div>

@endsection