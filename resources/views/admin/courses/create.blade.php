@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Batch</h3>
        </div>
        <div class="panel-body">
            @include('errors.common');
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/course') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Course Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="course_code" class="col-md-4 control-label">Course Code</label>

                    <div class="col-md-6">
                        <input id="course_code" type="text" class="form-control" name="course_code" value="{{ old('course_code') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="department_id" class="col-md-4 control-label">Department</label>

                    <div class="col-md-6">
                        <select name="department_id" id="department_id" class="form-control">
                            <option>Please Select</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="credit" class="col-md-4 control-label">Credit</label>

                    <div class="col-md-6">
                        <input id="credit" type="number" class="form-control" name="credit" value="{{ old('credit') }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        <a href="{{ route('batch.index') }}" class="btn btn-default">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection