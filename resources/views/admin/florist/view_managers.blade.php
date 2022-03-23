@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','View Managers')

@else
@section('title','Προβολή Διαχειριστών')
@endif

@section('content')

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px">
         <h1>{{__('florist.Προβολή Διαχειριστών')}}</h1>
          <small>{{__('florist.Λίστα Διαχειριστών')}}</small>
         

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
                        <h4>
                           {{__('florist.Προβολή Διαχειριστών')}}
                           {{-- View Managers --}}
                        </h4>
                         
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url(app()->getLocale().'/admin/add-manager')}}"> <i class="fa fa-plus"></i> 
                        {{__('florist.Προσθήκη διαχειριστή')}}
                        {{-- Add Manager --}}
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               {{-- <th>ID</th> --}}
                               <th>
                                 {{__('florist.Όνομα')}}
                                 {{-- Name --}}
                                 </th>
                               <th>Email</th>
                               <th>
                                 {{__('florist.Κατάσταση')}}
                                 {{-- Status --}}
                                 </th>
                               <th>
                                 {{__('florist.Εργαλεία')}}
                                 {{-- Action --}}
                                 </th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($allFlorists as $florist)
                            <tr>
                            {{-- <td>{{$florist->id}}</td> --}}
                            <td>{{$florist->name}}</td>
                            <td>{{$florist->email}}</td>
                            <td>
                              <input type="checkbox" id="toggle-demo" class="FloristStatus btn btn-success" rel="{{$florist->id}}"
                              data-toggle="toggle" 
                              data-on="{{__('florist.Ενεργό')}}"
                              {{-- data-on="Enabled"  --}}
                              data-on="{{__('florist.Ανενεργό')}}"
                              {{-- data-of="Disabled" --}}
                               data-onstyle="success" data-offstyle="danger"
                              @if($florist['status']=="1") checked @endif>
                              <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td>
                               <td>
                               {{-- <a href="{{url('/admin/edit-florist/'.$florist->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button> --}}
                                 <a href="{{url(app()->getLocale().'/admin/view-florist-flowers/'.$florist->id)}}" class="btn btn-warning btn-sm" title="View Florist's Flowers"><i class="fa fa-list"></i></a>
                               
                                 <a href="{{url(app()->getLocale().'/admin/delete-florist/'.$florist->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$florist->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                 {{-- <a href="{{url('/admin/florist-dashboard/'.$florist->slug)}}" class="btn btn-info btn-sm " target="_blank"><i class="fa fa-eye"></i> </a> --}}
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
            if (!confirm("Θέλετε να διαγραφεί;")){
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