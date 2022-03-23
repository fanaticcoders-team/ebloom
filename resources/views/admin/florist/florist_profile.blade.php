@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Florist Profile')
@else
@section('title','Προφίλ')
@endif
<?php $lang = 'el' ?>

@section('content')
<link href="{{asset('admin-assets/dist/css/google.css')}}" rel="stylesheet" type="text/css"/>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
<script type="text/javascript" src="{{asset('js/google_jsapi.js')}}"></script>
     
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px;">
          <h1>
            Προφίλ
            {{-- Florist Profile --}}
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
                       <a class="btn btn-add " href="#"> 
                       {{-- <i class="fa fa-eye"></i>   --}}
                       
                       {{__('florist.Προφίλ')}}
                      </a>  
                    </div>
                 </div>
                 <div class="panel-body">
                 <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/florist-profile')}}" method="post"> {{csrf_field()}}
                      
                    {{-- <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="{{$userDetails->user_name}}"  placeholder="Enter Username" name="username" id="username" required>
                     </div> --}}
                     <div class="form-group">
                      <label>
                        
                        {{__('florist.Όνομα')}}
                        {{-- Name --}}
                        </label>
                      <input type="text" class="form-control" value="{{$userDetails->name}}" placeholder="Enter Name" name="name" id="name" required>
                     </div>
                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Όνομα Διαχειριστή')}}
                           {{-- Manager Name --}}
                        </label>
                        <input type="text" class="form-control" value="{{$userDetails->user_name}}" placeholder="Enter Manager name" name="manager_name" id="managerName" required>
                       </div>
                     <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" value="{{$userDetails->email}}"  placeholder="Enter Email" name="email" id="email" required>
                      </div>
                      <div class="form-group">
                        <label>
                           
                           {{__('florist.Τηλέφωνο')}}
                           {{-- Cell phone --}}
                        </label>
                        <input type="tel" class="form-control" value="{{$userDetails->cellphone}}"  placeholder="Enter cell phone" name="cellphone" id="cellphone" required>
                        </div>
                     @if (app()->getLocale() == "gr" ) 
                     <div class="form-group">
                        <label>
                           
                           {{-- {{__('florist.Διεύθυνση')}} --}}
                           {{-- Address in greek --}}
                           Διεύθυνση
                        </label>
                        {{-- @if (app()->getLocale() == 'en' )
                         <input type="text" class="form-control" id="location-input" value="{{$userDetails->region}}" placeholder="Enter Address"  name="address" autocomplete="off" required>
                        
                        @else
                        @endif --}}
                        <input type="text" class="form-control address-input" data-lang = "el" id="location-input" value="{{$userDetails->address}}" placeholder="Enter Address"  name="addressInGr" autocomplete="off" required>
                        
                        {{-- <input type="hidden" class="form-control" id="addressInGr" value="{{$userDetails->address}}" placeholder="Enter Address"  name="addressInGr"  required> --}}
                        <input type="hidden" class="form-control" id="addressInEn" value="{{$userDetails->region}}" placeholder="Enter Address"  name="addressInEng" >

                     </div>
                     <div class="form-group">
                        <label>
                         
                            {{-- {{__('florist.Πόλη')}} --}}
                            {{-- City in greek --}}
                            Πόλη
                         </label>
                         {{-- @if (app()->getLocale() == 'en' )
                         <input type="text" class="form-control comman-input"  value="{{$userDetails->city}}" readonly>
                             
                         @else
                         
                         @endif --}}
                         <input type="text" class="form-control comman-input"  value="{{$userDetails->city_greece}}" name="city_gr" id="gr_city" >

                        {{-- <input type="text" class="form-control" value="{{$userDetails->city}}" placeholder="Enter City" readonly name="cityInNative" id="city" style="display: none">
                        <input type="text" class="form-control" value="{{$userDetails->city_greece}}" placeholder="Enter City in greek" name="city_gr" id="gr_city" style="display: none">
                        --}}
                        <input type="hidden" class="form-control" placeholder="Enter City" value="{{$userDetails->city}}" readonly name="city" id="city_en" > 
                    
                     </div>
                     @else
                     <div class="form-group">
                        <label>
                           
                           {{-- {{__('florist.Διεύθυνση')}} --}}
                           Address
                        </label>
                        <input type="text" class="form-control address-input" data-lang = "en" id="location-input" value="{{$userDetails->region}}" placeholder="Enter Address"  name="addressInEng" autocomplete="off" required>
                        {{-- @if (app()->getLocale() == 'en' )
                        
                        @else
                         <input type="text" class="form-control" id="location-input" value="{{$userDetails->address}}" placeholder="Enter Address"  name="address" autocomplete="off" required>
                        @endif --}}
                        <input type="hidden" class="form-control" id="addressInG" value="{{$userDetails->address}}" placeholder="Enter Address"  name="addressInGr"  >
                        {{-- <input type="hidden" class="form-control" id="addressInEng" value="{{$userDetails->region}}" placeholder="Enter Address"  name="addressInEng" required> --}}
 
                     </div>
                      {{-- <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" value="{{$userDetails->country}}" placeholder="Enter Country" name="country" id="country" required>
                      </div> --}}
                      
                     <div class="form-group">
                        <label>
                         
                            {{-- {{__('florist.Πόλη')}} --}}
                            City
                         </label>
                         <input type="text" class="form-control comman-input" name="city" id="city_en"  value="{{$userDetails->city}}" >
                         {{-- @if (app()->getLocale() == 'en' )
                             
                         @else
                         <input type="text" class="form-control comman-input"  value="{{$userDetails->city_greece}}" readonly>
 
                         @endif --}}
 
                        {{-- <input type="text" class="form-control" value="{{$userDetails->city}}" placeholder="Enter City" readonly name="cityInNative" id="city" style="display: none"> --}}
                        <input type="text" class="form-control" value="{{$userDetails->city_greece}}" placeholder="Enter City in greek" name="city_gr" id="gr_cit" style="display: none">
                        
                        {{-- <input type="hidden" class="form-control" placeholder="Enter City" value="{{$userDetails->city}}" readonly name="city" id="city_eng" required> --}}
                    
                    </div>

                    @endif
                         
                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Ελάχιστη Τιμή Παραγγελίας')}}
                           {{-- Minimum Order Price (minimum 25€) --}}
                        </label>
                        <input type="number" class="form-control" value="{{$userDetails->minimam_order}}" min="0" placeholder="Enter Minimam order price" name="minimam_order" >
                    
                     </div>
                     @if (app()->getLocale() == 'gr' )
                        <div class="form-group">
                           <label>
                              
                              {{-- {{__('florist.Αναγνωριστικό λογαριασμού Viva Wallet')}} --}}
                              {{-- Minimum Order Price (minimum 25€) --}}
                              Αριθμός Λογαριασμού
                           </label>
                           <input type="number" class="form-control" value="{{$userDetails->shipping_fee}}" placeholder="IBAN" name="viva_wallet_id" >
                     
                        </div>
                         
                     @else
                        <div class="form-group">
                           <label>
                              
                              {{-- {{__('florist.Αναγνωριστικό λογαριασμού Viva Wallet')}} --}}
                              {{-- Minimum Order Price (minimum 25€) --}}
                              Bank Account
                           </label>
                           <input type="number" class="form-control" value="{{$userDetails->shipping_fee}}" placeholder="IBAN" name="viva_wallet_id" >
                     
                        </div>
                     @endif
                     <div class="form-group">
                        <label>
                           
                           {{-- {{__('florist.Αναγνωριστικό λογαριασμού Viva Wallet')}} --}}
                           {{-- Minimum Order Price (minimum 25€) --}}
                           @if (app()->getLocale()== 'en')
                              Bank Name
                               
                           @else
                              Ονομα τράπεζας 
                           @endif
                        </label>
                           @if (app()->getLocale()== 'en')
                              <input type="text" class="form-control" value="{{$userDetails->bank_name}}" placeholder="Bank Name" name="bank_name" >
                               
                           @else
                              <input type="text" class="form-control" value="{{$userDetails->bank_name}}" placeholder="Ονομα τράπεζας" name="bank_name" >

                           @endif
                  
                     </div>
                      <div class="form-group">
                        <label>
                           
                           {{__('florist.Πληροφορίες Καταστήματος')}}
                           {{-- Store Details Info --}}
                        </label>
                        <textarea name="store_info" class="form-control" id="" cols="30" rows="5">{{$userDetails->store_info}}</textarea>
                    </div>
                     <input type="hidden" value="{{$userDetails->lat}}" name="lat" id="lat">
                     <input type="hidden" value="{{$userDetails->lng}}" name="lng" id="lng">

                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Λογότυπο')}}
                           {{-- Store Logo --}}
                        </label>
                        <input type="file" name="image">
                      <input type="hidden" name="current_image" value="{{$userDetails->image}}">
                      @if(!empty($userDetails->image))
                        <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$userDetails->image)}}"> 
                      @endif 

                     </div>
                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Εικόνα Φόντου')}}
                           {{-- Store background Image --}}
                        </label>
                        <input type="file" name="back_image">
                      <input type="hidden" name="current_back_image" value="{{$userDetails->back_image}}">
                      @if(!empty($userDetails->back_image))
                        <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$userDetails->back_image)}}"> 
                      @endif 

                     </div>
                       
                       <div class="reset-button">
                          <input type="submit" class="btn btn-success" 
                          value=" {{__('florist.Ενημέρωση')}}"
                          {{-- value="Update Profile" --}}
                          >
                       </div>
                    </form>
                 </div>
              </div>
           </div>
           <div class="col-sm-6">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist"> 
                     <span class="btn btn-add "> 
                     <i class="fa fa-marker-o"></i>  
                     
                     {{__('florist.Αλλαγή Κωδικού')}}
                     {{-- Change Password  --}}
                  </span>  
                  </div>
               </div>
               <div class="panel-body">
               <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/change-password')}}" method="post"> {{csrf_field()}}
                    
                     
                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Τρέχον Κωδικός')}}
                           {{-- Current Password --}}
                        </label>
                        <input type="text" class="form-control" 
                        placeholder=" {{__('florist.Εισάγετε Τρέχον Κωδικός')}}"
                        {{-- placeholder="Enter Current Password"  --}}
                        name="current_pwd" id="current_pwd" required>
                     </div>
                     <div class="form-group">
                        <label>
                           
                           {{__('florist.Νέος Κωδικός')}}
                           {{-- New Password --}}
                        </label>
                        <input type="text" class="form-control" 
                        placeholder=" {{__('florist.Εισάγετε Νέο Κωδικό')}}"
                        {{-- placeholder="Enter New Password"  --}}
                        name="new_pwd" id="new_pwd" required>
                     </div>
                     
                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" 
                        value=" {{__('florist.Ενημέρωση')}}"
                        {{-- value="Change Password" --}}
                        >
                     </div>
                  </form>
               </div>
            </div>
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist"> 
                     <span class="btn btn-add "> 
                     <i class="fa fa-pancil-o"></i>  
                     
                     {{__('florist.Έξοδα Αποστολής')}}
                     {{-- Shipping Charges  --}}
                  </span>  
                  </div>
               </div>
               <div class="panel-body">
               <form class="col-sm-12" enctype="multipart/form-data" action="{{url(app()->getLocale().'/florist/add-charges/'.$userDetails->id)}}" method="post"> {{csrf_field()}}

                  <div class="row ">
                     <div class="col-md-12">
                        <span class="text-danger metersError" style="display: none">"kilometers To" should be greater then "kilometers From"</span>
                     </div>
                  </div>
                     <div class="form-group">
                           <div class="field_wrapper">
                               <div style="display:flex;">
                                 <div class="form-group" style="width: 90%;">
                                    <label id="label">
                                       
                                       {{__('florist.Επιλέξτε Απόσταση (σε Km)')}}
                                       {{-- Select Range (In Km) --}}
                                    </label>
                                    {{-- <input type="text" name="metersFrom[]" min=0 id="metersFrom" placeholder="Kilometers from" class="form-control metersFrom" style="width:120px;margin-right:5px;" required/>
                                 
                                    <input type="text" name="metersTo[]" min="0" id="metersTo" placeholder="Kilometers to" class="form-control metersTo" style="width:120px;margin-right:5px;" required/> --}}
                                    <select name="range" id="range" class="form-control" style="width: 100%;" required>
                                       <option value="0">
                                          
                                          {{__('florist.Επιλογή')}}
                                          {{-- Select Range --}}
                                          {{-- select range --> Επιλογή
                                          free --> Δωρεάν
                                          Max. Price --> Μέγ. Τιμή --}}
                                       </option>
                                       @foreach ($ranges as $range)
                                          <option value="{{$range->id}}">{{$range->kilometersFrom}}-{{$range->kilometersTo}} / 
                                             @if ($range->maxPrice=='0')
                                             (<span class="free"> {{__('florist.Δωρεάν')}}   </span>) 
                                             @else
                                             ( {{__('florist.Μέγ. Τιμή')}} {{$range->maxPrice}}€)
                                             @endif  
                                          </option>
                                       @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                       <label>
                                          
                                          {{__('florist.Τιμή')}}
                                          {{-- Range price --}}
                                       </label>
                                    <input type="text" name="price" min="0" id="price" 
                                    placeholder="{{__('florist.Τιμή')}}  "
                                    {{-- placeholder="Price" --}}
                                     class="form-control price" style="width:60%;margin-right:5px;" required/>
                                    </div>
                                    {{-- <div class="form-group">
                                       <label>Action</label>
                                    <a href="javascript:void(0);" class="btn btn-info add_button newFieldBtn" title="Add Field"><i class="fa fa-plus"></i></a>
                                    </div> --}}
                               </div>
                           </div>
                     </div>

                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" 
                        value="{{__('florist.Ενημερώση')}}"
                        {{-- value="Add Shipping Charges" --}}
                        >
                        
                        {{-- <input type="button" class="btn btn-success" value="Add Shipping Charges"> --}}
                     </div>
                  </form>
               </div>
            </div>
            
            </div>
         </div>{{---- end of row ---}}
         <script>
            $(document).ready(function () {
               $('#range').change(function () {
                  var option = $("#range option:selected").text();
                  numbers = option.match(/\d+/);
                  from = option.match(/\d+/)[0];
                  to = option.match(/\d+/)[1];
                  console.log("from:"+from);
                  if (from === '0') {
                     console.log('check');
                     $("#price").val('0');
                     $("#price").attr('readonly',true);
                  }else{
                     $("#price").val('');
                     $("#price").attr('readonly',false);
                  }
                  // console.log("option:"+text);
               });
            });
         </script>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-bd lobidrag">
                  <div class="panel-heading">
                     <div class="btn-group" id="buttonexport">
                        <a href="#">
                           <h4>
                              {{__('florist.Έξοδα Αποστολής')}}
                              {{-- Shipping Charges --}}
                           </h4>
                        </a>
                     </div>
                  </div>
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
                        <form enctype="multipart/form-data" action="{{url(app()->getLocale().'/florist/edit-charges/'.$userDetails->id)}}" method="post"> {{csrf_field()}}
                           <div class="row ">
                              <div class="col-md-12">
                                 <span class="text-danger updateMetersError" style="display: none">"kilometers To" should be greater then "kilometers From"</span>
                              </div>
                           </div>
                           <thead>
                              <tr class="info">
                                 <th>
                                    {{__('florist.Km Από')}}
                                    {{-- Kilometers From --}}
                                 </th>
                                 <th>
                                    
                                    {{__('florist.Km Έως')}}

                                    {{-- Kilometers To --}}
                                 </th>
                                 <th>
                                    
                                    {{__('florist.Τιμή(€)')}}

                                    {{-- Price(€) --}}
                                 </th>
                                 <th>
                                    {{__('florist.Ενέργεια')}}
                                    {{-- Action --}}
                                 </th>
                              </tr>
                           </thead>
                           <tbody id="chargesList">
                              @foreach($sortedCharges as $charge)
                              <tr>  
                                 <td style="display:none;"><input type="hidden" name="charge[]" value="{{$charge->id}}">{{$charge->id}}</td>
                                 <input type="hidden" name="rangeId[]" class="rangeId" value="{{$charge->range_id}}" style="text-align:center;"> 
                              
                                 <input type="hidden" name="metersFrom[]" class="metersFrom" value="{{$charge->kilometersFrom}}" style="text-align:center;"> 
                                 <input type="hidden" name="metersTo[]" class="metersTo" value="{{$charge->kilometersTo}}" style="text-align:center;"> 
                                 <td> <center> {{$charge->kilometersFrom}} </center></td>
                                 <td><center> {{$charge->kilometersTo}}</center></td>
                                 <td><input type="text" name="price[]" class="price" value="{{$charge->price}}" style="text-align:center;"> </td>
                                 <td class="center">
                                    <div class="btn-group updateBtn">
                                          <input type="submit" 
                                          value="{{__('florist.Ενημέρωση')}}"
                                          {{-- value="update"  --}}
                                          class="btn btn-success" style="height:30px;padding-top:4px;">
                                          <a href="{{url(app()->getLocale().'/florist/delete-charges/'.$charge->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$charge->id}}" ><i class="fa fa-trash-o"></i> </a>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                        </form>
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
      //   do you want to delete -->Θέλετε να διαγραφεί;
        if (!confirm("Θέλετε να διαγραφεί;")){
           // console.log("not confirm");
           return false;
        }else{
           // console.log("confirm");
           // window.location.href = `{{ url('/admin/view-florists')}}`;
           window.location.href = `{{ url(app()->getLocale().'/florist/delete-charges/${id}')}}`;
        }
     });
  });
