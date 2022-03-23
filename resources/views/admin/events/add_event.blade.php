@extends('admin.layouts.master')
@section('title','Add Event')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Event</h1>
          <small>Add Event</small>
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
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/add-event')}}" method="post" name="add_coupon" id="add_coupon"> {{csrf_field()}}
                     
                      <div class="form-group">
                         <label>Event Name</label>
                         <input type="text" class="form-control" placeholder="Enter Event Name" name="name" id="name" required>
                      </div>
                      <div class="form-group">
                         <label>Event Type</label>
                         <input type="text" class="form-control" placeholder="Enter Event, e.g birthday, holiday" name="type" id="type" required>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                     </div>
                      <div class="form-group">
                         <label>Event Date</label>
                         <input type="text" class="form-control" name="date" id="event-datepicker" required>
                      </div> 
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Event">
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