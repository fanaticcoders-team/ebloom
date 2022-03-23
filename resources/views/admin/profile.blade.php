@extends('admin.layouts.master')
@section('title','User Profile')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>User Profile</h1>
       </div>
    </section>
    
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    

    <!-- Main content -->
    <section class="content">
        <div class="row">
           <!-- Form controls -->
           <div class="col-sm-12">
              <div class="panel panel-bd lobidrag">
                 <div class="panel-heading">
                    <div class="btn-group" id="buttonlist"> 
                       <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/admin-profile')}}"> 
                       <i class="fa fa-eye"></i>  View Products </a>  
                    </div>
                 </div>
                 <div class="panel-body">
                 <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/admin-profile')}}" method="post"> {{csrf_field()}}
                      
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" value="{{$userDetails->username}}" placeholder="Enter Username" name="username" id="username" required>
                        </div>
                       <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{$userDetails->email}}" placeholder="Enter Email" name="email" id="email" required>
                       </div>
                       <div class="form-group">
                          <label>Current Password</label>
                          <input type="text" class="form-control" placeholder="Enter Current Password" name="current_pwd" id="current_pwd">
                       </div>
                       <div class="form-group">
                          <label>New Password</label>
                          <input type="text" class="form-control" placeholder="Enter New Password" name="new_pwd" id="new_pwd" >
                          
                       </div>
                       
                       <div class="reset-button">
                          <input type="submit" class="btn btn-success" value="Update Profile">
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