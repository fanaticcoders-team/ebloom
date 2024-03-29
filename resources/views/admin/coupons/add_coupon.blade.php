@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Add Coupon')
@else
@section('title','Προσθήκη Κουπονιού')
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
          <h1>
             {{-- Add Coupon --}}
             {{__('florist.Προσθήκη Κουπονιού')}}
            </h1>
          {{-- <small>Add Coupons</small> --}}
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
                      <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/view-coupons')}}"> 
                      <i class="fa fa-eye"></i>  
                      {{__('florist.Προβολή κουπονιών')}}
                      {{-- View Coupons --}}
                      </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/admin-add-coupon')}}" method="post" name="add_coupon" id="add_coupon"> {{csrf_field()}}
                     
                      <div class="form-group">
                         <label>
                           
                           {{__('florist.Κωδικός κουπονιού')}}
                           {{-- Coupon Code --}}
                           </label>
                         <input type="text" class="form-control" 
                         placeholder="{{__('florist.Εισάγετε Κωδικό Κουπονιών')}} "
                         {{-- placeholder="Enter Coupon Code"  --}}
                         name="coupon_code" id="coupon_code" required>
                      </div>
                      <div class="form-group">
                         <label>
                           
                           {{__('florist.Ποσό Έκπτωσης')}}
                           {{-- Amount --}}
                           </label>
                         <input type="text" class="form-control" 
                           placeholder="{{__('florist.Εισάγετε Ποσό')}} "
                         {{-- placeholder="Enter Amount"  --}}
                         name="coupon_amount" id="coupon_amount" required>
                      </div>
                      <div class="form-group">
                        <label>
                           
                           {{__('florist.Είδος Έκπτωσης')}}
                           {{-- Amount Type --}}
                        </label>
                        <select name="amount_type" id="amount_type" class="form-control">
                         <option value="Percentage">
                           
                           {{__('florist.Ποσοστό')}}
                           {{-- Percentage --}}
                           </option>
                         <option value="Fixed">
                           
                           {{__('florist.Σταθερό ποσό')}}
                           {{-- Fixed --}}
                           </option>
                        </select>
                     </div>
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" 
                         value=" {{__('florist.Προσθήκη Κουπονιού')}}"
                         {{-- value="Add Coupon" --}}
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

@endsection