@extends('admin.layouts.master')
@if (app()->getLocale() == 'en')
@section('title','View Coupons')
@else
@section('title','Προβολή κουπονιών')
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
            {{__('florist.Προβολή κουπονιών')}}
            {{-- View Coupons --}}
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
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>
                           {{__('florist.Προβολή κουπονιών')}}
                           {{-- View Coupons --}}
                           </h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url(app()->getLocale().'/admin/admin-add-coupon')}}"> <i class="fa fa-plus"></i> 
                        {{__('florist.Προσθήκη Κουπονιού')}}
                        {{-- Add Coupon --}}
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                                <th>
                                  
                                 {{__('florist.Id κουπονιού')}}
                                 
                                 {{-- Coupon ID --}}
                                 </th>
                                <th>
                                 
                                 {{__('florist.Κωδικός κουπονιού')}}
                                 
                                 {{-- Coupon Code --}}
                                 </th>
                                <th>
                                 
                                 {{__('florist.Ποσό Έκπτωσης')}}
                                 
                                 {{-- Amount --}}
                                 </th>
                                 <th>

                                 {{__('florist.Ενεργές Χρήσεις Κουπονιού')}}

                                 {{-- Coupon Count --}}
                                    
                                </th>
                                <th>
                                 
                                 {{__('florist.Είδος Έκπτωσης')}}

                                 {{-- Amount Type --}}
                                 </th>
<!--                                <th>
                                 
                                 {{__('florist.Ημερομηνία λήξης')}}

                                 {{-- Expiry Date --}}
                                 </th>-->
                                <th>
                                 
                                 {{__('florist.Ημερομηνία δημιουργίας')}}

                                 {{-- Created Date --}}
                                 </th>
                                <th>
                                 
                                 {{__('florist.Κατάσταση')}}

                                 {{-- Status --}}
                                 </th>
                                <th>
                                 {{__('florist.Εργαλεία')}}
                                 {{-- Actions --}}
                                 </th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($coupons as $coupon)
                            <tr>
                            <td>{{ $coupon->id }}</td>
                            <td>{{ $coupon->coupon_code }}</td>
                            <td>
                            {{ $coupon->amount }}
                            @if($coupon->amount_type == "Percentage") % @else € @endif
                            </td>
                            <td>{{ $coupon->coupon_count }}</td>
                            <td>{{ $coupon->amount_type }}</td>
                            <!--<td>{{ $coupon->expiry_date }}</td>-->
                            <td>{{ $coupon->created_at->format('d/m/Y') }}</td>
                            <td>
                                <input type="checkbox" class="CouponStatus btn btn-success" rel="{{$coupon->id}}" data-toggle="toggle" 
                                data-on="{{__('florist.Ενεργό')}}"
                                {{-- data-on="Enabled"  --}}
                                data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                @if($coupon['status']=="1") checked @endif>
                                <div id="myElem" style="display:none" class="alert alert-success">Status Enabled</div>
                            </td>
                            <td>
                            <a href="{{url(app()->getLocale().'/admin/admin-edit-coupon/'.$coupon->id)}}" class="btn btn-add btn-sm" title="{{__('florist.Επεξεργασία')}} "><i class="fa fa-pencil"></i></a>
                            <a  href="{{url(app()->getLocale().'/admin/delete-coupon/'.$coupon->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$coupon->id}}" title="Διαγραφή"><i class="fa fa-trash-o"></i> </a>
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
 <script>
   $(document).ready(function(){
     $(".delete-btn").click(function(){
        var id =$(this).attr('data-id');
        // console.log("id :"+id);
      //   Do you want to delete
        if (!confirm("Θέλετε να διαγραφεί;")){
           // console.log("not confirm");
           return false;
        }else{
           // console.log("confirm");
           // window.location.href = `{{ url('/admin/view-florists')}}`;
           window.location.href = `{{ url(app()->getLocale().'/admin/delete-coupon/${id}')}}`;
        }
     });
  });
</script>
 <!-- /.content-wrapper -->
@endsection