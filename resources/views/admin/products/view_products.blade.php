@if (Session::has('florist_flowers_id'))
    
<?php $slug = Session::get('florist_flowers_id'); ?>
@endif
@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','View Products')
@else
@section('title','Προβολή Προϊόντος')
@endif


@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
<!-- Content Wrapper. Contains page content -->
<style>
   /* .dataTables_filter label{
      display: none !important;
   } */
   /* .dataTables_filter label input[type=search]:before{
      content: 'test',
   }
   .dataTables_filter label:before {
      content: 'Αναζήτηση ';
   } */
</style>
{{-- <input type="search" class="" placeholder="" aria-controls="table_id"> --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>  --}}
       <div class="header-title" style="margin-left: 0px;">
          <h1>
            {{__('florist.Προβολή Προϊόντος')}}
            {{-- View Products --}}
            </h1>
          <small>
            {{__('florist.Λίστα Προϊόντων')}}
            {{-- Products List --}}
            </small>
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
                           {{__('florist.Προβολή Προϊόντος')}}
                           {{-- View Products --}}
                           </h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url(app()->getLocale().'/admin/add-product')}}"> <i class="fa fa-plus"></i> 
                        {{__('florist.Προσθήκη Προϊόντος')}}
                        {{-- Add Product --}}
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               {{-- <th>ID</th> --}}
                               <th>
                                 {{__('florist.Όνομα Προϊόντος')}}
                                 {{-- Product Name --}}
                                 </th>
                               <th>
                                 
                                 {{__('florist.Κωδικός Προϊόντος')}}

                                 {{-- Product Code --}}
                                 </th>
                               <th>
                                 
                                 {{__('florist.Εικόνα')}}

                                 {{-- Image --}}
                                 </th>
                               <th>
                                 
                                 {{__('florist.Τιμή')}}

                                 {{-- Price --}}
                                 </th>
                               <th>
                                 
                                 {{__('florist.Έκπτωση')}}

                                 {{-- Discount --}}
                                 </th>
                               <th>
                                 
                                 {{__('florist.Κατάσταση')}}

                                 {{-- Status --}}
                                 </th>
                              {{-- <th>
                                 Προτεινόμενοι
                                 Featured Products
                              </th> --}}
                               <th>
                                  
                                 {{__('florist.Εργαλεία')}}

                                 {{-- Action --}}
                                 </th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($products as $product)
                            <tr>
                            {{-- <td>{{$product->id}}</td> --}}
                            <td>
                               @if (app()->getLocale() == 'en')
                               {{$product->name_eng ?? $product->name }}
                                   
                               @else
                               {{$product->name}}

                               @endif
                              </td>
                              
                            <td>{{$product->code}}</td>
                               <td>
                                   @if(!empty($product->image))
                               <img src="{{asset('/uploads/products/'.$product->image)}}" alt="" style="width:100px;">
                               @endif
                               </td>
                               <td>{{$product->price}}€</td>
                                 <td>
                                    <?php $count = 0; ?>
                                    @foreach ($discounts as $discount)
                                        @if ($discount->product_id == $product->id)
                                        {{-- , strtotime(' +1 day') --}}
                                          @if ($discount->status == '1' )
                                             <?php $dateNow = date("d/m/Y") ?>

                                             <?php 
                                                $dateNow = \Carbon\Carbon::now();
                                                
                                                $expire_date = \Carbon\Carbon::createFromFormat('d/m/Y', $discount->expiry_date);
                                                $data_diff = $dateNow->diffInDays($expire_date, false);  //false param
                                             
                                             ?>

                                             @if ($data_diff > 0 )
                                                {{$dateNow->format('d/m/Y')}}
                                                {{-- //not expired --}}
                                                @break

                                             @elseif($data_diff < 0)
                                                
                                                {{-- //expired --}}
                                                {{-- @break --}}
                                             @endif
                                          @endif
                                        @endif
                                    @endforeach
                                    {{-- @if ($count == 0)
                                        No
                                    @endif --}}
                                 </td>
                              <td>
                                 <input type="checkbox" class="ProductStatus btn btn-success" rel="{{$product->id}}"
                                 data-toggle="toggle" 
                                 data-on="Ενεργό"
                                 {{-- data-on="Enabled" --}}
                                 data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                 @if($product['status']=="1") checked @endif>
                                 <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td> 
                               {{-- <td>
                                 <input type="checkbox" class="FeaturedStatus btn btn-success" rel="{{$product->id}}"
                                 data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                 @if($product['status']=="1") checked @endif>
                                 <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td> --}}
                               <td>
                                 {{-- <a href="{{url('/admin/add-images/'.$product->id)}}" class="btn btn-info btn-sm" title="Add Images"><i class="fa fa-image"></i></button> --}}
                              {{-- <a href="{{url('/admin/add-attributes/'.$product->id)}}" class="btn btn-warning btn-sm" title="Add Attributes"><i class="fa fa-list"></i></button> --}}
                                 <a href="{{url(app()->getLocale().'/admin/add-discount/'.$product->id)}}" class="btn btn-warning btn-sm" 
                                    title="Προσθήκη έκπτωσης"
                                    {{-- title="Add Discount" --}}
                                    ><i class="fa fa-list"></i></button>
                              
                                 <a href="{{url(app()->getLocale().'/admin/edit-product/'.$product->id)}}" class="btn btn-add btn-sm "  
                                    title="Επεξεργασία"
                                    {{-- title="Edit Product" --}}
                                    ><i class="fa fa-pencil"></i></button>
                                 <a href="{{url(app()->getLocale().'/admin/delete-product/'.$product->id)}}" class="btn btn-danger btn-sm delete-btn" data-id="{{$product->id}}" 
                                    Διαγραφή
                                    {{-- title="Delete Product" --}}
                                    ><i class="fa fa-trash-o"></i> </button>
                               </td>
                            </tr>
                             @endforeach
                         </tbody>
                      </table>
                      {{-- {{$products->links()}} --}}
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
        if (!confirm("Θέλετε να διαγραφεί;")){
           // console.log("not confirm");
           return false;
        }else{
           // console.log("confirm");
           // window.location.href = `{{ url('/admin/view-florists')}}`;
           window.location.href = `{{ url(app()->getLocale().'/admin/delete-product/${id}')}}`;
        }
     });
  });
</script>

{{-- <script>
   $(document).ready(function () {
      // alert('check');
      $('.dataTables_filter').empty();
      $('.dataTables_filter').html(`
      <span>
         Αναζήτηση
         <input type="search" class="" placeholder="" aria-controls="table_id">
      </span>
      `);
   });
</script> --}}
 <!-- /.content-wrapper -->
@endsection