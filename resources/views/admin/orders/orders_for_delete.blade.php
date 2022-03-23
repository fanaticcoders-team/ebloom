@extends('admin.layouts.master')
@section('title','All Orders')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>All Orders</h1>
          <small>Orders</small>
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
                         <h4>ALl Orders</h4>
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
                                <th>Order ID</th>
                                <th>Order Date</th>
                                <th>Customer Name</th>
                                @if (Session::get('adminStatus')=="1")
                                <th>Florist</th>
                                @endif
                                <th>Ordered Product</th>
                                <th>Order Amount</th>
                                <th>Order Status</th>
                                {{-- <th>Payment Method</th> --}}
                                <th>Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->orderNo }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{$order->name}}</td>
                                @if (Session::get('adminStatus')=="1")
                                <td>{{ $order->florist_name }}</td>
                                @endif
                                <td>
                                    @foreach ($order->orders as $pro)
                                        {{$pro->product_name}}
                                        ({{$pro->product_qty}})
                                        <hr style="height: 2px; margin:0px; padding:0px;">
                                    @endforeach
                                </td>
                                <td>{{$order->grand_total}}€</td>
                                <td>

                                   @if ($order->order_status == "New")
                                         
                                     <span class="badge " style="background-color: green"> {{$order->order_status}}</span>
                                     @endif
                                     @if ($order->order_status == "In Process")
                                         
                                     <span class="badge " style="background-color: yellow"> {{$order->order_status}}</span>
                                     
                                     @endif
                                     @if ($order->order_status == "Delivered")
                                     <span class="badge " style="background-color: orange"> {{$order->order_status}}</span>
                                         
                                     @endif
                                    @if ($order->order_status == "Cancelled")
                                     <span class="badge " style="background-color: red"> {{$order->order_status}}</span>
                                         
                                    @endif
                                    @if ($order->order_status == "Not Accepted")
                                     <span class="badge " style="background-color: red"> {{$order->order_status}}</span>
                                         
                                    @endif
                                   
                                </td>
                                {{-- <td>{{$order->payment_method}}</td> --}}
                                <td class="center">
                                    <a href="{{url(app()->getLocale().'/admin/delete-order/'.$order->id)}}"  class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i>

                                    </a>
                                    <br>
                                    <a href="{{url(app()->getLocale().'/admin/order/'.$order->id)}}"  class="btn btn-primary btn-sm">View Order Details</a><br>
                                    {{-- <a href="{{url(app()->getLocale().'/admin/change-show-order-status/'.$order->id)}}"  class="btn btn-success btn-sm">show order</a> --}}
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