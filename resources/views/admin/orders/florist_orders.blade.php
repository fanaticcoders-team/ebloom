@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','View Orders')
@else
@section('title','Προβολή Παραγγελιών')
@endif


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      {{-- <div class="header-icon">
         <i class="fa fa-eye"></i>
      </div> --}}
      <div class="header-title" style="margin-left: 0px">
         <h1>{{__('florist.Προβολή Παραγγελιών')}}</h1>
         {{-- <small>Orders</small> --}}
      </div>
   </section>
   

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
                        <h4> {{__('florist.Προβολή Παραγγελιών')}} </h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" data-order='[[ 0, "desc" ]]' class="table table-bordered table-striped table-hover">
                        <thead>
                           <tr class="info">
                               <th>
                                 {{__('florist.Αριθμός Παραγγελίας')}}
                                
                                {{-- Order ID --}}
                                </th>
                               <th>
                                
                                {{__('florist.Ημ/νία παραγγελίας')}}
                                {{-- Order Date --}}
                                </th>
                               <th>
                                
                                {{__('florist.Όνομα Πελάτη')}}
                                {{-- Customer Name --}}
                                </th>
                               @if (Session::get('adminStatus')=="1")
                               <th>
                                  {{__('florist.Ανθοπώλης')}}
                                </th>
                               @endif
                               <th>
                                
                                {{__('florist.Προϊόντα Παραγγελίας')}}
                                {{-- Ordered Product --}}
                                </th>
                               <th>
                                
                                {{__('florist.Ποσό')}}
                                {{-- Order Amount --}}
                                </th>
                               <th>
                                
                                {{__('florist.Ημ/νία Παράδοσης')}}
                                {{-- Delivery Date --}}
                                </th>
                               <th>
                                
                                {{__('florist.Κατάσταση Παραγγελίας')}}
                                {{-- Order Status --}}
                                </th>
                               {{-- <th>Payment Method</th> --}}
                               <th>
                                
                                {{__('florist.Εργαλεία')}}
                                {{-- Actions --}}
                                </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($orders as $order)
                           <tr>
                               <td>{{ $order->orderNo }}</td>
                               <td>{{ $order->created_at->format('d/m/Y') }}</td>
                               <td>{{$order->name}}</td>
                               @if (Session::get('adminStatus')=="1")
                               <td>{{ $order->florist_name }}</td>
                               @endif
                               <td>
                                   @foreach ($order->orders as $pro)
                                       @if (app()->getLocale() == 'en' )
                                          {{$pro->product_name_eng ?? $pro->product_name }}
                                             
                                       @else
                                          {{$pro->product_name}}
         
                                       @endif
                                       {{-- {{$pro->product_name}} --}}
                                       ({{$pro->product_qty}})
                                       <hr style="height: 2px; margin:0px; padding:0px;">
                                   @endforeach
                               </td>
                               <td>{{$order->grand_total}}€</td>
                               <td>{{$order->delivery_date}}</td>

                                <td>
                                @if ($order->order_status == "New")
                                      
                                  <span class="badge " style="background-color: green"> 
                                   
                                   {{__('florist.Νέα')}}
                                   {{-- {{$order->order_status}} --}}
                                   </span>
                                  @endif
                                  @if ($order->order_status == "In Process")
                                      
                                  <span class="badge " style="background-color: rgb(204, 204, 7)"> 
                                   
                                   {{__('florist.Σε Επεξεργασία')}}
                                   {{-- {{$order->order_status}} --}}
                                   </span>
                                  
                                  @endif
                                  @if ($order->order_status == "Delivered")
                                  <span class="badge " style="background-color: orange"> 
                                   
                                   {{__('florist.Παραδόθηκε')}}
                                   {{-- {{$order->order_status}} --}}
                                   </span>
                                      
                                  @endif
                                  @if ($order->order_status == "Not Accepted")
                                  <span class="badge " style="background-color: red"> 
                                   
                                   {{__('florist.Μη Αποδεκτή')}}

                                   {{-- {{$order->order_status}} --}}
                                   </span>
                                      
                                  @endif
                                  @if ($order->order_status == "Cancelled")
                                  <span class="badge " style="background-color: red"> 
                                   
                                   {{__('florist.Ακύρωθηκε')}}
                                   {{-- {{$order->order_status}} --}}
                                   </span>
                                      
                                @endif
                                  
                                </td>
                               {{-- <td>{{$order->payment_method}}</td> --}}
                               <td class="center">
                                 <a href="{{url(app()->getLocale().'/florist/order/'.$order->id)}}"  class="btn btn-primary btn-sm">
                                    
                                    {{__('florist.Στοιχεία Παραγγελίας')}}
                                    {{-- View Order Details --}}
                                 </a><br>
                                 <a href="{{url(app()->getLocale().'/admin/order-invoice/'.$order->id)}}"  class="btn btn-success btn-sm">
                                    {{__('florist.Εκτύπωση Παραγγελίας')}}
                                    {{-- Print Order --}}
                                 </a>
                                   <br>
                                   
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
 <!-- /.content-wrapper -->
@endsection