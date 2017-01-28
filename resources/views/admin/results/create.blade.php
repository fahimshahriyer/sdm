@extends('layouts.admin')
@section('title', 'Admin - Results')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Result</h3>
        </div>
        <div class="panel-body">
            @include('errors.common');
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/result') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="student_id" class="col-md-4 control-label">Student ID</label>

                    <div class="col-md-6">
                        <input id="student_id" type="number" class="form-control" name="student_id" value="{{ old('student_id') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="marks" class="col-md-4 control-label">Semester</label>

                    <div class="col-md-6">
                        <select name="semester_id" id="semester_id" class="form-control">
                            <option value="">Please Select</option>
                            @foreach($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="marks" class="col-md-4 control-label">Exam</label>

                    <div class="col-md-6">
                        <select name="exam_id" id="exam_id" class="form-control">
                            <option value="">Please Select</option>
                            @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="marks" class="col-md-4 control-label">Grade</label>

                    <div class="col-md-6">
                        <select name="grade_id" id="grade_id" class="form-control">
                            <option value="">Please Select</option>
                            @foreach($grades as $grade)
                                <option value="{{$grade->id}}">{{$grade->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Marks</label>

                    <div class="col-md-6">
                        <input id="marks" type="number" class="form-control" name="marks" value="{{ old('marks') }}">
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