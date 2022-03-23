@extends('admin.layouts.master')
@section('title','Add Blog Details')
@section('content')


<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Blog Details</h1>
          <small>Add Blog Details of "{{$blog->title}}"</small>
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
                  <form class="col-sm-6" action="{{url(app()->getLocale().'/admin/add-blog-details/'.$blog->id)}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      
                      <div class="form-group">
                        <div class="field_wrapper">
                            <div style="display:flex;">
                                <input type="text" name="heading[]" id="heading" placeholder="Heading" class="form-control" style="width:30%;margin-right:5px;"/>
                                <textarea  name="description[]" id="description" placeholder="discription" class="form-control" style="width:60%;margin-right:5px;"></textarea>
                                {{-- <a href="javascript:void(0);" class="add_button" title="Add Field">Add</a> --}}
                            </div>
                        </div>
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Blog Details">
                      </div>
                  </form>
                  
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->

    <!--View Attributes -->
    <section class="content">
        <div class="row">
           <div class="col-sm-12">
              <div class="panel panel-bd lobidrag">
                 <div class="panel-heading">
                    <div class="btn-group" id="buttonexport">
                       <a href="#">
                          <h4>View Blog Details</h4>
                       </a>
                    </div>
                 </div>
                 <div class="panel-body">
                 <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                       <div class="buttonexport" id="buttonlist"> 
                       <a class="btn btn-add" href="{{url(app()->getLocale().'admin/add-blog')}}"> <i class="fa fa-plus"></i> Add Blog
                          </a>  
                       </div>
                       
                    </div>
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="table-responsive">
                       <table id="table_id" class="table table-bordered table-striped table-hover">
                        <form  action="{{url('/admin/update-blog-details/'.$blog->id)}}" method="POST"> 
                           {{csrf_field()}}
                          <thead>
                             <tr class="info">
                                <th>Blog ID</th>
                                <th>Heading</th>
                                <th>Text</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                              @foreach($blogDetails as $detail)
                             <tr>
                             <td style="display:none;"><input type="hidden" name="blogDetail[]" value="{{$detail->id}}">{{$detail->id}}</td>
                             <td>{{$detail->id}}</td>
  
                                <td><input type="text" name="heading[]" value="{{$detail->heading}}" style="text-align:center;"> </td>
                                <td> <textarea  name="description[]" style="text-align:center;">{{$detail->text}} </textarea> </td>
                                <td class="center">
                                   <div class="btn-grou">
                                         <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;">
                                         <a href="{{url(app()->getLocale().'/admin/delete-blog-details/'.$detail->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$detail->id}}"><i class="fa fa-trash-o"></i> </a>
                                   </div>
                                </td>
                             </tr>
                              @endforeach
                          </tbody>
                        </form>
                       </table>
                    </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
      <!-- /.content -->
      <script>
        $(document).ready(function(){
          $(".delete-btn").click(function(){
             var id =$(this).attr('data-id');
             // console.log("id :"+id);
             if (!confirm("Do you want to delete")){
                // console.log("not confirm");
                return false;
             }else{
                // console.log("confirm");
                // window.location.href = `{{ url('/admin/view-florists')}}`;
                window.location.href = `{{ url(app()->getLocale().'/admin/delete-blog-details/${id}')}}`;
             }
          });
       });
      </script>
 </div>
 <!-- /.content-wrapper -->

@endsection