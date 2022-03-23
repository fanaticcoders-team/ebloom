<?php $slug = $couponDetails->id ?>
@extends('admin.layouts.master')
@if (app()->getLocale() == 'en')
@section('title','Edit Coupon')
@else
@section('title','Επεξεργασία κουπονιού')
@endif
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px">
          <h1>{{__('florist.Επεξεργασία κουπονιού')}}</h1>
          <small>{{__('florist.Επεξεργασία κουπονιού')}}</small>
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
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/admin-view-coupons')}}"> 
                      <i class="fa fa-eye"></i>  
                      
                      {{__('florist.Προβολή κουπονιών')}}
                      {{-- View Coupons  --}}
                     </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/edit-coupon/'.$couponDetails->id)}}" method="post" name="edit_coupon" id="edit_coupon"> {{csrf_field()}}
                     
                      <div class="form-group">
                         <label>
                           
                           {{__('florist.Κωδικός κουπονιού')}}
                           {{-- Coupon Code --}}
                           </label>
                         <input type="text" class="form-control" value="{{$couponDetails->coupon_code}}" name="coupon_code" id="coupon_code" required>
                      </div>
                      <div class="form-group">
                         <label>
                           
                           {{__('florist.Ποσό Έκπτωσης')}}
                           {{-- Amount --}}
                           </label>
                         <input type="text" class="form-control" value="{{$couponDetails->amount}}" name="coupon_amount" id="coupon_amount" required>
                      </div>
                      <div class="form-group">
                        <label>
                          
                          {{__('florist.Χρήσεις Κουπονιού')}} 
                          {{-- Coupon Count --}}
                        </label>
                        <input type="number" min="0" class="form-control" 
                        placeholder="Enter Coupon Count" 
                        name="coupon_count" id="coupon_count" value="{{$couponDetails->coupon_count}}" required>
                     </div>
                      <div class="form-group">
                        <label>
                           
                           {{__('florist.Είδος Έκπτωσης')}}
                           {{-- Amount Type --}}
                        </label>
                        <select name="amount_type" id="amount_type" class="form-control">
                        <option  @if($couponDetails->amount_type=="Percentage") selected @endif value="Percentage">{{__('florist.Ποσοστό')}}</option>
                        <option  @if($couponDetails->amount_type=="Fixed") selected @endif value="Fixed"> {{__('florist.Σταθερό ποσό')}}</option>
                        </select>

                     </div>
<!--                      <div class="form-group">
                         <label>
                           
                           {{__('florist.Ημερομηνία λήξης')}}
                           {{-- Expiry Date --}}
                           </label>
                         <input type="text" value="{{$couponDetails->expiry_date}}" class="form-control" name="expiry_date" id="datepicker" required>
                      </div>-->
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="{{__('florist.Επεξεργασία κουπονιού')}}">
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

@endsection