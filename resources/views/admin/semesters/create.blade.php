@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Semester</h3>
        </div>
        <div class="panel-body">
            @include('errors.common');
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/semester') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Semester Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        <a href="{{ route('semester.index') }}" class="btn btn-default">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection