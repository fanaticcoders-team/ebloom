@extends('admin.layouts.florist_master')
@if (app()->getLocale() == 'en')
@section('title','Add Product')
@else
@section('title',"Προσθήκη Προϊόντος")
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
          <h1>{{__('florist.Προσθήκη Προϊόντος')}}</h1>
          {{-- <small>Προσθήκη Προϊόντος</small> --}}
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
                      {{__('florist.Προβολή Προϊόντων')}}
                      {{-- View Products  --}}
                     </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-12" enctype="multipart/form-data" action="{{url(app()->getLocale().'/admin/add-product')}}" method="post"> {{csrf_field()}}
                     {{-- <div class="form-group">
                        <label>Under Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                           
                        </select> 
                     </div> --}}
                     <div id="greekProduct" class="col-md-12">
                        <div class="row">
                           
                           <div class="form-group col-md-6">
                              <label>
                                 
                                 {{__('florist.Επιλογή Κατηγορίας')}}
                                 {{-- Select Category --}}
                              </label>
                              <select name="occasion_id" id="occasion_id" class="form-control" required>
                                 @if (app()->getLocale()=='en')
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
                                 name="product_name" id="product_name"  required>
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
                                 name="product_name_english" id="product_name"  required>
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
                                name="product_code" id="product_code" >
                            </div>
                            <div class="form-group col-md-6" style="display: none">
                              <label>
                                
                                {{__('florist.Κωδικός Προϊόντος')}} (In English)
                                {{-- Product Code --}}
                                </label> 
                              <input type="text" class="form-control" 
                              placeholder="{{__('florist.Εισαγωγή Κωδικού')}} "
                              {{-- placeholder="Enter Product Code" --}}
                               name="product_code_english" id="product_code" >
                            </div>
                            
                         </div>
                         <div class="row">
                            <div class="col-md-6">

                               <div class="form-group">
                                  <label>
                                    
                                    {{__('florist.Περιγραφή Προϊόντος')}} (In Greek)
                                    {{-- Product Description --}}
                                    </label>
                                  <textarea name="product_description" id="product_description" class="form-control"></textarea>
                               </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                 <label>
                                   
                                   {{__('florist.Περιγραφή Προϊόντος')}} (In English)
                                   {{-- Product Description --}}
                                   </label>
                                 <textarea name="product_description_english" id="product_description" class="form-control"></textarea>
                              </div>
                            </div>
                         </div>
                         <div class="row">

                            <div class="form-group col-md-6">
                               <label>
                                 
                                 {{__('florist.Τιμή Προϊόντος')}}
                                 {{-- Product Price --}}
                                 </label>
                               <input type="number" class="form-control" 
                               placeholder="{{__('florist.Εισαγωγή τιμής')}} "
                               {{-- placeholder="Enter Price"  --}}
                               name="product_price" id="product_price" min="0" required>
                            </div>
                         </div>
                         <div class="form-group">
                           <label>
                              
                              {{__('florist.Φόρτωση Εικόνα')}}
                              {{-- Picture upload --}}
                           </label>
                           <input type="file" name="image" >
                          
                        </div>

                     </div>
                     
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" 
                         value="{{__('florist.Προσθήκη Προϊόντος')}}"
                         {{-- value="Add Product" --}}
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
 <script>
    $(document).ready(function () {
       
    })
    function InvalidMsg(textbox) {
  
  if (textbox.value === '') {
      textbox.setCustomValidity
            ('Entering an email-id is necessary!');
  } else if (textbox.validity.typeMismatch) {
      textbox.setCustomValidity
            ('Please enter an email address which is valid!');
  } else {
      textbox.setCustomValidity('');
  }

  return true;
}
 </script>

@endsection