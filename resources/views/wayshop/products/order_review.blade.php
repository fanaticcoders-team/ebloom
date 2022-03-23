@extends('wayshop.layouts.master')
@section('content')

<div class="contact-box-main">

    <div class="container">
    
    
     <div class="row">
         <div class="col-lg-3 col-sm-12">

         </div>
         <div class="col-lg-6 col-sm-12">
             <div class="contact-form-right">
                 <h2>Shipping Details</h2>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                <label for="name" ><b>Name :</b></label>
                                {{$shippingDetails->name}}
                             </div>

                         </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> Address : </b></label>
                                {{$shippingDetails->address}}

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> City : </b></label>
                                {{$shippingDetails->city}}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> Province : </b></label>
                                {{$shippingDetails->state}}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> Country : </b></label>                                {{$shippingDetails->name}}
                                {{$shippingDetails->country}}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> Zip Code : </b></label>
                                {{$shippingDetails->pincode}}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" ><b> Mobile Number : </b></label>
                                {{$shippingDetails->mobile}}

                            </div>
                        </div>
                     </div>
                 
             </div>

         </div>
         
         {{-- <div class="col-lg-6 col-sm-12">
            <div class="contact-form-right">
                <h2>Ship To</h2>
                   <div class="row"> 
                        <div class="col-md-12">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email" id="email" name="email" required data-error="Please Enter Your Email">
                               <div class="help-block with-errors"></div>
                           </div>

                       </div>
                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-error="Please Enter Your Password">
                               <div class="help-block with-errors"></div>
                           </div>

                       </div>
                       <div class="col-md-12">
                           <div class="submit-button text-center">
                               <button class="btn hvr-hover" id="submit" type="submit">Login</button>
                               <div id="msgSubmit" class="h3 text-center hidden"></div>
                               <div class="clearfix"></div>
                           </div>

                       </div>
                    </div>
                
            </div>
         </div> --}}
     </div>
    </div>

</div>
<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <h3>Order summary</h3>
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total_amount = 0;?>
                            @foreach ($userCart as $cart)
                                
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                <img class="img-fluid" src="{{asset('/uploads/products/'.$cart->image)}}" alt="" />
                                </a>
                                </td>
                                <td class="name-pr">
                                    
									{{$cart->product_name}}
                                    <p>{{$cart->product_code}} | {{$cart->size}}</p>
                                </td>
                                <td class="price-pr">
                                    <p>PKR {{$cart->price}}</p>
                                </td>
                                <td class="quantity-box">
                                    {{$cart->quantity}} 
                                </td>
                                <td class="total-pr">
                                    <p>PKR {{$cart->price*$cart->quantity}}</p>
                                </td>
                                
                            </tr>
                            <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="order-box">
                    <h3>Your Total</h3>
                    <div class="d-flex">
                        <h4>Cart Sub Total</h4>
                        <div class="ml-auto font-weight-bold"> PKR {{$total_amount}} </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost (+)</h4>
                        <div class="ml-auto font-weight-bold"> PKR 0 </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount (-)</h4>
                        <div class="ml-auto font-weight-bold">
                            @if (!empty(Session::get('CouponAmount')))
                                PKR {{Session::get('CouponAmount')}}
                            @else
                                PKR 0
                            @endif 
                        </div>
                    </div>
                    
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> {{$grand_total = $total_amount - Session::get('CouponAmount')}} </div>
                    </div>
                    <hr> 
                </div>
            </div>
            
        </div>

        <form id="paymentForm" name="paymentForm" action="{{url('/place-order')}}" method="post">{{ csrf_field() }}
            <input type="hidden" value="{{$grand_total}}" name="grand_total">
            <hr class="mb-4">
            <div class="title-left">
                <h3>Payments</h3>
            </div>
            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input type="radio" name="payment_method" class="custom-control-input cod" value="cod" id="credit">
                    <label for="credit" class="custom-control-label">Cash On Delivery</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" name="payment_method" value="paypal" class="custom-control-input paypal" id="debit">
                    <label for="debit" class="custom-control-label">Direct Bank Transfer</label>
                </div>
                <div class="col-12 d-flex shopping-box">
                    <button type="submit" class="ml-auto btn hvr-hover" onclick="return selectPaymentMethod();" style="color:white;">
                        Place Order
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- End Cart -->

@endsection