@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create a new Batch</h3>
        </div>
        <div class="panel-body">
            @include('errors.common');
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/teacher') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Teacher Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="department" class="col-md-4 control-label">Department</label>

                    <div class="col-md-6">
                        <select name="department" id="department" class="form-control">
                            <option>Plaese Select</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mobile" class="col-md-4 control-label">Mobile No</label>

                    <div class="col-md-6">
                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
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