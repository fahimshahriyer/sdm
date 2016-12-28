@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Exam</h3>
        </div>
        <div class="panel-body">
            @include('errors.common');
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/exam') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="marks" class="col-md-4 control-label">Marks</label>

                    <div class="col-md-6">
                        <input id="marks" type="text" class="form-control" name="marks" value="{{ old('marks') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="active" class="col-md-4 control-label">Status</label>

                    <div class="col-md-6">
                        <select name="active" id="active" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">De-active</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="course_id" class="col-md-4 control-label">Course</label>

                    <div class="col-md-6">
                        <select name="course_id" id="course_id" class="form-control">
                            <option>Please Select</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
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