</script>
 @if (count($userDetails['charges'])>0)
     
 <script>
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
               //    <a href="{{url('/florist/delete-charges/'.$charge->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                
               // `);
               console.log('if');
               $(this).parent().next().find('.price').attr('readonly',true);
            }else{
               $('.updateMetersError').css('display','none');
               // $('.updateBtn').empty();
               // $('.updateBtn').append(`
               //    <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;">
               //    <a href="{{url('/florist/delete-charges/'.$charge->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                
               // `);
               console.log('else');
               $(this).parent().next().find('.price').attr('readonly',false);

            }
           
      });
 </script>
 @endif

<script type="text/javascript">
   var langJs = "";
   // $(document).ready(function () {
      
   // });
   
// address in greek
 $(document).ready(function () {
   var searchInput = 'location-input';
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
   types: ['geocode'],
   componentRestrictions: {
    country: "GR"
   }
  });
   
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
   var near_place = autocomplete.getPlace();
   var formated_address = near_place.formatted_address;
   console.log(formated_address);
   
   var splitFormatedAddress = formated_address.split(",");
   var getFormateCity = splitFormatedAddress[splitFormatedAddress.length - 2];
   var cityWithNoDigits = getFormateCity.replace(/[0-9]/g, '');
   console.log("no number: "+cityWithNoDigits);
   $("#cityIngr").val(cityWithNoDigits);
   
   // $("#cityIngr").val(getFormateCity);
            


   var address = $("#location-input").val();
   var splitAddress = address.split(",");
   var getRegion = splitAddress[0];
   // var getCity = splitAddress[1];
   var getCity = splitAddress[splitAddress.length - 2];
   console.log(getCity);
   var cityWithNoDigits = getCity.replace(/[0-9]/g, '');

   var compare = cityWithNoDigits.trim();
   console.log('compare');
   
   console.log(compare);
   if (compare === "Athina") {
      console.log('Athens match');
      $(".comman-input").val('Athens');

   } else {
      console.log('Athens not match');
      $(".comman-input").val(cityWithNoDigits);

   }


   
   

    console.log("region: "+ getRegion +" city: "+getCity);
    cityIngr(getRegion,address);
   //  cityInEng(getRegion,address);
  });
 });
