@extends('layouts.admin')
@section('title', 'Admin - Batches')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Department Details</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>{{ $batch->name }}</h1>
                    <p><strong>Starting Date </strong>{{ $batch->starting_date->toFormattedDateString() }}</p>
                </div>
            </div>
            <h5>Students: </h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($batch->students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->roll }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('student.show', $student->id) }}" type="button" class="btn btn-default">Details</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Edit</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection