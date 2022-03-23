@extends('admin.layouts.master')
@section('title','Edit Event')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Edit Event</h1>
          <small>Edit Event</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif
   
   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url('admin/view-events')}}"> 
                      <i class="fa fa-eye"></i>  View Events </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/edit-event/'.$eventDetails->id)}}" method="post" name="edit_coupon" id="edit_coupon"> {{csrf_field()}}
                     
                      <div class="form-group">
                         <label>Event Name</label>
                         <input type="text" class="form-control" value="{{$eventDetails->name}}" name="name" id="coupon_code" required>
                      </div>
                      <div class="form-group">
                         <label>Type</label>
                         <input type="text" class="form-control" value="{{$eventDetails->type}}" name="type" id="coupon_amount" required>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$eventDetails->description}}</textarea>

                     </div>
                      <div class="form-group">
                         <label>Event Date</label>
                         <input type="text" value="{{$eventDetails->date}}" class="form-control" name="date" id="datepicker" required>
                      </div>
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit Event">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection