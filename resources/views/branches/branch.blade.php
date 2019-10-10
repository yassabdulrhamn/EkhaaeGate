@extends('layouts.master')

@section('content')

<section class="content-header">
  <h1>
الفروع
    <small>جدول عرض</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
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
                        <th>#الرقم</th>
                        <th>الفرع</th>
                        <th>عدد المنازل</th>
                        <th>عدد المشمولين</th>
                        <th>تعديل</th>
                      </tr>
                       @if(count($Branches)>0)
                       @foreach($Branches as $Branche)
                       <tr>
                            <td>{{$Branche->ID}}</td>
                            <td>{{$Branche->name}}</td>
                            <td>{{$Branche->homes}}</td>
                            <td>{{$Branche->orphans}}</td>
                            <th><a class="pull-right btn btn-default" href="{{$Branche->ID}}">تعديل</a></th>
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
