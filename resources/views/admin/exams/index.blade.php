@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of exams</h3>
            <a href="{{ route('exam.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Marks</td>
                    <td>Course</td>
                    <td>Status</td>
                </tr>
                </thead>
                <tbody>
                @foreach($exams as $index => $exam)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $exam->name }}</td>
                        <td>{{ $exam->marks }}</td>
                        <td>{{ $exam->course_id }}</td>
                        <td>{{ $exam->is_active }}</td>
                        <td>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="{{ route('exam.show', $exam->id) }}" type="button" class="btn btn-default">Details</a>
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
            {{ $exams->render() }}
        </div>
    </div>

@endsection