@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Time Table')
@else
@section('title',' Ώρες Διανομής')
@endif

@section('content')

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px">
          <h1>
            {{__('florist.Ώρες Διανομής')}}
            {{-- Time Table --}}
            </h1>
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
                     <i class="fa fa-pancil-o"></i>  
                     {{__('florist.Ώρες Διανομής')}}
                     {{-- Time Table --}}
                   </span>  
                  </div>
               </div>
               <div class="panel-body">
               <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/florist/timetable')}}" method="post"> {{csrf_field()}}

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
                                    <select name="day[]" id="day" class="form-control" style="width:120px;margin-right:5px;" required>
                                       <option value="Δευτέρα">{{__('florist.Δευτέρα')}} </option>
                                       <option value="Τρίτη">{{__('florist.Τρίτη')}}</option>
                                       <option value="Τετάρτη">{{__('florist.Τετάρτη')}}</option>
                                       <option value="Πέμπτη">{{__('florist.Πέμπτη')}}</option>
                                       <option value="Παρασκευή">{{__('florist.Παρασκευή')}}</option>
                                       <option value="Σάββατο">{{__('florist.Σάββατο')}}</option>
                                       <option value="Κυριακή">{{__('florist.Κυριακή')}}</option>

                                   </select>
                                    <select name="timeFrom[]" id="metersFrom" class="form-control" style="width:120px;margin-right:5px;" required>
                                       {{-- <option value="01">01:00</option>
                                       <option value="02">02:00</option>
                                       <option value="03">03:00</option>
                                       <option value="04">04:00</option>
                                       <option value="05">05:00</option>
                                       <option value="06">06:00</option>
                                       <option value="07">07:00</option> --}}
                                       <option value="08">08:00 / 10:00 </option>
                                       <option value="10">10:00 / 12:00 </option>
                                       <option value="12">12:00 / 14:00</option>
                                       <option value="14">14:00 / 16:00</option>
                                       <option value="16">16:00 / 18:00</option>
                                       <option value="18">18:00 / 20:00</option>
                                       {{-- <option value="11">11:00</option>
                                       <option value="12">12:00</option>
                                       <option value="13">13:00</option>
                                       <option value="14">14:00</option>
                                       <option value="15">15:00</option>
                                       <option value="16">16:00</option>
                                       <option value="17">17:00</option>
                                       <option value="18">18:00</option>
                                       <option value="19">19:00</option>
                                       <option value="20">20:00</option>
                                       <option value="21">21:00</option>
                                       <option value="22">22:00</option>
                                       <option value="23">23:00</option>
                                       <option value="24">24:00</option> --}}




                                    </select>
                                 {{-- </div> --}}
                                    {{-- <input type="text" name="timeTo[]" min="0" id="hoursTo" placeholder="Hours to" class="form-control hoursTo" style="width:120px;margin-right:5px;" required/> --}}
                                    {{-- <select name="timeTo[]" id="hoursTo" class="form-control" style="width:120px;margin-right:5px;" required>
                                       <option value="01">01:00</option>
                                       <option value="02">02:00</option>
                                       <option value="03">03:00</option>
                                       <option value="04">04:00</option>
                                       <option value="05">05:00</option>
                                       <option value="06">06:00</option>
                                       <option value="07">07:00</option>
                                       <option value="08">08:00</option>
                                       <option value="09">09:00</option>
                                       <option value="10">10:00 / 12:00 </option>
                                       <option value="11">12:00 / 14:00</option>
                                       <option value="12">12:00</option>
                                       <option value="13">13:00</option>
                                       <option value="14">14:00</option>
                                       <option value="15">15:00</option>
                                       <option value="16">16:00</option>
                                       <option value="17">17:00</option>
                                       <option value="18">18:00</option>
                                       <option value="19">19:00</option>
                                       <option value="20">20:00</option>
                                       <option value="21">21:00</option>
                                       <option value="22">22:00</option>
                                       <option value="23">23:00</option>
                                       <option value="24">24:00</option>

                                    </select> --}}
                                    {{-- <a href="javascript:void(0);" class="btn btn-info add_button newFieldBtn" title="Add Field"><i class="fa fa-plus"></i></a> --}}
                                
                               </div>
                           </div>
                     </div>

                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" 
                        value="{{__('florist.Προσθήκη ώρας')}}"
                        {{-- value="Add Time " --}}
                        >
                        
                        {{-- <input type="button" class="btn btn-success" value="Add Shipping Charges"> --}}
                     </div>
                  </form>
               </div>
            </div>
            
            </div>
         </div>{{---- end of row ---}}
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-bd lobidrag">
                  <div class="panel-heading">
                     <div class="btn-group" id="buttonexport">
                        <a href="#">
                           <h4>
                              {{__('florist.Ώρες Διανομής')}}
                              {{-- Time Table --}}
                           </h4>
                        </a>
                     </div>
                  </div>
                  <style>
                     td{
                        text-align: center;
                        width: 10%;
                     }
                     th{
                        text-align: center;
                        width: 10%;

                     }
                  </style>
                  <div class="panel-body">
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                     {{-- <div class="btn-group">
                        <div class="buttonexport" id="buttonlist"> 
                        <span class="btn btn-add"> <i class="fa fa-eye"></i> Shipping Charges
                           </span>  
                        </div>
                        
                     </div> --}}
                     <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                     <div class="table-responsive">
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                           
                           <div class="row">
                              <div class="col-md-3">
                                 <h4> <b> {{__('florist.Δευτέρα')}}  </b> </h4> 

                              </div>
                              <div class="col-md-7"></div>
                              <div class="col-md-2">
                                 <div class="" >

                                    <input type="checkbox" class="dayStatus btn btn-success" rel="Δευτέρα"
                                      data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                      @if($monday->status=="1") checked @endif>
                                      <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                     
                                 </div>
                              </div>
                           </div>
                           
                        <thead>
                           <tr class="info">
                              <th>
                                 
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                              @if ($time->day == 'Δευτέρα')
                                 <tr>
                                    <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                    <td >  {{__('florist.Δευτέρα')}} </td>

                                    <td>
                                       {{$time->fromHour}}:00
                                       {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                    </td>
                                    <td>
                                       {{$time->toHour}}:00
                                       {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                    </td>
                                    {{-- <td>
                                       <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                       @if($time->status=="1") checked @endif>
                                       <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                    </td> --}}
                                    <td class="center">
                                       <div class="btn-group updateBtn">
                                             {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                             {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm" title="Επεξεργασία"><i class="fa fa-pencil"></i> </a> --}}
                                             <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                                data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                             {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" title="Διαγραφή" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                       </div>
                                    </td>
                                 </tr>
                              @endif
                           @endforeach
                        </tbody>
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b>   {{__('florist.Τρίτη')}} </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Τρίτη"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($tuesday->status=="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>
                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Τρίτη')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Τρίτη')}}</td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b>  {{__('florist.Τετάρτη')}}  </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Τετάρτη"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($wednesday->status ?? '' =="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>

                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Τετάρτη')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Τετάρτη')}} </td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b> {{__('florist.Πέμπτη')}}  </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Πέμπτη"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($thursday->status ?? '' =="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>
                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Πέμπτη')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Πέμπτη')}} </td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b>  {{__('florist.Παρασκευή')}} </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Παρασκευή"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($friday->status ?? '' =="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>
                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Παρασκευή')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Παρασκευή')}} </td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b>  {{__('florist.Σάββατο')}} </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Σάββατο"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($saturday->status ?? '' =="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>
                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Σάββατο')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Σάββατο')}} </td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     <table id="table_id1" class="table table-bordered table-striped table-hover">
                        {{-- <h4> <b> Κυριακή </b> </h4>  --}}
                        <div class="row">
                           <div class="col-md-3">
                              <h4> <b>  {{__('florist.Κυριακή')}} </b> </h4> 

                           </div>
                           <div class="col-md-7"></div>
                           <div class="col-md-2">
                              <div class="" >

                                 <input type="checkbox" class="dayStatus btn btn-success" rel="Κυριακή"
                                   data-toggle="toggle" data-on="{{__('florist.Ενεργό')}}" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                   @if($sunday->status ?? '' =="1") checked @endif>
                                   <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                  
                              </div>
                           </div>
                        </div>
                        <thead>
                           <tr class="info">
                              <th>
                                 {{__('florist.Ημέρα')}}
                                 {{-- Day --}}
                              </th>
                              <th>
                                 {{__('florist.Από')}}
                                 {{-- From Hours --}}
                              </th>
                              <th>
                                 {{__('florist.Έως')}}
                                 {{-- To Hours --}}
                              </th>
                              {{-- <th>Status</th> --}}
                              <th>
                              
                                 {{__('florist.Εργαλεία')}}
                                    {{-- Action --}}
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($timetable as $time)
                           @if ($time->day == 'Κυριακή')
                              <tr>
                                 <td style="display:none;"><input type="hidden" name="time[]" value="{{$time->id}}">{{$time->id}}</td>
                                 <td > {{__('florist.Κυριακή')}} </td>

                                 <td>
                                    {{$time->fromHour}}:00
                                    {{-- <input type="text" name="timeFrom[]" class="metersFrom" value="{{$time->fromHour}}" style="text-align:center;"> --}}

                                 </td>
                                 <td>
                                    {{$time->toHour}}:00
                                    {{-- <input type="text" name="timeTo[]" class="metersTo" value="{{$time->toHour}}" style="text-align:center;">  --}}
                                 </td>
                                 {{-- <td>
                                    <input type="checkbox" class="timeStatus btn btn-success" rel="{{$time->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                    @if($time->status=="1") checked @endif>
                                    <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                                 </td> --}}
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          {{-- <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;"> --}}
                                          {{-- <a href="{{url('/florist/edit-working-hour/'.$time->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a> --}}
                                          <a href="{{url(app()->getLocale().'/florist/delete-timetable/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn"
                                             data-id="{{$time->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
                                          {{-- <a href="{{url('/florist/delete-working-hour/'.$time->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$time->id}}"><i class="fa fa-trash-o"></i> </a> --}}
                                    </div>
                                 </td>
                              </tr>
                           @endif
                           @endforeach
                           
                        </tbody>
                        
                     </table>
                     </div>
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
        if (!confirm("Θέλετε να διαγραφεί;")){
           // console.log("not confirm");
           return false;
        }else{
           // console.log("confirm");
           // window.location.href = `{{ url('/admin/view-florists')}}`;
           window.location.href = `{{ url(app()->getLocale().'/florist/delete-timetable/${id}')}}`;
        }
     });
  });
