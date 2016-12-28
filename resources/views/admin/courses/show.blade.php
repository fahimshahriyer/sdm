@extends('layouts.admin')
@section('title', 'Admin - Courses')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Course Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $course->name }}</h1>
                    <p><strong>Course Code: </strong>{{ $course->course_code }}</p>
                    <p><strong>Department: </strong>{{ $course->courseDepartment->name }}</p>
                    <p><strong>Credit: </strong>{{ $course->credit }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection