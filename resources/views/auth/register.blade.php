@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('NationalID') ? ' has-error' : '' }}">
                            <label for="NationalID" class="col-md-4 control-label">National ID</label>

                            <div class="col-md-6">
                                <input id="NationalID" type="number" class="form-control" name="NationalID" value="{{ old('NationalID') }}" required autofocus>

                                @if ($errors->has('NationalID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NationalID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Firstname') ? ' has-error' : '' }}">
                            <label for="Firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="Firstname" type="text" class="form-control" name="Firstname" value="{{ old('Firstname') }}" required autofocus>

                                @if ($errors->has('Firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('SecName') ? ' has-error' : '' }}">
                            <label for="SecName" class="col-md-4 control-label">Secand Name</label>

                            <div class="col-md-6">
                                <input id="SecName" type="text" class="form-control" name="SecName" value="{{ old('SecName') }}" required autofocus>

                                @if ($errors->has('SecName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SecName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ThirdName') ? ' has-error' : '' }}">
                            <label for="ThirdName" class="col-md-4 control-label">Third Name</label>

                            <div class="col-md-6">
                                <input id="ThirdName" type="text" class="form-control" name="ThirdName" value="{{ old('ThirdName') }}" required autofocus>

                                @if ($errors->has('ThirdName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ThirdName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile:</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender:</label>

                            <div class="col-md-6">
                                  {{Form::select('gender', array('Male' => 'رَجُل', 'Female' => 'أنثى'), 'Male',['class'=>'form-control',])}}

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('JobTitle') ? ' has-error' : '' }}">
                            <label for="JobTitle" class="col-md-4 control-label">Job Title</label>

                            <div class="col-md-6">
                                {{Form::select('JobTitle', array('Admin' => 'إداري', 'AdminHousing' => 'مسؤول اسكان', 'branchDirector' => 'مدير فرع','Supervisor' => 'مشرف'), 'Supervisor',['class'=>'form-control',])}}

                                @if ($errors->has('JobTitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('JobTitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Branch') ? ' has-error' : '' }}">
                            <label for="Branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                {{Form::select('Branch', array(
                                '1' => 'الأدارة',
                                '2' => 'الرياض',
                                '3' => 'جدة',
                                '4' => 'الدمام',
                                '5' => 'مكة',
                                '6' => 'المدينة',
                                '7' => 'جيزان',
                                '8' => 'ابها',
                                '9' => 'شقرا',
                                '10' => 'حائل'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('Branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Branch') }}</strong>
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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
