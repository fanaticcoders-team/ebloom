
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:06:57 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title') - eBloom</title>
<meta name="csrf-token" content="{{csrf_token()}}">
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.p" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="{{asset('admin-assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{asset('admin-assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="{{asset('admin-assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{asset('admin-assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{asset('admin-assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{asset('admin-assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{asset('admin-assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
      <link href="{{asset('admin-assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="{{asset('admin-assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{asset('admin-assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <link href="{{asset('admin-assets/dist/css/google.css')}}" rel="stylesheet" type="text/css"/>
      
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
           <!--preloader-->
      {{-- <div id="preloader">
            <div id="status"></div>
      </div> --}}
       <div class="wrapper">
         <input type="hidden" name="checkNewOrder" id="checkNewOrder">

         @include('admin.layouts.florist_header')
         @include('admin.layouts.florist_sidebar')
         @yield("content")
         @include('admin.layouts.footer')
       </div>
         <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      {{-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
      <!-- jquery-ui --> 
      <script src="{{asset('admin-assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  
      {{-- <script type="text/javascript">
         window.addEventListener('beforeunload', function (e) {
             e.preventDefault();
             e.returnValue = 'check';
         });
     </script> --}}
      <script type="text/javascript">
         

         
         var orders = {!! json_encode(Session::get('orders')->toArray()) !!};
         $(document).ready(function () {

            $('.floristLogoutBtn').click(function (e) {
               e.preventDefault();
               // alert('check a');
               var checkNew = 0;
               orders.forEach(order => {
                  if (order.order_status=="New") {
                        // alert('You have recived new order, Please update order status!');
                        checkNew = checkNew + 1;
                        // break;
                    }
               });
               if (checkNew === 0 ) {
                  console.log('no new order');
                  window.location.href = "{{url('gr/florist-logout')}}";
               }else{
                     console.log('new order exists');
                     if (!confirm("You have recived new order, Do you want logout!")){
                     // console.log("not confirm");
                     return false;
                  }else{
                     window.location.href = `{{url('gr/florist-logout')}}`;
                  }
               }
               // console.log("orders: "+orders);
            });
         // console.log("date: ");
            window.setInterval(function(){ // Set interval for checking
                var date = new Date(); // Create a Date object to find out what time it is
                var currentDate = ("0" + (date.getDate())).slice(-2) + '-' + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + date.getFullYear();
                    console.log("date: "+currentDate);

                var domyDate = '8-05-2021';
                    orders.forEach(order => {
                        if (order.order_status === "New") {
                            if ( order.delivery_date === currentDate ) {//order.delivery_date
                                    // console.log('delivery Hour:'+order.shipping_charges);
                                if (parseInt(order.fromHour) != 0 ) {
                                    var minHour = parseInt(order.fromHour) - 1; //e.g 14-1 = 13 / 1 hour before delivery time
                                    if( parseInt(("0" + (date.getHours())).slice(-2)) == minHour && parseInt(("0" + (date.getMinutes())).slice(-2)) == 00){ // Check the time
                                            // Do stuff
                                            // alert('time match');
                                        console.log('send notification');
                                        $.ajax({
                                            headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type : 'post',
                                            url : "{{url(app()->getLocale().'/send-notification')}}",
                                            data : {florist_id:order.florist_id},
                                            success:function(data){
                                            $("#message_success").show();
                                            setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                                            },error:function(){
                                            alert("Error");
                                            }
                                        });
                                    }
                                    
                                }else{
                                  var time = ("0" + (date.getHours())).slice(-2) +":"+ ("0" + (date.getMinutes())).slice(-2);

                                  if (time == "09:00") {
                                    console.log('send notification');
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        type : 'post',
                                        url : "{{url(app()->getLocale().'/send-notification')}}",
                                        data : {florist_id:order.florist_id},
                                        success:function(data){
                                            $("#message_success").show();
                                            setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                                        },error:function(){
                                            alert("Error");
                                        }
                                    });
                                    
                                  }
                                }      
                                    
                            } 
                        }
                    });//end foreach
            }, 30000); // Repeat every 60000 milliseconds (1 minute)
                
         $('#checkNewOrder').val(orders.length);
         
         var floristId = {!! json_encode(Session::get('adminId')) !!};

         window.setInterval(function(){ // Set interval for checking
              var totalOrder = $('#checkNewOrder').val();

            //   console.log("orders: "+totalOrder);
            $.ajax({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type : 'post',
               url : "{{url(app()->getLocale().'/check-new-order')}}",
               data : {floristId:floristId},
               success:function(data){
                  // console.log('order count: '+data.orderCount);
                  if (data.orderCount > totalOrder) {
                     alert('You have received new order');
                  }
                  $('#checkNewOrder').val(data.orderCount);
                  // $("#message_success").show();
                  // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
               },error:function(){
                  // alert("Error");
                  console.log('check new order error');

               }
            });
                              
         }, 1000);
         });


      </script>
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
       minDate:0,
       dateFormat:'dd/mm/yy'
    });
  } );
  </script>
      <!-- Bootstrap -->
      <script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{asset('admin-assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{asset('admin-assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{asset('admin-assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="{{asset('admin-assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{asset('admin-assets/dist/js/custom.js')}}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="{{asset('admin-assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="{{asset('admin-assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin-assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="{{asset('admin-assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="{{asset('admin-assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
         
      <script>
         $(document).ready( function () {
         $('#table_id').DataTable({
               "paging":false,
         
         });
         $(this).closest('td').attr('id');
         //Update Product Status
         $(".ProductStatus").change(function(){
          var id = $(this).attr('rel');
          if($(this).prop("checked")==true){
             $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-product-status')}}",

                data : {status:'1',id:id},
                success:function(data){
                   $("#message_success").show();
                   setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });

          }else{
            $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-product-status')}}",

                data : {status:'0',id:id},
                success:function(resp){
                   $("#message_error").show();
                   setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });
          }
         });
         //Update Coupons Status
         $(".CouponStatus").change(function(){
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-coupon-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-coupon-status')}}",

                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
         });
         //update time status
         $(".timeStatus").change(function(){
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/florist/update-time-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/florist/update-time-status')}}",
                  
                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
         });

         // update day status
         $(".dayStatus").change(function(){
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/florist/update-day-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/florist/update-day-status')}}",
                  
                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
         });
         
         //Update Product Status
         $(".FeaturedStatus").change(function(){
          var id = $(this).attr('rel');
          if($(this).prop("checked")==true){
             $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/update-featured-product-statu')}}",
                
                data : {status:'1',id:id},
                success:function(data){
                   $("#message_success").show();
                   setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });

          }else{
            $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/update-featured-product-statu')}}",
                
                data : {status:'0',id:id},
                success:function(resp){
                   $("#message_error").show();
                   setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });
          }
         });
           //Update Category Status
         $(".CategoryStatus").change(function(){
            
          var id = $(this).attr('rel');
          if($(this).prop("checked")==true){
             $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-category-status')}}",
                
                data : {status:'1',id:id},
                success:function(data){
                   $("#message_success").show();
                   setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });

          }else{
            $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-category-status')}}",
                
                data : {status:'0',id:id},
                success:function(resp){
                   $("#message_error").show();
                   setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });
          }
          
         });
         //Update Occasion Status
         $(".OccasionStatus").change(function(){
            
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-occasion-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',                  
                  url : "{{url(app()->getLocale().'/admin/update-occasion-status')}}",

                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
            
         });
         //Update Flower type Status
         $(".TypeStatus").change(function(){
            
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-type-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-type-status')}}",

                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
            
         });
         //Update Florist status FloristStatus
         $(".FloristStatus").change(function(){
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-florist-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-florist-status')}}",

                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
            
         });
         //update dicount status DiscountStatus
         $(".DiscountStatus").change(function(){
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-discount-status')}}",

                  data : {status:'1',id:id},
                  success:function(data){
                     $("#message_success").show();
                     setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
  
            }else{
              $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : "{{url(app()->getLocale().'/admin/update-discount-status')}}",
                  
                  data : {status:'0',id:id},
                  success:function(resp){
                     $("#message_error").show();
                     setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                  },error:function(){
                     alert("Error");
                  }
               });
            }
            
         });
            //Update Banner Status
         $(".BannerStatus").change(function(){
          var id = $(this).attr('rel');
          if($(this).prop("checked")==true){
             $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-banner-status')}}",

                data : {status:'1',id:id},
                success:function(data){
                   $("#message_success").show();
                   setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });

          }else{
            $.ajax({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'post',
                url : "{{url(app()->getLocale().'/admin/update-banner-status')}}",

                data : {status:'0',id:id},
                success:function(resp){
                   $("#message_error").show();
                   setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
                },error:function(){
                   alert("Error");
                }
             });
          }
         });

         //Add Remove Fields Dynamically
         $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div style="display:flex;"><input type="text" name="metersFrom[]" id="metersFrom" placeholder="Kilometers From" class="form-control metersFrom" style="width:120px;margin-right:5px;margin-top:5px;"/><input type="text" name="metersTo[]" id="metersTo" placeholder="Kilometers To" class="form-control metersTo" style="width:120px;margin-right:5px;margin-top:5px;"/><input type="text" name="price[]" id="price" placeholder="Price" class="form-control price" style="width:120px;margin-right:5px;margin-top:5px;"/><a href="javascript:void(0);" class="remove_button btn btn-danger"><i class="fa fa-trash-o"></i></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
      //   alert('check');
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        console.log('deleteBtn');
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
    $(wrapper).on('keypress','.metersFrom,.metersTo,.price',function (e) {
            // console.log('key press in master');
            //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
                }
      });
      $(wrapper).on('blur','.metersTo',function (e) {
            console.log('blur in master');
           var from = $(this).val();
         //   var previous = $(this).prevAll("input[type=text]").val()
            var to = $(this).prev().val();
            if (parseFloat(from) < parseFloat(to) ) {
               $('.metersError').css('display','block');
               $('.newFieldBtn').css('display','none');
               $('.reset-button').empty();
               $('.reset-button').append(`
                  <input type="button" class="btn btn-success" value="Add Shipping Charges">
               `);
               $(this).next().attr('readonly',true);
            }else{
               $('.metersError').css('display','none');
               $('.newFieldBtn').css('display','block');
               $('.newFieldBtn').addClass('add_button');
               $('.reset-button').empty();
               $('.reset-button').append(`
                  <input type="submit" class="btn btn-success" value="Add Shipping Charges">
               
               `);
               $(this).next().attr('readonly',false);
            }
           console.log("from: "+from);
           console.log("to: "+to);

      
      
      });
      $(wrapper).on('blur','.hoursTo',function (e) {
            console.log('blur in master');
           var from = $(this).val();
         //   var previous = $(this).prevAll("input[type=text]").val()
            var to = $(this).prev().val();
            if (parseFloat(from) < parseFloat(to) ) {
               $('.metersError').css('display','block');
               $('.newFieldBtn').css('display','none');
               $('.reset-button').empty();
               $('.reset-button').append(`
                  <input type="button" class="btn btn-success" value="Add Time">
               `);
               $(this).next().attr('readonly',true);
            }else{
               $('.metersError').css('display','none');
               $('.newFieldBtn').css('display','block');
               $('.newFieldBtn').addClass('add_button');
               $('.reset-button').empty();
               $('.reset-button').append(`
                  <input type="submit" class="btn btn-success" value="Add Time">
               
               `);
               $(this).next().attr('readonly',false);
            }
           console.log("from: "+from);
           console.log("to: "+to);

      
      
      });
   });
      });
   </script>
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
      @include('sweetalert::alert')
      
      <script>
         $(document).ready(function () {
            // window.setInterval(function(){
               // $('.dataTables_filter').empty();
                  // $('.dataTables_filter').html(`
                  // <span>
                  //    Αναζήτηση:
                  //    <input type="search" class="" placeholder="" aria-controls="table_id">
                  // </span>
                  // `);
           // },300);
         });
      </script>

      <script>
         document.addEventListener("DOMContentLoaded", function() {
            var elements = document.getElementsByTagName("INPUT");
        
                  
            for (var i = 0; i < elements.length; i++) {

               if (elements[i].value == '') {
                  elements[i].setCustomValidity("Συμπληρώστε το πεδίο");
                  
               }   

               if (elements[i].files.length == 0) {
                  elements[i].setCustomValidity("Συμπληρώστε το πεδίο");
               } 
                  
               
                elements[i].oninvalid = function(e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Συμπληρώστε το πεδίο");
                    }
                };
                elements[i].oninput = function(e) {
                    e.target.setCustomValidity("");
                };
            }
         });
      </script>


   </body>
</html>