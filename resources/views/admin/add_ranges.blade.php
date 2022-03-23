@extends('admin.layouts.master')
@section('title','Ranges & Prices')

@section('content')
<link href="{{asset('admin-assets/dist/css/google.css')}}" rel="stylesheet" type="text/css"/>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>Ranges & Prices</h1>
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
                     <i class="fa fa-pancil-o"></i>  Ranges & Prices </span>  
                  </div>
               </div>
               <div class="panel-body">
               <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/add-range')}}" method="post"> {{csrf_field()}}

                  <div class="row ">
                     <div class="col-md-12">
                        <span class="text-danger metersError" style="display: none">"kilometers To" should be greater then "kilometers From"</span>
                     </div>
                  </div>
                     <div class="form-group">
                           <div class="field_wrapper">
                               <div style="display:flex;">
                                 {{-- <div class="form-group">
                                    <label>Kilometers From</label> --}}
                                    <input type="text" name="metersFrom[]" min=0 id="metersFrom" placeholder="Kilometers from" class="form-control metersFrom" style="width:120px;margin-right:5px;" required/>
                                 {{-- </div> --}}
                                    <input type="text" name="metersTo[]" min="0" id="metersTo" placeholder="Kilometers to" class="form-control metersTo" style="width:120px;margin-right:5px;" required/>
                                 
                                    <input type="text" name="price[]" min="0" id="price" placeholder="Max Price" class="form-control price" style="width:120px;margin-right:5px;" required/>
                                 
                                    {{-- <a href="javascript:void(0);" class="btn btn-info add_button newFieldBtn" title="Add Field"><i class="fa fa-plus"></i></a> --}}
                                
                               </div>
                           </div>
                     </div>

                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="Add Shipping Charges">
                        
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
                           <h4>Ranges & Prices</h4>
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
                        <form enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/edit-range')}}" method="post"> {{csrf_field()}}
                           <div class="row ">
                              <div class="col-md-12">
                                 <span class="text-danger updateMetersError" style="display: none">"kilometers To" should be greater then "kilometers From"</span>
                              </div>
                           </div>
                           <thead>
                              <tr class="info">
                                 <th>Kilometers From</th>
                                 <th>Kilometers To</th>
                                 <th>Max Price(€)</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($ranges as $range)
                              <tr>
                              <td style="display:none;"><input type="hidden" name="range[]" value="{{$range->id}}">{{$range->id}}</td>

                              <td><input type="text" name="metersFrom[]" class="metersFrom" value="{{$range->kilometersFrom}}" style="text-align:center;"> </td>
                              <td><input type="text" name="metersTo[]" class="metersTo" value="{{$range->kilometersTo}}" style="text-align:center;"> </td>
   
                              <td><input type="text" name="price[]" class="price" value="{{$range->maxPrice}}" style="text-align:center;"> </td>
                              
                              <td class="center">
                                    <div class="btn-group updateBtn">
                                          <input type="submit" value="update" class="btn btn-success" style="height:30px;padding-top:4px;">
                                          <a href="{{url(app()->getLocale().'/admin/delete-range/'.$range->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$range->id}}"><i class="fa fa-trash-o"></i> </a>
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
        if (!confirm("Do you want to delete")){
           // console.log("not confirm");
           return false;
        }else{
           // console.log("confirm");
           // window.location.href = `{{ url('/admin/view-florists')}}`;
           window.location.href = `{{ url(app()->getLocale().'/admin/delete-event/${id}')}}`;
        }
     });
  });
</script>
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


 <!-- /.content-wrapper -->
@endsection