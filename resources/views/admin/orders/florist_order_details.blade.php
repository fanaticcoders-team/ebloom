<?php $slug = $orderDetails->id ?>
@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Order Details')
@else
@section('title','Πληροφορίες Παραγγελίας')
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
            {{-- Order Details --}}
            {{__('florist.Πληροφορίες Παραγγελίας')}}
           </h1>
         <small>{{__('florist.Παραγγελία')}} #{{$orderDetails->orderNo}}</small>
        {{-- @if ($orderDetails->order_status == "New")

           <span class="badge " style="background-color: green"> {{$orderDetails->order_status}}</span>
           @endif
           @if ($orderDetails->order_status == "In Process")

           <span class="badge " style="background-color:  rgb(204, 204, 7)"> {{$orderDetails->order_status}}</span>

           @endif
           @if ($orderDetails->order_status == "Delivered")
           <span class="badge " style="background-color: orange"> {{$orderDetails->order_status}}</span>

           @endif
           @if ($orderDetails->order_status == "Cancelled")
           <span class="badge " style="background-color: red"> {{$orderDetails->order_status}}</span>

        @endif --}}
        @if ($orderDetails->order_status == "New")

           <span class="badge " style="background-color: green">
           {{__('florist.Νέα')}}
           {{-- {{$order->order_status}} --}}
           </span>
           @endif
           @if ($orderDetails->order_status == "In Process")

           <span class="badge " style="background-color: rgb(204, 204, 7)">

           {{__('florist.Σε Επεξεργασία')}}

           {{-- {{$order->order_status}} --}}
           </span>

           @endif
           @if ($orderDetails->order_status == "Delivered")
           <span class="badge " style="background-color: orange">

           {{__('florist.Παραδόθηκε')}}

           {{-- {{$order->order_status}} --}}
           </span>

           @endif
           @if ($orderDetails->order_status == "Not Accepted")
           <span class="badge " style="background-color: red">

           {{__('florist.Μη Αποδεκτή')}}

           {{-- {{$order->order_status}} --}}
           </span>

           @endif
           @if ($orderDetails->order_status == "Cancelled")
           <span class="badge " style="background-color: red">

           {{__('florist.Ακύρωθηκε')}}

           {{-- {{$order->order_status}} --}}
           </span>

        @endif

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

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-6">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>

                           {{__('florist.Πληροφορίες Παραγγελίας')}}

                           {{-- Order Details --}}
                           </h4>
                      </a>
                   </div>

                </div>
                  <div class="panel-body">
                     <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">

                        <tbody>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Ημ/νία παραγγελίας')}}
                                 {{-- Order Date --}}
                                 </td>
                                <td class="taskStatus">{{ $orderDetails->created_at->format('d/m/Y') }}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Κατάσταση')}}
                                 {{-- Order Status --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->order_status}}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Ποσό')}}
                                 {{-- Order Total --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->grand_total}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Κόστος Μεταφορικών')}}
                                 {{-- Shipping Charges --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->shipping_charges}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Κωδικός κουπονιού')}}
                                 {{-- Coupon Code --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->coupon_code}}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Ποσό Έκπτωσης')}}
                                 {{-- Coupon Amount --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->coupon_amount}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                @if (app()->getLocale() == "gr" )

                                Εξαργυρώστε το ποσό
                                @else

                                Redeem Amount
                                @endif
                                 {{-- Coupon Amount --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->redeem_amount ?? 0 }}€</td>
                            </tr>
                            {{-- <tr>
                                <td class="taskDesc">

                                 {{__('florist.Μέθοδος Πληρωμής')}}
                                 Payment Method
                                 </td>
                                <td class="taskStatus">{{$orderDetails->payment_method}}</td>
                            </tr> --}}
                            <tr>
                              <td class="taskDesc">

                                 {{__('florist.Ημ/νία Παράδοσης')}}
                                 {{-- Delivery Date --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->delivery_date}}</td>
                            </tr>
                            <tr>
                              <td class="taskDesc">

                                 {{__('florist.Ώρα Παράδοσης')}}
                                 {{-- Delivery time --}}
                              </td>
                              <td class="taskStatus">
                                 @if ($timetable == null)


                                    {{__('florist.Οποτεδήποτε')}}
                                 @else
                                    {{$timetable->fromHour}}:00 - {{$timetable->toHour}}:00
                                 @endif
                              </td>
                          </tr>

                        </tbody>
                     </table>
                  </div>
                </div>
             </div>
             {{-- @if ($orderDetails->receiptOptions !="Receipt") --}}
             <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                     
                        <h4>Invoice Details</h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">

                        <tbody>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Επωνυμία Εταιρείας')}}
                              {{-- Customer Name --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessName}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.ΑΦΜ')}}
                              {{-- Customer Email --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->vat }}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Είδος επιχείρησης')}}
                              {{-- Shipping Address --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessType}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.ΔΟΥ')}}
                              {{-- City --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessTex}}</td>
                        </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Διεύθυνση')}}
                              {{-- Floor --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessAddress}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Περιοχή')}}
                              {{-- Doorbell Name --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessArea}}</td>
                        </tr>
                        <tr>
                           <td class="taskDesc">
                              Τκ
                              {{-- Mobile --}}
                           </td>
                           <td class="taskStatus">{{$orderDetails->bussinessTk}}</td>
                        </tr>
                        {{-- <tr>
                           <td class="taskDesc">Optional Mobile</td>
                           <td class="taskStatus">{{$orderDetails->option_phone}}</td>
                           </tr> --}}
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Τηλέφωνο')}}
                              {{-- Address Message --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->bussinessPhone}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('words.Email Αποστολής Τιμολογίων')}}
                              
                              </td>
                              <td class="taskStatus">{{$orderDetails->country}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
             
         {{-- @endif --}}

          </div>
          <div class="col-sm-6">

             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                        @if ($orderDetails->order_status !="Delivered")
                         <h4>
                           {{__('florist.Στοιχεία Παραλήπτη')}}
                           {{-- Receiver Address Details --}}
                        </h4>
                         @else
                         <h4>Receiver Details</h4>
                         @endif
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">

                         <tbody>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Όνομα Πελάτη')}}

                                 {{-- Customer Name --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->name}}</td>
                            </tr>
                            @if ($orderDetails->order_status !="Delivered" || Session::get('adminSession')=="admin")
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Email Πελάτη')}}

                                 {{-- Customer Email --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->user_email}}</td>
                            </tr>
                              <tr>
                                 <td class="taskDesc">

                                    {{__('florist.Διεύθυνση Αποστολής')}}

                                    {{-- Shipping Address --}}
                                    </td>
                                 <td class="taskStatus">{{$orderDetails->address}}</td>
                              </tr>
                              <tr>
                                 <td class="taskDesc">
                                 @if (app()->getLocale() == 'gr' )
                                    Προαιρετική Διεύθυνση
                                 @else
                                    Optional Address
                                 @endif
                                     
                                     
                                  {{-- Shipping Address --}}
                                  </td>
                                 <td class="taskStatus">{{$orderDetails->re_address}}</td>
                              </tr>
                            <tr>
                               <td class="taskDesc">

                                 {{__('florist.Πόλη')}}

                                 {{-- City --}}
                                 </td>
                               <td class="taskStatus">{{$orderDetails->city}}</td>
                           </tr>
                            <tr>
                                <td class="taskDesc">

                                 {{__('florist.Όροφος')}}

                                 {{-- Floor --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->floor}}</td>
                            </tr>
                            <tr>
                               <td class="taskDesc">

                                 {{__('florist.Όνομα στο Κουδούνι')}}

                                 {{-- Doorbell Name --}}
                                 </td>
                               <td class="taskStatus">{{$orderDetails->doorbell}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">

                                 {{__('florist.Τηλέφωνο')}}

                                 {{-- Mobile --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->mobile}}</td>
                           </tr>
                           {{-- <tr>
                            <td class="taskDesc">Optional Mobile</td>
                            <td class="taskStatus">{{$orderDetails->option_phone}}</td>
                            </tr> --}}
                            <tr>
                               <td class="taskDesc">
                                 {{__('florist.Μήνυμα')}}
                                 {{-- Address Message --}}
                                 </td>
                               <td class="taskStatus">{{$orderDetails->address_msg}}</td>
                            </tr>
                            <tr>
                              <td class="taskDesc">
                                 @if (app()->getLocale() == 'gr' )
                                 Ανέπαφη παράδοση
                                 @else
                                       
                                 Contactless Delivery
                                 @endif
                                {{-- Address Message --}}
                                </td>
                              <td class="taskStatus">
                              
                                 @if ($orderDetails->contactless == null )
                                    @if (app()->getLocale() == 'gr' )
                                       Όχι                                 
                                    @else

                                       No
                                    @endif
                                 @else

                                    {{-- {{$orderDetails->contactless}} --}}
                                    @if ($orderDetails->contactless == 'yes' )
                                       @if (app()->getLocale() == 'gr' )
                                          Ναι                                
                                       @else
                                          Yes
                                       @endif
                                    @else

                                       @if (app()->getLocale() == 'gr' )
                                          Όχι                                 
                                       @else
                                          No
                                       @endif

                                    @endif
                                    
                                 @endif

                                 {{-- {{$orderDetails->contactless??'No'}} --}}
                              </td>
                           </tr>
                            @endif
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
             <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                       <h4>

                        {{__('florist.Στοιχεία Αποστολέα')}}
                        {{-- Sender Details --}}
                        </h4>

                     </a>
                  </div>
               </div>
               <div class="panel-body">
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">

                        <tbody>
                           @if ($orderDetails->sender=="Company")

                           <tr>
                               <td class="taskDesc">

                                  {{__('florist.Διεύθυνση εταιρίας')}}
                                 </td>
                               <td class="taskStatus">{{$orderDetails->company}}</td>
                           </tr>
                           @else
                           <tr>
                              <td class="taskDesc">

                                 {{__('florist.Όνομα Αποστολέα')}}
                                 {{-- Sender Name --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->senderName}}</td>
                          </tr>
                           @endif
                           <tr>
                              <td class="taskDesc">

                                 {{__('florist.Email Αποστολέα')}}
                                 {{-- Email --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->senderEmail}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 {{__('florist.Τηλέφωνο')}}
                                 {{-- Phone # --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->optional_phone}}</td>
                           </tr>


                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
       </div>
         <div class="row">
            <div class="col-sm-12">

            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                        <h4>
                           {{__('florist.Στοιχεία Παραγγελίας')}}
                           {{-- Order Products --}}
                        </h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                   <table id="table_id" class="table table-bordered table-striped table-hover">
                      <thead>
                        <th>

                           {{__('florist.Κωδικός Προϊόντος')}}

                           {{-- Product Code --}}
                        </th>
                        <th>

                           {{__('florist.Όνομα Προϊόντος')}}

                           {{-- Product Name --}}
                        </th>
                        @if (Session::get('adminStatus')=="1")
                        <th>
                           {{__('florist.Ανθοπώλης')}}

                           {{-- Florist --}}
                        </th>
                        @endif
                        <th>

                           {{__('florist.Τιμή')}}

                           {{-- Product Price --}}
                        </th>
                        <th>

                           {{__('florist.Ποσότητα')}}

                           {{-- Product Quantity --}}
                        </th>
                        <th>

                           {{__('florist.Σχόλια')}}

                           {{-- Comment --}}
                        </th>

                        {{-- <th>

                           {{__('florist.Ευχητήρια Κάρτα')}}

                        </th>
                        <th>

                           {{__('florist.Μήνυμα Κάρτας Δώρου')}}

                        </th> --}}

                      </thead>
                      <tbody>
                         
                        @foreach ($orderDetails->orders as $pro)
                           @if ($orderDetails->florist_name == $pro->store )
                              <tr>
                                 <td>
                                    @foreach ($products as $item)
                                       @if ($item->id == $pro->product_id)
                                       {{$item->code}}
                                       @break
                                       @endif
                                    @endforeach
                                    </td>
                                 <td>
                                    @if (app()->getLocale() == 'en' )
                                    {{$pro->product_name_eng ?? $pro->product_name }}

                                    @else
                                    {{$pro->product_name}}

                                    @endif
                                 </td>
                                 @if (Session::get('adminStatus')=="1")
                                    <td>{{ $pro->store }}</td>
                                 @endif
                                 <td>{{$pro->product_price}} €</td>
                                 <td>{{$pro->product_qty}}</td>
                                 {{-- @if ($pro::hasColumn('comment')) --}}

                                 <td>{{$pro->comment}}</td>
                                 {{-- @endif --}}
                                 {{-- @if ($pro->gift == 'yes')
                                    <td>ΝΑΙ</td>
                                 @else
                                    <td>ΟΧΙ</td>
                                 @endif
                                 <td>{{$pro->gift_msg}}</td> --}}


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
         @if (Session::get('adminSession')!='admin' || Session::has('floristSession'))

            <div class="row">
               <div class="col-sm-6">
                  <div class="panel panel-bd lobidrag">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">
                           <a href="#">
                              <h4>

                                 {{__('florist.Κατάστση Παραγγελίας')}}
                                 {{-- Update Order Status --}}
                              </h4>
                           </a>
                        </div>
                     </div>
                     <div class="panel-body">
                        <form action="{{url(app()->getLocale().'/admin/update-order-status')}}" method="post">{{ csrf_field() }}
                           <input type="hidden" name="order_id" value="{{$orderDetails->id}}">
                           <table style="width: 100%;">
                                 <tr>
                                    <td>
                                       <select name="order_status" id="order_status" class="form-control">
                                             <option value="New" @if ($orderDetails->order_status == "New") selected @endif>
                                                {{-- New --}}
                                                {{__('florist.Νέα')}}
                                             </option>
                                             <option value="In Process" @if ($orderDetails->order_status == "In Process") selected @endif>

                                                {{__('florist.Σε Επεξεργασία')}}
                                                {{-- In Process --}}
                                             </option>
                                             <option value="Delivered" @if ($orderDetails->order_status == "Delivered") selected @endif>
                                                {{__('florist.Παραδόθηκε')}}
                                                {{-- Delivered --}}
                                             </option>
                                             <option value="Not Accepted" @if ($orderDetails->order_status == "Not Accepted") selected @endif>
                                                {{__('florist.Μη Αποδεκτή')}}
                                                {{-- Not Accepted --}}
                                             </option>
                                             <option value="Cancelled" @if ($orderDetails->order_status == "Cancelled") selected @endif>
                                                {{__('florist.Ακύρωθηκε')}}
                                                {{-- Cancelled --}}
                                             </option>

                                       </select>
                                    </td>
                                    <td>
                                       <input type="submit"
                                       value=" {{__('florist.Επιβεβαίωση')}}"
                                       {{-- value="Update Status"  --}}
                                       class="btn btn-sm btn-success">
                                    </td>
                                 </tr>
                           </table>

                        </form>
                     </div>
                  </div>
               </div>
            </div>
         @endif
    </section>
    <!-- /.content -->

    <script>
      $(document).ready(function(){
         // alert('check');

        $("#order_status").change(function(){
           var id =$(this).attr('data-id');
           // console.log("id :"+id);
           var val = $(this).val();
         //   alert('check');
            console.log(val);
            if (val === "Cancelled") {

               if (!confirm("Do you want to cancel the order")){
                  // console.log("not confirm");
                  $(this).val('In Process');
                  return false;
               }else{
                  // console.log("confirm");
                  // window.location.href = `{{ url('/admin/view-florists')}}`;
                  // window.location.href = `{{ url('/admin/delete-florist/${id}')}}`;
               }
            }
            if (val === "Not Accepted") {

               if (!confirm("Do you want to not accept the order")){
                  // console.log("not confirm");
                  $(this).val('In Process');
                  return false;
               }else{
                  // console.log("confirm");
                  // window.location.href = `{{ url('/admin/view-florists')}}`;
                  // window.location.href = `{{ url('/admin/delete-florist/${id}')}}`;
               }
            }

        });
     });
   </script>


 </div>
   {{-- @if ($orderDetails->order_status == 'New' )
      <script>
         window.onbeforeunload = function (e) {
            e = e || window.event;

            // For IE and Firefox prior to version 4
            if (e) {
               e.returnValue = 'Sure?';
            }

            // For Safari
            return 'Sure?';
         };
      </script>
   @endif --}}
   <script>
      // alert('check');
      window.onbeforeunload = function() {
          return "You're leaving the site.";
      };
      $(document).ready(function() {
          $('a[rel!=ext]').click(function() { window.onbeforeunload = null; });
          $('form').submit(function() { window.onbeforeunload = null; });
      });
   </script>
 <!-- /.content-wrapper -->
@endsection
