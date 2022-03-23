@extends('admin.layouts.master')
@if (Session::get('adminStatus')=='2')
@section('title','View Managers')
@else
@section('title','View Florists')
@endif
@section('content')

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
         @if (Session::get('adminStatus')=='2')

          <h1>View Managers</h1>
          <small>Managers List</small>
         @else
         <h1>View Florists</h1>
         <small>Florists List</small>
         @endif

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
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                        @if (Session::get('adminStatus')=='2')

                         <h4>View Managers</h4>
                         @else
                         <h4>View Florsits</h4>

                         @endif
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url(app()->getLocale().'/admin/add-florist')}}"> <i class="fa fa-plus"></i> Add Florist
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               {{-- <th>ID</th> --}}
                               <th>Name</th>
                               <th>Email</th>
                               <th>Cell Phone</th>
                               <th>Address</th>
                               <th>City</th>
                               <th>Status</th>
                               <th>Featured Florist</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($allFlorists as $florist)
                            <tr>
                            {{-- <td>{{$florist->id}}</td> --}}
                            <td>{{$florist->name}}</td>
                            <td>{{$florist->email}}</td>
                            <td>{{$florist->cellphone}}</td>
                            <td>{{$florist->address}}</td>
                            
                              <td>
                                 {{$florist->city}}
                                 {{-- @if (app()->getLocale() == 'en' )
                                    
                                 @else

                                    {{$florist->city_greece}}
                                    
                                 @endif --}}
                              </td>
                            <td>
                              <input type="checkbox" id="toggle-demo" class="FloristStatus btn btn-success" rel="{{$florist->id}}"
                              data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                              @if($florist['status']=="1") checked @endif>
                              <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td>
                              <td>
                                 <input type="checkbox" class="FeaturedStatus btn btn-success" rel="{{$florist->id}}"
                                 data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                 @if($florist['featured_status']=="1") checked @endif>
                                 <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td>
                               <td>
                               {{-- <a href="{{url('/admin/edit-florist/'.$florist->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button> --}}
                                 <a href="{{url(app()->getLocale().'/admin/view-florist-flowers/'.$florist->id)}}" class="btn btn-warning btn-sm" title="View Florist's Flowers"><i class="fa fa-list"></i></a>
                               
                                 <a href="{{url(app()->getLocale().'/admin/delete-florist/'.$florist->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$florist->id}}"><i class="fa fa-trash-o"></i> </a>
                                 <a href="{{url(app()->getLocale().'/admin/view-florist/'.$florist->slug)}}" class="btn btn-info btn-sm view-florist-" ><i class="fa fa-eye"></i> </a>
                               </td>
                            </tr>
                             @endforeach
                         </tbody>
                      </table>
                      
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
               window.location.href = `{{ url(app()->getLocale().'/admin/delete-florist/${id}')}}`;
            }
         });
      });
    </script>
 </div>
 <!-- /.content-wrapper -->
@endsection