</script>
 <script>
     $(document).ready(function () {
        
      //   alert('check');
      const timeTable = {!! json_encode($timetable->toArray()) !!};
      var hours = {!! json_encode($hours) !!};
      console.log(hours);
      $hours_dropdown = `<option value='' selected disabled>Select</option>`;
      timeTable.forEach(time => {
         hours.forEach(hour => {
            if (time.fromHour === hour) {
               
            }
         });
      });

     });
    $(".metersFrom,.metersTo,.price").keypress(function (e) {
            // console.log('key press');
            //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
                }
      });
      $(".metersTo").blur(function (e) {
         console.log('blur in profile');
           var from = $(this).val();
         //   var previous = $(this).prevAll("input[type=text]").val()
            var to = $(this).parent().prev().find('.metersFrom').val();
         //    console.log("from: "+from);
         //   console.log("to: "+to);
            if (parseFloat(from) < parseFloat(to) ) {
               $('.updateMetersError').css('display','block');
               // $('.updateBtn').empty();
               // $('.updateBtn').append(`
               //    <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;">
               //    
               // `);
               console.log('if');
               $(this).parent().next().find('.price').attr('readonly',true);
            }else{
               $('.updateMetersError').css('display','none');
               // $('.updateBtn').empty();
               // $('.updateBtn').append(`
               //    <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;">
               //    
               // `);
               console.log('else');
               $(this).parent().next().find('.price').attr('readonly',false);

            }
           
      });
 </script>


 <!-- /.content-wrapper -->
@endsection