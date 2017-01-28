@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Student</h3>
        </div>
        <div class="panel-body">
            @include('errors.common')
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/student') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Student Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">Email Address(this will be your login email)</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>
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
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="batch" class="col-md-4 control-label">Batch</label>

                    <div class="col-md-6">
                        <select name="batch" id="batch" class="form-control" required>
                            <option>Please Select</option>
                            @foreach($batches as $batch)
                                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <h5 class="text-center">Contact Information</h5>
                <br>
                <div class="form-group">
                    <label for="mobile" class="col-md-4 control-label">Mobile No</label>

                    <div class="col-md-6">
                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-md-4 control-label">Address</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
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