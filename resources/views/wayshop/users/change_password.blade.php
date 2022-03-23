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
     <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
             <div class="contact-form-right">
                 <h2>Change Password !</h2>
                 <form action="{{url('/change-password')}}" method="POST" id="contactForm registerForm"> {{csrf_field()}}
                     <div class="row">
                         
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="current_pass">Currnt Password </label>
                                <input type="password" class="form-control" placeholder="Current Password" id="password-field2" name="current_pass" required data-error="Please Enter Your Current Password">
			                    <span toggle="#password-field2" id="password-eye2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			                    
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">New Password </label>
                                <input type="password" class="form-control" placeholder="New Password" id="password-field" name="password" required data-error="Please Enter Your New Password">
			                    <span toggle="#password-field" id="password-eye" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" id="submit" type="submit">Save</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                     </div>
                 </form>
             </div>

         </div>
         
     </div>
    </div>

</div>

@endsection