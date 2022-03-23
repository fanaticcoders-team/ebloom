@extends('admin.layouts.master')
@section('title','Edit Category')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit Category</h1>
          <small>Edit Category</small>
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
                      <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/view-occasions')}}"> 
                      <i class="fa fa-eye"></i>  View Categories </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-12" action="{{url(app()->getLocale().'/admin/edit-occasion/'.$occasionDetails->slug)}}" method="post"> {{csrf_field()}}
                      

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label>Category Name (In Greek) </label>
                            <input type="text" class="form-control" value="{{$occasionDetails->name}}" placeholder="Enter Category Name" name="occasion_name" id="category_name" required>
                         </div>
                         <div class="form-group col-md-6">
                           <label>Category Name (In English) </label>
                           <input type="text" class="form-control" value="{{$occasionDetails->name_eng}}" placeholder="Enter Category Name" name="occasion_name_english" id="category_name" required>
                        </div>
                     </div> 
                     <div class="row" style="display: none">
                        
                        <div class="form-group col-md-6">
                           <label>Description (In Greek)</label>
                           <textarea name="occasion_description" value="{{$occasionDetails->description}}" id="occasion_description" class="form-control">
  
                           </textarea>
                        </div>
                        <div class="form-group col-md-6">
                           <label>Description (In english)</label>
                           <textarea name="occasion_description_english" value="{{$occasionDetails->description_eng}}" id="occasion_description_english" class="form-control">
  
                           </textarea>
                        </div>
                     </div>


                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit Category">
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