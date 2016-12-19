@extends('layouts.admin')
@section('title', 'Admin - Teachers')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Teacher Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $teacher->name }}</h1>
                    <br>
                    <p><strong>Department: </strong>{{ $teacher->teacherDepartment->name }}</p>

                    <h3>Contact Details: </h3>
                    <br>
                    <p><strong>Mobile No: </strong>{{ $teacher->mobile }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection