@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Department Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $department->name }}</h1>
                    <p><strong>Department head: </strong>{{ $department->departmentHead->name }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection