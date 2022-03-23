@extends('wayshop.layouts.master')
@section('content')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$productDetails->name}}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">{{$productDetails->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
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
    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach($ProductsAltImages as $key=>$images)
                        <div class="carousel-item {{$key==0 ? 'active' : ''}}"> <img class="d-block w-100" src="{{asset('/uploads/products/'.$images->image)}}" width="300px" height="350px" alt="First slide"> </div>
                        @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            @foreach($ProductsAltImages as $key=>$images)
                        <li data-target="#carousel-example-1" data-slide-to="{{$key}}" class="{{$key==0 ? 'active' : ''}}">
                                <img class="d-block w-100 img-fluid" src="{{asset('/uploads/products/'.$images->image)}}" width="80px" height="80px" alt="" />
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                <form name="addtoCart" method="post" action="{{url('/add-cart')}}">{{csrf_field()}}
                    <div class="single-product-details">
                    <input type="hidden" value="{{$productDetails->id}}" name="product_id">
                    <input type="hidden" value="{{$productDetails->name}}" name="product_name">
                    <input type="hidden" value="{{$productDetails->code}}" name="product_code">
                    <input type="hidden" value="{{$productDetails->company}}" name="company">
                    <input type="hidden" id="price" value="{{$productDetails->price}}" name="price">
                        <h2>Product Name : {{$productDetails->name}}</h2>
                        <h5 id="getPrice">Product Price: Rs {{$productDetails->price}}</h5>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{$productDetails->description}} </p>
                                <ul>
                                    <br>
                                    <div class="container">
                                        <h3 class="text-center">Delivery Information</h3>
                                        <p class="text-center">Fill in the following to add the product to your cart.</p>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label >Select region and recipient area</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <select name="occasion_id" id="occasion_id" class="form-control">
                                                            <option value="1">Attica</option>
                                                            </select> 
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select name="occasion_id" id="occasion_id" class="form-control">
                                                            <option value="1">Athens</option>
                                                            <option value="1">Aigina</option>
                                                            <option value="1">Alimos</option>

                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Select type of location</label>
                                                    <select name="occasion_id" id="occasion_id" class="form-control">
                                                    <option value="1">Business</option>
                                                    <option value="1">Hotel</option>
                                                    <option value="1">Hospital</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Schedule your delivery</label>
                                                    <input type="text" name="date" id="" class="form-control">  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- <div class="container row">
                                            <div class="col-md-5">
                                                <label>Add a zip code for delivery details</label>
                                            </div>
                                            <div class="col-md-7 row">
                                                <div class="col-md-6">
                                                    <input type="text" name="zip_code" id="zip_code" class="form-control"> 
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn hvr-hover" data-fancybox-close="" style="color:white;">Check</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <br>
                                        <hr color="#F5F5F5">
                                        <div class="container">
                                            <p align="center">Choose a delivery date</p>
                                            <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 text-center align-middle" style="border: 1px solid black; height:80px;border-radius:5px">
                                                            <p>Today</p><b>Mar 9</b>
                                                        </div>
                                                    &nbsp;
                                                    <div class="col-md-2" style="border: 1px solid black; height:80px">

                                                    </div>&nbsp;
                                                    <div class="col-md-2" style="border: 1px solid black; height:80px">

                                                    </div>&nbsp;
                                                    <div class="col-md-2" style="border: 1px solid black; height:80px">

                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    <br>
                                    {{-- <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Quantity</label>
                                            <input class="form-control" name="quantity" value="1" min="1" max="20" type="number">
                                        </div>
                                    </li> --}}
                                    
                                </ul>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group quantity-box">
                                            {{-- <label class="control-label">Quantity</label> --}}
                                            <input class="form-control" name="quantity" value="1" min="1" max="20" type="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="price-box-bar">
                                            <div class="cart-and-bay-btn">
                                                <button class="btn hvr-hover" data-fancybox-close="" type="submit" style="color:white;">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                {{-- <div class="add-to-btn">
                                    <div class="add-comp">
                                        <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>
                                    </div>
                                    <div class="share-bar">
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div> --}}
                    </div>
                </form>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        @foreach($featuredProducts as $featuredProduct)
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="{{asset('uploads/products/'.$featuredProduct->image)}}" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{$featuredProduct->name}}</h4>
                                    <h5>$ {{$featuredProduct->price}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->


<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-01.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-02.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-03.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-04.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-05.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-06.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-07.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-08.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-09.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-05.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->

@endsection