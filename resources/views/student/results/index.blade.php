@extends('layouts.student')
@section('title', 'Student Dashboard')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Your Result</h3>
        </div>
        <div class="panel-body">
            @foreach($resultsBySemester as $semester => $results)
                <h3>{{ $semester }}</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->exam->name }}</td>
                                <td>{{ $result->grade->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection