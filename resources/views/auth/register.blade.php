@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-toggle">
                            <ul class="nav nav-pills" role="tablist">
                              <li role="presentation" class="active"><a href="#studentform" aria-controls="studentform" role="tab" data-toggle="pill">Student</a></li>
                              <li role="presentation"><a href="#teacherform" aria-controls="teacherfotm" role="tab" data-toggle="pill">Teacher</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="studentform">
                                <div class="form-group">
                                    <label for="birth_date" class="col-md-4 control-label">Date of Birth</label>
                                     <div class="col-md-6">
                                         <input id="birth_date" type="date" class="form-control" name="birth_date" required>

                                         @if($errors->has('birth_date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birth_date') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="roll" class="col-md-4 control-label">Roll</label>
                                     <div class="col-md-6">
                                         <input id="roll" type="number" class="form-control" name="roll" required>

                                         @if($errors->has('roll'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roll') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="registraion_no" class="col-md-4 control-label">Registraion No</label>
                                     <div class="col-md-6">
                                         <input id="registraion_no" type="number" class="form-control" name="registraion_no" required>

                                         @if($errors->has('registraion_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('registraion_no') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="department_id" class="col-md-4 control-label">Department</label>
                                     <div class="col-md-6">
                                         <select id="department_id" type="number" class="form-control" name="department_id" required>
                                             <option>Please Select</option>
                                             <option value="">CSE</option>
                                             <option value="">EEE</option>
                                             <option value="">ETE</option>
                                         </select>

                                         @if($errors->has('department_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('department_id') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="batch_id" class="col-md-4 control-label">Batch</label>
                                     <div class="col-md-6">
                                         
                                         <input id="batch_id" type="number" class="form-control" name="batch" required>

                                         @if($errors->has('batch_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('batch_id') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_no" class="col-md-4 control-label">Mobile</label>
                                     <div class="col-md-6">
                                         
                                         <input id="mobile_no" type="number" class="form-control" name="batch" required>

                                         @if($errors->has('mobile_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-md-4 control-label">Address</label>
                                     <div class="col-md-6">
                                         
                                         <textarea id="address" type="text" class="form-control" name="batch" rows="4" required>
                                             
                                         </textarea>

                                         @if($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="teacherform">
                                <div class="form-group">
                                    <label for="birth_date" class="col-md-4 control-label">Date of Birth</label>
                                     <div class="col-md-6">
                                         <input id="birth_date" type="date" class="form-control" name="birth_date" required>

                                         @if($errors->has('birth_date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birth_date') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="department_id" class="col-md-4 control-label">Department</label>
                                     <div class="col-md-6">
                                         <select id="department_id" type="number" class="form-control" name="department_id" required>
                                             <option>Please Select</option>
                                             <option value="">CSE</option>
                                             <option value="">EEE</option>
                                             <option value="">ETE</option>
                                         </select>

                                         @if($errors->has('department_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('department_id') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_no" class="col-md-4 control-label">Mobile</label>
                                     <div class="col-md-6">
                                         
                                         <input id="mobile_no" type="number" class="form-control" name="batch" required>

                                         @if($errors->has('mobile_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-md-4 control-label">Address</label>
                                     <div class="col-md-6">
                                         
                                         <textarea id="address" type="text" class="form-control" name="batch" rows="4" required>
                                             
                                         </textarea>

                                         @if($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                     </div>
                                </div>
                            </div>
                          </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
