@extends('admin.layouts.master')
@section('title','View Events')

@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>View Events</h1>
          <small>Events List</small>
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
                         <h4>View Events</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url('admin/add-event')}}"> <i class="fa fa-plus"></i> Add Event
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                                <th>Event ID</th>
                                <th>Event Name</th>
                                <th>Event Type</th>
                                <th>Event Description</th>
                                <th>Event Date</th>
                                {{-- <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($events as $event)
                            <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->name }}</td>
                            <td>
                            {{ $event->type }}
                            </td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->date }}</td>
                            {{-- <td>
                                <input type="checkbox" class="CouponStatus btn btn-success" rel="{{$event->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                @if($event['status']=="1") checked @endif>
                                <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                            </td> --}}
                            <td>
                            <a href="{{url('/admin/edit-event/'.$event->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                            <a  href="{{url('/admin/delete-event/'.$event->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$event->id}}"><i class="fa fa-trash-o"></i> </a>
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
 </div>
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
           window.location.href = `{{ url('/admin/delete-range/${id}')}}`;
        }
     });
  });
</script>
 <!-- /.content-wrapper -->
@endsection