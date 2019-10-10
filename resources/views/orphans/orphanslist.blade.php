@extends('layouts.master')

@section('content')

<section class="content-header">
  <h1>
    الأبناء
    <small>جدول عرض</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

<!-- Yaser: try calss (container) -->
<div class="">
<div class="row">
      <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">جدول الأبناء</h3>
                    <div class="box-tools">
                      <a href="/orphans/new" class="btn btn-block btn-warning">إضافة +</a>
                  </div>
                </div>

                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-striped table-hover">
                      <tbody>
                        <tr>
                        <th>الرقم</th>
                        <th>الهوية</th>
                        <th>الأسم</th>
                        <th>رقم إخاء</th>
                        <th>الجنس</th>
                        <th>الفرع</th>
                        <th>الجوال</th>
                        <th>تعديل</th>
                      </tr>
                      @if(count($orphans)>0)
                      @foreach($orphans as $orphan)
                      <tr>
                        <td>{{$orphan->id}}</td>
                        <td>{{$orphan->orpNationalID}}</td>
                        <td>{{$orphan->orpFirstname}} {{$orphan->orpSecName}} {{$orphan->orpThirdName}}</td>
                        <td>{{$orphan->orpEkhaaNo}}</td>
                        <td>@if($orphan->orpGender=='Male')
<span class="label label-primary">Male</span>
@else
<span class="label label-danger">Female</span>
@endif
                        </td>
                        <td>{{$orphan->braName}}</td>
                        <td>{{$orphan->orpMobile}}</td>
                        <td><a class=" btn btn-default" href="/orphans/editorphan/{{$orphan->orpNationalID}}/edit">تعديل</a></td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody></table>
                  </div>
                  <!-- /.box-body -->
</div>
                <!-- /.box -->
              </div>
            </div>
        </div>
      </section>
@endsection
