<?php $slug = $timeTable->id ?>
@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Edit Working Hour')
@else
@section('title','Επεξεργασία ώρας εργασίας')
@endif

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
          <h1> {{__('florist.Επεξεργασία ώρας εργασίας')}} </h1>
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
           
           <div class="col-sm-6">
            
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist"> 
                     <span class="btn btn-add "> 
                     <i class="fa fa-pancil-o"></i>{{__('florist.Επεξεργασία ώρας εργασίας')}} </span>  
                  </div>
               </div>
               <div class="panel-body">
               <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/florist/edit-working-hour/'.$timeTable->id)}}" method="post"> {{csrf_field()}}

                  <div class="row ">
                     <div class="col-md-12">
                        <span class="text-danger metersError" style="display: none">"hours To" should be greater then "hours From"</span>
                     </div>
                  </div>
                     <div class="form-group">
                           <div class="field_wrapper">
                               <div style="display:flex;">
                                 {{-- <div class="form-group">
                                    <label>Kilometers From</label> --}}
                                    {{-- <input type="text" name="timeFrom[]" min=0 id="metersFrom" placeholder="Hours from" class="form-control metersFrom" style="width:120px;margin-right:5px;" required/> --}}
                                    <input type="hidden" name="florist_id" value="{{$timeTable->florist_id}}">
                                    
                                    <select name="day" id="day" class="form-control" style="width:120px;margin-right:5px;" required>
                                        <?php echo $day_dropdown; ?>
                                       
                                    </select>

                                    <select name="timeFrom" id="metersFrom" class="form-control" style="width:120px;margin-right:5px;" required>
                                        <?php echo $fromHours_dropdown; ?>
                                       
                                    </select>
                                 {{-- </div> --}}
                                    {{-- <input type="text" name="timeTo[]" min="0" id="hoursTo" placeholder="Hours to" class="form-control hoursTo" style="width:120px;margin-right:5px;" required/> --}}
                                    <select name="timeTo" id="hoursTo" class="form-control" style="width:120px;margin-right:5px;" required>
                                       {{-- <option value="01">01:00</option> --}}
                                       <?php echo $toHours_dropdown; ?>
                                       

                                    </select>
                                    {{-- <a href="javascript:void(0);" class="btn btn-info add_button newFieldBtn" title="Add Field"><i class="fa fa-plus"></i></a> --}}
                                
                               </div>
                           </div>
                     </div>

                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="{{__('florist.Επεξεργασία ώρας εργασίας')}}">
                        
                        {{-- <input type="button" class="btn btn-success" value="Add Shipping Charges"> --}}
                     </div>
                  </form>
               </div>
            </div>
            
            </div>
         </div>{{---- end of row ---}}
         
        </div>
     </section>
    <!-- /.content -->
 </div>
   


 <!-- /.content-wrapper -->
@endsection