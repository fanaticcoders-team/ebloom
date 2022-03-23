<?php $slug = $productDetails->id ?>
@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Edit Product')
@else
@section('title','Επεξεργασία προϊόντος')
@endif
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       {{-- <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div> --}}
       <div class="header-title" style="margin-left: 0px;">
          <h1>{{__('florist.Επεξεργασία προϊόντος')}}</h1>
          <small>{{__('florist.Επεξεργασία προϊόντος')}}</small>
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
                      <a class="btn btn-add " href="{{url(app()->getLocale().'/admin/view-products')}}"> 
                      <i class="fa fa-eye"></i>  
                      
                      {{__('florist.Προβολή Προϊόντος')}}
                      {{-- View Products  --}}
                     </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-12" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/edit-product/'.$productDetails->id)}}" method="post"> {{csrf_field()}}
                     
                     

                     <div id="greekProduct" class="col-md-12">
                        <div class="row">
                           
                           <div class="form-group col-md-6">
                              <label>
                                 
                                 {{__('florist.Επιλογή Κατηγορίας')}}
                                 {{-- Select Category --}}
                              </label>
                              <select name="occasion_id" id="occasion_id" class="form-control" required>
                                 @if (app()->getLocale()=="en")
                                 
                                    <?php echo $occasions_dropdown_eng; ?>

                                 @else
                                    <?php echo $occasions_dropdown; ?>
                                     
                                 @endif
                              </select> 
                           </div> 
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>
                                   
                                   {{__('florist.Όνομα Προϊόντος')}} (In Greek)
                                   {{-- Product Name --}}
                                   </label>
                                 <input type="text" class="form-control" 
                                 placeholder="{{__('florist.Εισαγωγή Ονόματος')}} "
                                 {{-- placeholder="Enter Product Name"  --}}
                                 name="product_name" value="{{$productDetails->name}}" id="product_name"  required>
                              </div>

                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>
                                    {{__('florist.Όνομα Προϊόντος')}} (In English)
                                   
                                   </label>
                                 <input type="text" class="form-control" 
                                 placeholder="{{__('florist.Εισαγωγή Ονόματος')}} "
                                 {{-- placeholder="Enter Product Name"  --}}
                                 name="product_name_english" value="{{$productDetails->name_eng}}" id="product_name"  required>
                              </div>

                           </div>
                        </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label>
                                 
                                 {{__('florist.Κωδικός Προϊόντος')}}
                                 {{-- Product Code --}}
                              </label>
                               <input type="text" class="form-control" 
                               placeholder="{{__('florist.Εισαγωγή Κωδικού')}} "
                               {{-- placeholder="Enter Product Code" --}}
                                name="product_code" id="product_code" value="{{$productDetails->code}}">
                            </div>
                            <div class="form-group col-md-6" style="display: none;">
                              <label>
                                
                                {{__('florist.Κωδικός Προϊόντος')}}
                                {{-- Product Code --}}
                                </label> 
                              <input type="text" class="form-control" 
                              placeholder="{{__('florist.Εισαγωγή Κωδικού')}} "
                              {{-- placeholder="Enter Product Code" --}}
                               name="product_code_english" id="product_code" value="{{$productDetails->code_eng}}">
                            </div>
                            
                         </div>
                         <div class="row">
                            <div class="col-md-6">

                               <div class="form-group">
                                  <label>
                                    
                                    {{__('florist.Περιγραφή Προϊόντος')}} (In Greek)
                                    {{-- Product Description --}}
                                    </label>
                                  <textarea name="product_description" id="product_description" class="form-control">{{$productDetails->description}}</textarea>
                               </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                 <label>
                                   
                                   {{__('florist.Περιγραφή Προϊόντος')}} (In English)
                                   {{-- Product Description --}}
                                   </label>
                                 <textarea name="product_description_english" id="product_description" class="form-control">{{$productDetails->description_eng}}</textarea>
                              </div>
                            </div>
                         </div>
                         <div class="row">

                            <div class="form-group col-md-6">
                               <label>
                                 
                                 {{__('florist.Τιμή Προϊόντος')}}
                                 {{-- Product Price --}}
                                 </label>
                               <input type="text" class="form-control" 
                               placeholder="{{__('florist.Εισαγωγή τιμής')}} "
                               {{-- placeholder="Enter Price"  --}}
                               name="product_price" id="product_price" value="{{$productDetails->price}}" required>
                            </div>
                         </div>
                         <div class="form-group">
                           <label>
                              
                              {{__('florist.Φόρτωση Εικόνα')}}
                              {{-- Picture upload --}}
                           </label>
                           <input type="file" name="image">
                           <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                           @if(!empty($productDetails->image))
                              <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$productDetails->image)}}"> 
                           @endif  
   
                        </div>

                     </div>


                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="{{__('florist.Επεξεργασία προϊόντος')}}">
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