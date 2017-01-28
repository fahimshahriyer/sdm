@extends('layouts.admin')
@section('title', '')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Results</h3>
            <a href="{{ route('result.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Exam</th>
                        <th>GPA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ $result->student->name }}</td>
                        <td>{{$result->exam->name}}</td>
                        <td>{{ $result->grade->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $results->render() }}
        </div>
    </div>
@endsection