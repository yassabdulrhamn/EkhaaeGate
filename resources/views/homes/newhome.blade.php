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
                  {!! Form::open(['class'=>'form-horizontal','url' => 'homes/register/submit']) !!}
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('Firstname') ? ' has-error' : '' }}">
                            <label for="homeid" class="col-md-4 control-label">Home No:</label>

                            <div class="col-md-6">
                                <input id="homeid" type="text" class="form-control" name="homeid" value="{{ old('homeid') }}" required autofocus>

                                @if ($errors->has('homeid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homeid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Firstname') ? ' has-error' : '' }}">
                            <label for="District" class="col-md-4 control-label">District</label>

                            <div class="col-md-6">
                                <input id="District" type="text" class="form-control" name="District" value="{{ old('District') }}" required autofocus>

                                @if ($errors->has('District'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('District') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Type') ? ' has-error' : '' }}">
                            <label for="Type" class="col-md-4 control-label">Home Type:</label>

                            <div class="col-md-6">
                                {{Form::select('Type', array(
                                '1' => 'نموذجي',
                                '2' => 'عادي'),
                                '1',['class'=>'form-control',])}}

                                @if ($errors->has('Type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Type') }}</strong>
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



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
