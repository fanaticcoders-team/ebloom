@extends('admin.layouts.master')
@section('title','Add Blog')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Blog</h1>
          <small>Add Blog</small>
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
                      <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/view-blogs')}}"> 
                      <i class="fa fa-eye"></i>  View Blogs </a>  
                   </div>
                </div>
                <div class="panel-body">
                  <form class="col-sm-6" action="{{url(app()->getLocale().'/admin/add-blog')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      <div class="form-group">
                         <label>Title</label>
                         <input type="text" class="form-control" placeholder="Enter Title " name="title" id="title" required>
                      </div>
                      <div class="form-group">
                         <label>Text</label>
                         <textarea name="text" id="text" class="form-control" required>

                         </textarea>
                      </div>
                      <div class="form-group">
                        <div class="field_wrapper">
                            <div style="display:flex;">
                                <input type="text" name="heading[]" id="heading" placeholder="Heading" class="form-control" style="width:30%;margin-right:5px;"/>
                                <textarea  name="description[]" id="description" placeholder="discription" class="form-control" style="width:60%;margin-right:5px;"></textarea>
                                <a href="javascript:void(0);" class="add_button" title="Add Field">Add</a>
                            </div>
                        </div>
                     </div>
                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Blog">
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