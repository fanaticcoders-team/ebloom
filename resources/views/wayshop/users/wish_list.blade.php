@extends('wayshop.layouts.master')
@section('content')

    <!-- Start Cart  -->
    <div class="cart-box-main">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_amount = 0; ?>
                                @foreach($wish_list as $wish)
                                    @foreach ($products as $product)
                                        @if ($product->id==$wish->product_id)
                                            <tr>
                                                <td class="thumbnail-img">
                                                    <a href="#">
                                                <img class="img-fluid" src="{{asset('/uploads/products/'.$product->image)}}" alt="" />
                                                </a>
                                                </td>
                                                <td class="name-pr">
                                                <a class="" href="{{url('/products/'.$product->slug)}}" style="color:#D33B33">{{$product->name}}</a>

                                                {{-- <a class="list-group-item list-group-item-action" href="{{url('/products/'.$product->slug)}}" >{{$product->name}} <small class="text-muted"></small></a> --}}
                                                <p>{{$product->code}} |</p>
                                                </td>
                                                <td class="price-pr">
                                                    <p>${{$product->price}}</p>
                                                </td>
                                                <td class="remove-pr">
                                                <a href="{{url('/delete-wish-list/'.$product->slug)}}">
                                                <i class="fas fa-times"></i>
                                                </a>
                                                </td>
                                            </tr>
                                            @break;
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- End Cart -->

@endsection