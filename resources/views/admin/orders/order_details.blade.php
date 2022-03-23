@extends('admin.layouts.master')
{{-- @section('title','Order Details') --}}
@section('title','Πληροφορίες Παραγγελίας')


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
          <h1>
             {{-- Order Details --}}
             Πληροφορίες Παραγγελίας
            </h1>
          <small>Παραγγελία #{{$orderDetails->orderNo}}</small>
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
            Νέα
            {{-- {{$order->order_status}} --}}
            </span>
            @endif
            @if ($orderDetails->order_status == "In Process")

            <span class="badge " style="background-color: rgb(204, 204, 7)">
            Σε Επεξεργασία
            {{-- {{$order->order_status}} --}}
            </span>

            @endif
            @if ($orderDetails->order_status == "Delivered")
            <span class="badge " style="background-color: orange">
            Παραδόθηκε
            {{-- {{$order->order_status}} --}}
            </span>

            @endif
            @if ($orderDetails->order_status == "Not Accepted")
            <span class="badge " style="background-color: red">
            Μη Αποδεκτή
            {{-- {{$order->order_status}} --}}
            </span>

            @endif
            @if ($orderDetails->order_status == "Cancelled")
            <span class="badge " style="background-color: red">
            Ακύρωθηκε
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
                           Πληροφορίες Παραγγελίας
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
                                 Ημ/νία Παραγγελίας
                                 {{-- Order Date --}}
                                 </td>
                                <td class="taskStatus">{{ $orderDetails->created_at->format('d/m/Y') }}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Κατάσταση
                                 {{-- Order Status --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->order_status}}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Ποσό
                                 {{-- Order Total --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->grand_total}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Κόστος Μεταφορικών
                                 {{-- Shipping Charges --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->shipping_charges}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Κωδικός Κουπονιού
                                 {{-- Coupon Code --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->coupon_code}}</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Ποσό Έκπτωσης
                                 {{-- Coupon Amount --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->coupon_amount}}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 {{-- Redeem Amount --}}
                                 Εξαργυρώστε το ποσό
                                 </td>
                                <td class="taskStatus">{{$orderDetails->redeem_amount ?? 0 }}€</td>
                            </tr>
                            <tr>
                                <td class="taskDesc">
                                 Μέθοδος Πληρωμής
                                 {{-- Payment Method --}}
                                 </td>
                                <td class="taskStatus">{{$orderDetails->payment_method}}</td>
                            </tr>
                            <tr>
                              <td class="taskDesc">
                                 Ημ/νία Παράδοσης
                                 {{-- Delivery Date --}}
                              </td>
                              <td class="taskStatus">{{$orderDetails->delivery_date}}</td>
                            </tr>
                            <tr>
                              <td class="taskDesc">
                                 Ώρα Παράδοσης
                                 {{-- Delivery time --}}
                              </td>
                              <td class="taskStatus">
                                 @if ($timetable == null)
                                    Any Time
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
             {{-- i --}}
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
          {{-- end of section one --}}
          <div class="col-sm-6">

            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                       @if ($orderDetails->order_status !="Delivered")
                        <h4>
                          Στοιχεία Παραλήπτη
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
                                Όνομα Πελάτη
                                {{-- Customer Name --}}
                                </td>
                               <td class="taskStatus">{{$orderDetails->name}}</td>
                           </tr>
                           @if ($orderDetails->order_status !="Delivered" || Session::get('adminSession')=="admin")
                           <tr>
                               <td class="taskDesc">
                                Email Πελάτη
                                {{-- Customer Email --}}
                                </td>
                               <td class="taskStatus">{{$orderDetails->user_email}}</td>
                           </tr>
                           <tr>
                               <td class="taskDesc">
                                Διεύθυνση Αποστολής
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
                                Πόλη
                                {{-- City --}}
                                </td>
                              <td class="taskStatus">{{$orderDetails->city}}</td>
                          </tr>
                           <tr>
                               <td class="taskDesc">
                                Όροφος
                                {{-- Floor --}}
                                </td>
                               <td class="taskStatus">{{$orderDetails->floor}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                Όνομα στο Κουδούνι
                                {{-- Doorbell Name --}}
                                </td>
                              <td class="taskStatus">{{$orderDetails->doorbell}}</td>
                          </tr>
                          <tr>
                             <td class="taskDesc">
                                Τηλέφωνο
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
                                Μήνυμα
                                {{-- Address Message --}}
                                </td>
                              <td class="taskStatus">{{$orderDetails->address_msg}}</td>
                           </tr>
                           <tr>
                              <td class="taskDesc">
                                 Ανέπαφη παράδοση
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
                       Στοιχεία Αποστολέα
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
                                 Company Address
                                </td>
                              <td class="taskStatus">{{$orderDetails->company}}</td>
                          </tr>
                          @else
                          <tr>
                             <td class="taskDesc">
                                Όνομα Αποστολέα
                                {{-- Sender Name --}}
                             </td>
                             <td class="taskStatus">{{$orderDetails->senderName}}</td>
                         </tr>
                          @endif
                          <tr>
                             <td class="taskDesc">
                                Email Αποστολέα
                                {{-- Email --}}
                             </td>
                             <td class="taskStatus">{{$orderDetails->senderEmail}}</td>
                          </tr>
                          <tr>
                             <td class="taskDesc">
                                Τηλέφωνο
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
                           Στοιχεία Παραγγελίας
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
                           Κωδικός Προϊόντος
                           {{-- Product Code --}}
                        </th>
                        <th>
                           Όνομα Προϊόντος
                           {{-- Product Name --}}
                        </th>
                        @if (Session::get('adminStatus')=="1")
                        <th>

                           Florist
                        </th>
                        @endif
                        <th>
                           Τιμή
                           {{-- Product Price --}}
                        </th>
                        <th>
                           Ποσότητα
                           {{-- Product Quantity --}}
                        </th>
                        <th>
                           Σχόλια
                           {{-- Comment --}}
                        </th>

                        {{-- <th>
                           Ευχητήρια Κάρτα
                        </th> --}}
                        {{-- <th>
                           Μήνυμα Κάρτας Δώρου
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
                                 {{$pro->product_name}}
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
         @if (Session::get('adminSession')!='admin')

            <div class="row">
               <div class="col-sm-6">
                  <div class="panel panel-bd lobidrag">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">
                           <a href="#">
                              <h4>Update Order Status</h4>
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
                                             <option value="New" @if ($orderDetails->order_status == "New") selected @endif>New</option>
                                             <option value="In Process" @if ($orderDetails->order_status == "In Process") selected @endif>In Process</option>
                                             <option value="Delivered" @if ($orderDetails->order_status == "Delivered") selected @endif>Delivered</option>
                                             <option value="Not Accepted" @if ($orderDetails->order_status == "Not Accepted") selected @endif>Not Accepted</option>
                                             <option value="Cancelled" @if ($orderDetails->order_status == "Cancelled") selected @endif>Cancelled</option>

                                       </select>
                                    </td>
                                    <td>
                                       <input type="submit" value="Update Status" class="btn btn-sm btn-success">
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

   {{-- <script type="text/javascript">
      var areYouReallySure = false;
      function areYouSure() {
          if(allowPrompt){
              if (!areYouReallySure && true) {
                  areYouReallySure = true;
                  var confMessage = "***********\n\n W A I T !!! \n\nBefore leaving our site, follow CodexWorld for getting regular updates on Programming and Web Development.\n\n\nCLICK THE *CANCEL* BUTTON RIGHT NOW\n\n***********";
                  return confMessage;
              }
          }else{
              allowPrompt = true;
          }
      }

      var allowPrompt = true;
      window.onbeforeunload = areYouSure;
   </script> --}}


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
        });
     });
   </script>


</div>

 <!-- /.content-wrapper -->
@endsection
