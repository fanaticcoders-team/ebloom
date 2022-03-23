<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title text-center" style="margin-top: 10px;">
                {{-- <a href="{{url('/welcome')}}"> --}}
                    <img src="{{asset('frontEnd-assets/images/logo-svg.svg')}}" alt="eBloom logo" width="250px" height="150px">
                {{-- </a> --}}
            </div>
    		<div class="invoice-title">
                <h2>Order # {{$orderDetails->orderNo}}</h2>
                <button class="btn btn-success" id="btnPrint" style="float: right; position: relative;top: -35px;">Print</button>
                <hr>
                
            </div>
            <script>
                const $btnPrint = document.querySelector("#btnPrint");
                $btnPrint.addEventListener("click", () => {
                    // $btnPrint.style.display = 'none';
                    window.print();
                });
                $btnPrint.style.display = 'block';

            </script>
    		
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Reciver Details:</strong><br>
                    <b> Name: </b>{{$orderDetails->name}} <br>
                    <b> Address:</b> {{$orderDetails->address}} <br>
                    <b> City: </b>{{$orderDetails->city}} <br>
                    <b> Floor: </b>{{$orderDetails->floor}} <br>
                    <b> Doorbell Name: </b>{{$orderDetails->doorbell}} <br>
                    <b> Mobile: </b>{{$orderDetails->mobile}} <br>
                    <b> Address Message: </b>{{$orderDetails->address_msg}} <br>
                    
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Sender Details:</strong><br>
                    @if ($orderDetails->sender=="Company")
                    <b> Company Address: </b>{{$orderDetails->company}} <br>
                    @else
                    <b> Sender Name: </b>{{$orderDetails->senderName}} <br>
                    @endif
                    <b> Sender Phone: </b>{{$orderDetails->optional_phone}} <br>
                    <b> Delivery Date: </b>{{$orderDetails->delivery_date}} <br>
                    <b> Delivery Hour: </b> @if ($timetable == null)
                            Any Time
                        @else    
                            {{$timetable->fromHour}}:00 - {{$timetable->toHour}}:00
                        @endif
                    <br>

                               
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				{{-- <address>
    					<strong>Payment Method:</strong><br>
    					COD
    				</address> --}}
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date-Time:</strong><br>
    					{{$orderDetails->created_at}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-striped">
    						<thead>
                                <tr>
        							<td><strong>Product Code</strong></td>
        							<td class="text-center"><strong>Product Name</strong></td>
        							<td class="text-center"><strong>Product Price</strong></td>
                                    <td class="text-right"><strong>Product Qty</strong></td>
                                    <td class="text-center"><strong>Gift Card</strong></td>
                                    <td class="text-center"><strong>Gift Message</strong></td>
                                    <td class="text-center"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
                                @foreach ($orderDetails->orders as $pro)
                                
                                    <tr>
                                        <td class="text-left">
                                            @foreach ($products as $item)
                                                @if ($item->id == $pro->product_id)
                                                {{$item->code}}
                                                @break
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{$pro->product_name}}</td>
                                        <td class="text-center">{{$pro->product_price}} €</td>
                                        <td class="text-center">{{$pro->product_qty}}</td>
                                        
                                        @if ($pro->gift == 'yes')
                                            <td class="text-center">ΝΑΙ</td>
                                        @else
                                            <td class="text-center">ΟΧΙ</td>
                                        @endif
                                        <td class="text-center">{{$pro->gift_msg}}</td>
                                        <td class="text-center"><?php echo $pro->product_price* $pro->product_qty?> €</td>
                                    </tr>
                                
                                @endforeach
                                <?php $total_amunt = 0; ?>

                                @foreach ($orderDetails->orders as $item)
                                    <?php $total_amunt = $total_amunt + ($item->product_price*$item->product_qty); ?>
                                @endforeach
                               
    							<tr>
    								<td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
                                <td class="thick-line text-center"><?php echo $total_amunt ?> €</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="no-line text-center"><strong>Shipping Charges</strong></td>
    								<td class="no-line text-center">{{$orderDetails->shipping_charges}} €</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="no-line text-center"><strong>Coupon Discount</strong></td>
                                    <td class="no-line text-center">{{$orderDetails->coupon_amount}} €</td>
                                </tr>
    							<tr>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="no-line text-center"><strong>Grand Total</strong></td>
    								<td class="no-line text-center">{{$orderDetails->grand_total}} €</td>
                                </tr>
                                
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>