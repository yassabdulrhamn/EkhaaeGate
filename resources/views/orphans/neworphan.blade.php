@extends('layouts.master')

@section('content')

<section class="content-header">
  <h1>
    Page Header
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Orphan</div>

                <div class="panel-body">
                  {!! Form::open(['class'=>'form-horizontal','url' => 'orphans/register/submit']) !!}
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

                        <div class="form-group{{ $errors->has('MinistryNo') ? ' has-error' : '' }}">
                            <label for="MinistryNo" class="col-md-4 control-label">Ministry No</label>

                            <div class="col-md-6">
                                <input id="MinistryNo" type="number" class="form-control" name="MinistryNo" value="{{ old('MinistryNo') }}" required autofocus>

                                @if ($errors->has('MinistryNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('MinistryNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('EkhaaNo') ? ' has-error' : '' }}">
                            <label for="EkhaaNo" class="col-md-4 control-label">Ekhaa No</label>

                            <div class="col-md-6">
                                <input id="EkhaaNo" type="number" class="form-control" name="EkhaaNo" value="{{ old('EkhaaNo') }}" required autofocus>

                                @if ($errors->has('EkhaaNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EkhaaNo') }}</strong>
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

                        <div class="form-group{{ $errors->has('orpForthName') ? ' has-error' : '' }}">
                            <label for="ForthName" class="col-md-4 control-label">Forth Name</label>

                            <div class="col-md-6">
                                <input id="ForthName" type="text" class="form-control" name="ForthName" value="{{ old('ForthName') }}" required autofocus>

                                @if ($errors->has('ForthName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ForthName') }}</strong>
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

                        <div class="form-group{{ $errors->has('Referral') ? ' has-error' : '' }}">
                            <label for="Referral" class="col-md-4 control-label">Referral</label>

                            <div class="col-md-6">
                                {{Form::select('Referral', array(
                                '1' => 'المؤسسة الخيرية لرعاية الأيتام (إخاء)',
                                '2' => 'مؤسسة التربية النموذجية بالرياض',
                                '3' => 'مؤسسة التربية النموذجية بجدة',
                                '4' => 'مؤسسة التربية النموذجية بأبها',
                                '5' => 'مؤسسة التربية النموذجية بالدمام',
                                '6' => 'دار التربية الاجتماعية للبنين بالرياض',
                                '7' => 'دار التربية الاجتماعية للبنين ببريدة',
                                '8' => 'دار التربية الاجتماعية للبنين ببريدة',
                                '10' => 'دار التربية الاجتماعية للبنين بأبها'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('Referral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Referral') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('MinistryStatus') ? ' has-error' : '' }}">
                            <label for="MinistryStatus" class="col-md-4 control-label">MinistryStatus</label>

                            <div class="col-md-6">
                                {{Form::select('MinistryStatus', array(
                                '1' => 'لا يوجد',
                                '2' => 'جديد',
                                '3' => 'قديم مستمر بالصرف',
                                '4' => 'مقفل'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('MinistryStatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('MinistryStatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Branch') ? ' has-error' : '' }}">
                            <label for="EkhaaStatus" class="col-md-4 control-label">EkhaaStatus</label>

                            <div class="col-md-6">
                                {{Form::select('EkhaaStatus', array(
                                '1' => 'فعال',
                                '2' => 'طي قيد',
                                '3' => 'موقوف مؤقتاً',
                                '4' => 'فعال غير مشمول',
                                '5' => 'طي قيد لم يصرف له من الوزارة',
                                '6' => 'طي قيد لدى أسرة / دار',
                                '7' => 'طي قيد تحت رعاية المؤسسة لن يصرف له من الوزارة',
                                '8' => 'فعال / أسرة طبيعية'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('EkhaaStatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EkhaaStatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Type') ? ' has-error' : '' }}">
                            <label for="BackendTypes" class="col-md-4 control-label">BackendTypes</label>

                            <div class="col-md-6">
                                {{Form::select('BackendTypes', array(
                                '1' => 'ظروف خاصة',
                                '2' => 'تفكك أسري',
                                '3' => 'اسرة طبيعية'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('BackendTypes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('BackendTypes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل
                                </button>
                            </div>
                        </div>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
