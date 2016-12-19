@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Total Student</div>
                <div class="panel-body">
                    <h1>{{ $students }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Total Teacher</div>
                <div class="panel-body">
                    <h1>{{ $teachers }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Total Department</div>
                <div class="panel-body">
                    <h1>{{ $departments }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Total Batch</div>
                <div class="panel-body">
                    <h1>{{ $batches }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection