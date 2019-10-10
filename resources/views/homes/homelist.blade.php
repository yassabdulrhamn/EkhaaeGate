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
                    @if($orphanID>0)
                                     <table class="table table-striped table-hover">
                                       <thead>
                                         <tr>
                                           <th>Home No</th>
                                           <th>Type</th>
                                           <th>District</th>
                                           <th>Branch</th>
                                           <th>More...</th>
                                         </tr>
                                       </thead>
                                       <tbody>
                                         @if(count($homes)>0)
                                         @foreach($homes as $home)
                                         <tr>
                                           <td>{{$home->homID}}</td>
                                           <td>{{$home->homType}}</td>
                                           <td>{{$home->homDistrict}}</td>
                                           <td>{{$home->braName}}</td>
                                           <th><a class="pull-right btn btn-default" href="/edit/addtohome/{{$orphanID}}/{{$home->id}}/assignhome">Assign</a></th>
                                         </tr>
                                         @endforeach
                                         @endif
                                       </tbody>
                                     </table>
                   @else
                                     <table class="table table-striped table-hover">
                                       <thead>
                                         <tr>
                                           <th>Home No</th>
                                           <th>Type</th>
                                           <th>District</th>
                                           <th>Branch</th>
                                           <th>More...</th>
                                         </tr>
                                       </thead>
                                       <tbody>
                                         @if(count($homes)>0)
                                         @foreach($homes as $home)
                                         <tr>
                                           <td>{{$home->homID}}</td>
                                           <td>{{$home->homType}}</td>
                                           <td>{{$home->homDistrict}}</td>
                                           <td>{{$home->braName}}</td>
                                           <th><a class="btn btn-default" href="/edit/home/{{$home->id}}">Edit</a></th>
                                         </tr>
                                         @endforeach
                                         @endif
                                       </tbody>
                                     </table>
                   @endif
                  </div>
                  <!-- /.box-body -->
</div>
                <!-- /.box -->
              </div>
            </div>
        </div>
      </section>

@endsection
