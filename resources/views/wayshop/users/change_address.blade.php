@extends('wayshop.layouts.master')
@section('content')

<div class="contact-box-main">

    <div class="container">
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
    <form action="{{url('/change-address')}}" method="POST" id="contactForm registerForm"> {{csrf_field()}}
     <div class="row">
         <div class="col-lg-3 col-sm-12">

         </div>
         <div class="col-lg-6 col-sm-12">
             <div class="contact-form-right">
                 <h2>Change Address</h2>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                <label for="name" >Name</label>
                                 <input type="text" class="form-control" placeholder="Name" id="name" @if (!empty($userDetails->name)) value="{{$userDetails->name}}" @endif name="name" required data-error="Please Enter Your Name">
                                 <div class="help-block with-errors"></div>
                             </div>

                         </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" >Address</label>
                                <input type="text" class="form-control" placeholder="Address" id="address" @if (!empty($userDetails->address)) value="{{$userDetails->address}}" @endif name="address" required data-error="Please Enter Your Email">
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" >City</label>

                                <input type="text" class="form-control" placeholder="City" id="city" name="city" @if (!empty($userDetails->city)) value="{{$userDetails->city}}" @endif required data-error="Please Enter Your Password">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" >Province</label>

                                <input type="text" class="form-control" placeholder="Province" id="state" name="state" @if (!empty($userDetails->state)) value="{{$userDetails->state}}" @endif required data-error="Please Enter Your Password">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" >Zip Code</label>
                                <input type="text" class="form-control" placeholder="Zip Code" id="pincode" name="pincode" @if (!empty($userDetails->pincode)) value="{{$userDetails->pincode}}" @endif required data-error="Please Enter Your Password">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" >Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile" id="mobile" name="mobile" @if (!empty($userDetails->mobile)) value="{{$userDetails->mobile}}" @endif required data-error="Please Enter Your Password">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" id="submit" type="submit">Change Address</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                     </div>
                 
             </div>

         </div>
     </div>
    </form>
    </div>

</div>

@endsection