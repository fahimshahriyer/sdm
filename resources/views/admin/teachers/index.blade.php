@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of teachers</h3>
            <a href="{{ route('teacher.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Teacher Name</td>
                    <td>Department Name</td>
                    <td>Mobile</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $index => $teacher)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->teacherDepartment->name }}</td>
                        <td>{{ $teacher->mobile }}</td>
                        <td>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="{{ route('teacher.show', $teacher->id) }}" type="button" class="btn btn-default">Details</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
        <div class="text-center">
            {{ $teachers->render() }}
        </div>
    </div>

@endsection