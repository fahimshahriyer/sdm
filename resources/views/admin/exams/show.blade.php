@extends('layouts.admin')
@section('title', 'Admin - Batches')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Exam Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $exam->name }}</h1>
                    <p><strong>Marks: </strong>{{ $exam->marks }}</p>
                    <p><strong>Status: </strong>{{ $exam->is_active }}</p>
                    <p><strong>Course: </strong>{{ $exam->course->name }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection