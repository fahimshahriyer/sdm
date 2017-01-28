@extends('layouts.student')
@section('title', 'Student Dashboard')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Your Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $student->name }}</h1>
                    <br>
                    <p><strong>Roll: </strong>{{ $student->roll }}</p>
                    <p><strong>Department: </strong>{{ $student->department_id }}</p>
                    <p><strong>Batch: </strong>{{ $student->batch_id }}</p>
                    <p><strong>Registration No: </strong>{{ $student->registration_no }}</p>
                    <p><strong>Birth Date: </strong>{{ $student->birth_date->toFormattedDateString() }}</p>

                    <h3>Contact Details: </h3>
                    <br>
                    <p><strong>Mobile No: </strong>{{ $student->mobile_no }}</p>
                    <p><strong>Address: </strong>{{ $student->address }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection