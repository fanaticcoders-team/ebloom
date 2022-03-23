@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Add Manager')
@else
@section('title','Προσθήκη διαχειριστή')
@endif

@section('content')
<link href="{{asset('admin-assets/dist/css/google.css')}}" rel="stylesheet" type="text/css"/>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     

  {{-- MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=raisaeedanwar1187@gmail.com
MAIL_PASSWORD=S@eed1187
MAIL_ENCRYPTION=tls --}}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px">
         <h1>
            {{__('florist.Προσθήκη διαχειριστή')}}
            {{-- Add Manager --}}
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
           <div class="col-sm-12">
              <div class="panel panel-bd lobidrag">
                 <div class="panel-heading">
                    <div class="btn-group" id="buttonlist"> 
                       <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/view-managers')}}"> 
                        <i class="fa fa-eye"></i>  
                        {{__('florist.Προβολή Διαχειριστών')}}
                        {{-- View Managers  --}}
                     </a>  
                        
                    </div>
                 </div>
                 <div class="panel-body">
                 <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/add-manager')}}" method="post"> {{csrf_field()}}
                      
                       <div class="form-group">
                        <label>
                           {{__('florist.Όνομα')}}
                           {{-- Name --}}
                        </label>
                        <input type="text" class="form-control"  
                        placeholder="{{__('florist.Εισαγωγή ονόματος')}}"
                        {{-- placeholder="Enter Name" --}}
                         name="name" id="name" required>
                     </div>
                       <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  
                        placeholder="{{__('florist.Εισαγωγή email')}}"
                        {{-- placeholder="Enter Email" --}}
                         name="email" id="email" required>
                       </div>
                       {{-- <div class="form-group">
                        <label>Cell Phone</label>
                        <input type="tel" class="form-control"  placeholder="Enter Cell phone" name="cellphone" id="cellphone" class="cellphone" required>
                       </div> --}}
                       <div class="form-group">
                          <label>
                           {{__('florist.Κωδικός')}}
                           {{-- Password --}}
                           </label>
                          <input type="text" class="form-control" 
                          placeholder="{{__('florist.Εισαγωγή κωδικού')}}"
                          {{-- placeholder="Enter Password"  --}}
                          name="password" id="password" required>
                       </div>
                        {{-- <div class="form-group">
                           <label>Address</label>
                           <input type="text" class="form-control" id="location-input" placeholder="Enter Address"  name="address" autocomplete="off" required>
                        </div> --}}
                        {{-- <div class="form-group">
                           <label>City</label>
                           <input type="text" class="form-control" placeholder="Enter City" readonly name="city" id="city" required>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>City</label> 
                            <select name="city" id="" class="form-control" required>
                               @foreach ($cities as $city)
                               <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                               @endforeach
                            </select>
                        </div> --}}
                       
                        <div class="reset-button">
                             <input type="submit" class="btn btn-success" 
                             value=" {{__('florist.Προσθήκη διαχειριστή')}}"
                             {{-- value="Add Manager" --}}
                             >
                           
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

 <script type="text/javascript">

   var searchInput = 'location-input';
    $(document).ready(function () {
     var autocomplete;
     autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
      types: ['geocode'],
      componentRestrictions: {
       country: "GR"
      }
     });
      
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
      var near_place = autocomplete.getPlace();
      var address = $("#location-input").val();
      var splitAddress = address.split(",");
      var getRegion = splitAddress[0];
      // var getCity = splitAddress[1];
      var getCity = splitAddress[splitAddress.length - 2];
   
      $("#city").val(getCity);
       console.log("region: "+ getRegion +" city: "+getCity);
      geocode(getRegion,address);
     });
    });
   
                                 function geocode(region,loction) {
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
                                       console.log(response);
                                       var addressComponents = response.data.results[0].address_components;
                                       for (var i = 0; i < addressComponents.length; i++) {
                                         if (addressComponents[i].types[0] == 'postal_code') {
                                           $("#zip_code").val(addressComponents[i].long_name);
                                           console.log(addressComponents[i].long_name);
                                         }
                                       }
                                       var lat = response.data.results[0].geometry.location.lat;
                                       var lng = response.data.results[0].geometry.location.lng;
                                       $("#lat").val(lat);
                                       $("#lng").val(lng);
                                         console.log(region+ " : "+lat+" & "+lng);
                                         
                                       
                                     })
                                     .catch(function (error) {
                                       console.log(error);
                                     });
                                     
                                 }
   
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>
   


@endsection