@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Student</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('student.create') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Student Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="roll" class="col-md-4 control-label">Roll</label>

                    <div class="col-md-6">
                        <input id="roll" type="text" class="form-control" name="roll" value="{{ old('roll') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="registration_no" class="col-md-4 control-label">Registration No</label>

                    <div class="col-md-6">
                        <input id="registration_no" type="text" class="form-control" name ="registration_no" value="{{ old('registration_no') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birth_date" class="col-md-4 control-label">Birth Date</label>

                    <div class="col-md-6">
                        <input id="birth_date" type="date" class="form-control" name ="birth_date" value="{{ old('birth_date') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="department" class="col-md-4 control-label">Department</label>

                    <div class="col-md-6">
                        <select name="department" id="department" class="form-control" required>
                            <option>Please Select</option>
                            <option value="">CSE</option>
                            <option value="">EEE</option>
                            <option value="">ETE</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="batch" class="col-md-4 control-label">Batch</label>

                    <div class="col-md-6">
                        <select name="batch" id="batch" class="form-control" required>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <br>
                <h5 class="text-center">Contact Information</h5>
                <br>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Mobile No</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Address</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        <a href="{{ route('student.index') }}" class="btn btn-default">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection