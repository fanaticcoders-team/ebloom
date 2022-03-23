@extends('wayshop.layouts.master')
@section('content')
<?php $check = 0?>
<body>



<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        @foreach($banners as $banner)
        <li class="{{$banner->text_style}}">
        <img src="uploads/banners/{{$banner->image}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>{!!$banner->name!!}</strong></h1>
                        <p class="m-b-40">{!!$banner->content!!}</p>
                    <p><a class="btn hvr-hover" href="{{$banner->link}}">Shop New</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="{{url('/results')}}" method="post"> {{ csrf_field() }}
                                <input class="form-control" name="query" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Occasions</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                @foreach($occasions as $occasion)
                                <div class="list-group-collapse sub-men">
                                    {{-- <a class="list-group-item list-group-item-action" href="#{{$occasion->id}}" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">{{$occasion->name}} <small class="text-muted"></small> --}}
                                    <a class="list-group-item list-group-item-action" href="{{url('/occasions/'.$occasion->slug)}}" >{{$occasion->name}} <small class="text-muted"></small>
                                
                                </a>
                                    {{-- <div class="collapse" id="{{$occasion->id}}" data-parent="#list-group-men">
                                        <div class="list-group">
                                            @foreach($cat->categories as $key=>$subcat)
                                                <a href="{{url('/categories/'.$subcat->id)}}" class="list-group-item list-group-item-action">{{$subcat->name}}</a>
                                            @endforeach
                                        </div>
                                    </div> --}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Types</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                @foreach($types as $type)
                                <div class="list-group-collapse sub-men">
                                    {{-- <a class="list-group-item list-group-item-action" href="{{url('/categories/'.$occasion->id)}}" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">{{$occasion->name}} <small class="text-muted"></small> --}}
                                    <a class="list-group-item list-group-item-action" href="{{url('/types/'.$type->slug)}}" >{{$type->name}} <small class="text-muted"></small></a> 
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        {{-- <p class="sale">Sale</p> --}}
                                                    </div>
                                                <img src="uploads/products/{{$product->image}}" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            @if (count($wish_list)>0)
                                                                
                                                            @foreach ($wish_list as $wish)
                                                                @if ($product->id==$wish->product_id)
                                                                    <?php $check=1 ?>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Already Added In Wishlist"><i class="fa fa-heart"></i></a></li>
                                                                @break
                                                                {{-- @else
                                                                <li><a href="{{url('/add-to-wish-list/'.$product->slug)}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}

                                                                @endif
                                                            @endforeach
                                                            @if ($check==0)
                                                            <li><a href="{{url('/add-to-wish-list/'.$product->slug)}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                
                                                            @endif

                                                            @else
                                                            <li><a href="{{url('/add-to-wish-list/'.$product->slug)}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>

                                                            @endif
                                                        </ul>
                                                    <a class="cart" href="{{url('/products/'.$product->slug)}}">Detail Page</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>{{$product->description}}</h4>
                                                    <h5>$ {{$product->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->



<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        @foreach($products as $product)
        
            <div class="item">
                <div class="ins-inner-box">
                    <img src="uploads/products/{{$product->image}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div> 
        @endforeach
        {{-- <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-05.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div> --}}
        
    </div>
</div>
<!-- End Instagram Feed  -->

</body>

@endsection