//end of address in greek

// address in english

//end of address in english




            function cityIngr(region,loction) {
               // Prevent actual submit
               // e.preventDefault();

               var location = loction;
               
               axios
                  .get("https://maps.googleapis.com/maps/api/geocode/json?language=el", {
                  params: {
                     address: location,
                     key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
                  },
                  })
                  .then(function (response) {
                  // Log full response
                  console.log('response in Greek');
                  console.log(response);
                  // console.log(response.data.results[0].formatted_address);
                  var lat = response.data.results[0].geometry.location.lat;
                  var lng = response.data.results[0].geometry.location.lng;
                  console.log(lat);
                  console.log(lng);

                  $("#lat").val(lat);
                  $("#lng").val(lng);
                  var formated_address = response.data.results[0].formatted_address;
                  console.log(formated_address);
                  $("#addressInGr").val(formated_address);

                  var splitFormatedAddress = formated_address.split(",");
                  var getFormateCity = splitFormatedAddress[splitFormatedAddress.length - 2];
                  var cityWithNoDigits = getFormateCity.replace(/[0-9]/g, '');
                  console.log(cityWithNoDigits);
                  // var addressComponents = response.data.results[0].address_components;
                  $("#gr_city").val(cityWithNoDigits);
                  
                  })
                  .catch(function (error) {
                  console.log(error);
                  });
                  
            }
            // end of cityInGr
            function cityInEng(region,loction) {
               // Prevent actual submit
               // e.preventDefault();

               var location = loction;
               
               axios
                  .get("https://maps.googleapis.com/maps/api/geocode/json", {
                  params: {
                     address: location,
                     key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
                  },
                  })
                  .then(function (response) {
                  // Log full response
                  console.log('response in english');
                  // console.log(response);
                  // console.log(response.data.results[0].formatted_address);
                  var formated_address = response.data.results[0].formatted_address;
                  console.log(formated_address);
                  
                  var athinaReplace = formated_address.replace("Athina", "Athens");
                  
                  console.log('after replace');
                  
                  console.log(athinaReplace);

                  $("#addressInEng").val(athinaReplace);
                  
                  var splitFormatedAddress = formated_address.split(",");
                  var getFormateCity = splitFormatedAddress[splitFormatedAddress.length - 2];
                  var cityWithNoDigits = getFormateCity.replace(/[0-9]/g, '');
                  console.log(cityWithNoDigits.trim());
                  // var addressComponents = response.data.results[0].address_components;
                  
                  
                  var compare = cityWithNoDigits.trim();
                  console.log('compare');
                  
                  console.log(compare);
                  if (compare === "Athina") {
                     console.log('Athens match');
                     $("#city_eng").val('Athens');

                  } else {
                     console.log('Athens not match');
                     $("#city_eng").val(cityWithNoDigits);

                  }
                  
                  })
                  .catch(function (error) {
                  console.log(error);
                  });
                  
            }
            // end of cityInEng


</script>

{{-- <script>
   $('#location-input').on('focus', function(e) {
         // alert(1);
         // var val = $(this).attr("data-lang");
         // alert(val);
         // console.log('val');

         // console.log(val);
         // alert('check');
         // document.cookie = "lang = en";
         // langJs = "en";
      document.write("<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4'><\/script>");
         e.preventDefault(); 

   });
   // $('#location-input-eng').on('focus', function() {
         

   //    document.write("<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=en&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4'><\/script>");
   // });
   
</script> --}}

@if (app()->getLocale() == 'en' )
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=en&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>
@else
<script  src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language={{$lang}}&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>

@endif



 <!-- /.content-wrapper -->
@endsection