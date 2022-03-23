<?php $slug = $product->id ?>
@extends('admin.layouts.florist_master')
@section('title','Add Discount')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Discount</h1>
          <small>Add Discount</small>
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
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   {{-- <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url('admin/view-discounts')}}"> 
                      <i class="fa fa-eye"></i>  View Discounts </a>  
                   </div> --}}
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/add-discount/'.$product->id)}}" method="post" name="add_coupon" id="add_coupon"> {{csrf_field()}}
                     
                      <div class="form-group">
                         <input type="hidden" value="{{$product->id}}" name="product_id">
                         <label>Product Name</label>
                         <input type="text" readonly class="form-control" value="{{$product->name}}" placeholder="Enter Coupon Code" name="product_name" id="coupon_code" required>
                      </div>
                      <div class="form-group">
                         <label>Amount</label>
                         <input type="number" class="form-control" placeholder="Enter Amount" name="amount" id="coupon_amount" required>
                      </div>
                      <div class="form-group">
                        <label>Amount Type</label>
                        <select name="amount_type" id="amount_type" class="form-control">
                         <option value="Percentage">Percentage</option>
                         <option value="Fixed">Fixed</option>
                        </select>
                     </div>
                      <div class="form-group">
                         <label>Expiry Date</label>
                         <input type="text" class="form-control" name="expiry_date" id="datepicker" required>
                      </div> 
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Discount">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                        <h4>View Discounts</h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="btn-group">
                     <div class="buttonexport" id="buttonlist"> 
                     <a class="btn btn-add" href="{{url(app()->getLocale().'/admin/add-product')}}"> <i class="fa fa-plus"></i> Add Product
                        </a>  
                     </div>
                     
                  </div>
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">
                     <form enctype="multipart/form-data" action="" method="post"> {{csrf_field()}}
                        <thead>
                           <tr class="info">
                              <th>Product Name</th>
                              <th>Amount</th>
                              <th>Amount Type</th>
                              <th>Expiry Date</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($discounts as $discount)
                           <tr>

                           <td>{{$product->name}}</td>
                           <td>
                              {{$discount->amount}}
                              @if($discount->amount_type == "Percentage") % @else € @endif
                              
                           </td>
                           <td>{{$discount->amount_type}}</td>
                           <td>{{$discount->expiry_date}}</td>
                           <td>
                              <input type="checkbox" class="DiscountStatus btn btn-success" rel="{{$discount->id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                              @if($discount->status=="1") checked @endif>
                              <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                          </td>
                              <td class="center">
                                 <div class="btn-group">
                                       <a href="{{url(app()->getLocale().'/admin/delete-discount/'.$discount->id )}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
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
 </div>
 <!-- /.content-wrapper -->

@endsection