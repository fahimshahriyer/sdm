@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Grading Scale</h3>
            <a href="{{ route('grade.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Grade</td>
                    <td>GPA</td>
                </tr>
                </thead>
                <tbody>
                @foreach($grades as $index => $grade)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $grade->name }}</td>
                        <td>{{ $grade->gpa }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection