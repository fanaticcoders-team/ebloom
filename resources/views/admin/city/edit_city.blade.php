@extends('admin.layouts.master')
@section('title','Edit City')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit City</h1>
          <small>Edit City</small>
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
                      <a class="btn btn-add " href="{{url('admin/view-cities')}}"> 
                      <i class="fa fa-eye"></i>  View Cities </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/edit-city/'.$categoryDetails->id)}}" method="post"> {{csrf_field()}}
                      
                      <div class="form-group">
                        <label>Select Country</label>
                        <select name="country" id="" class="form-control">
                           <option value="">Select Country</option>
                           <option value="">America</option>
                        </select>
                     </div> 
                     <div class="form-group">
                         <label>City Name</label>
                         <select name="city_name" id="" class="form-control">
                           <option value="">Select City</option>
                           <option value="">New York</option>
                        </select>
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit City">
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