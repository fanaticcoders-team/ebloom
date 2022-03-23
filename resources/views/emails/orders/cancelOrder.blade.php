<html xmlns="http://www.w3.org/1999/xhtml">


<!-- BODY -->
<!-- Set message background color (twice) and text color (twice) -->
<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;"
	bgcolor="#F0F0F0"
	text="#000000">

<!-- SECTION / BACKGROUND -->
<!-- Set message background color one again -->
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background"><tr><td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
	bgcolor="#F0F0F0">

<!-- WRAPPER -->
<!-- Set wrapper width (twice) -->
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border-collapse: collapse; border-spacing: 0; padding: 0; width:100%; max-width: 600px; min-width: 300px; border:0px solid orange;" class="wrapper">


<!-- End of WRAPPER -->
</table>

<!-- WRAPPER / CONTEINER -->
<!-- Set conteiner background color -->
<table border="0" cellpadding="0" cellspacing="0" align="center"
	bgcolor="#FFFFFF" style="border-collapse: collapse; border-spacing: 0; padding: 0; width:100%; max-width: 600px; min-width: 300px; border:0px solid orange;-webkit-box-shadow: 0px 6px 15px 0px rgba(0,0,0,0.65);-moz-box-shadow: 0px 6px 15px 0px rgba(0,0,0,0.65);box-shadow: 0px 6px 15px 0px rgba(0,0,0,0.65);border-radius:10px;" class="container">

	<!-- HEADER -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 18px; font-weight: 500; line-height: 130%;
			padding-top: 25px;
			color: #000000;
            font-family: Lato;" class="header">

            <img src="https://ebloom.gr/frontEnd-assets/images/logo4.png" alt="eBloom logo" style="width: 250px;
            height: 150px;">
				{{-- 5 GREAT REASONS TO VISIT PHOTO INDEPENDENT --}}
		</td>
	</tr>
	
	<!-- SUBHEADER -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-bottom: 3px; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 18px; font-weight: 300; line-height: 150%;
			padding-top: 5px;
			color: #000000;
			font-family: sans-serif;" class="subheader">
			{{-- <a href="http://photoindependent.com/tickets/">Tickets Now Available!</a> --}}
		</td>
	</tr>

    <!-- HERO IMAGE -->
    <tr>	
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line"><hr
			color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
            padding-top: 20px; " class="hero">
            {{-- <hr> --}}
            <span style="font-size: 14px;">
              @if (app()->getLocale() == 'en' )
                  
                The order #{{$order->orderNo}} ({{ $order->created_at->format('d/m/Y') }}) for Warner has been cancelled.
              @else
                Η παραγγελία #{{$order->orderNo}} ({{ $order->created_at->format('d/m/Y') }}) για Warner ακυρώθηκε.
              @endif
            
              </span>
        </td>
    </tr>
    <tr>
		    <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
            padding-top: 20px; " class="hero">
            {{-- <hr> --}}
            @if (app()->getLocale() == 'en' )
                          
            <h3>Order Details</h3>
            @else
            
            <h3>Λεπτομέρειες Παραγγελίας</h3>
            @endif

        </td>
	  </tr>
    <tr>
      <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%;" class="list-item"><table align="center" border="0" cellspacing="0" cellpadding="0" style="width:100%; margin: 0; padding: 0; border-collapse: collapse; border-spacing: 0;">
        
              <!-- LIST ITEM -->
        <tr>
  
          <!-- LIST ITEM IMAGE -->
          <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
          <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
            padding-top: 30px;
                      padding-right: 3px;text-align:left;">
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          <tr>
                            <td
                              style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                              @if (app()->getLocale() == 'en' )
                          
                              Order Number: #{{$order->orderNo}}
                                @else
                                
                                Αριθμός παραγγελίας: #{{$order->orderNo}}
                                @endif

                            </td>
                          </tr>
                        </tbody>
                      </table>
          </td>
                  <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
                    padding-top: 30px;
                      padding-right: 3px;text-align:left;">
                      
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <td
                                style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                {{-- <small>ORDER</small> #800000025<br /> --}}
                                @if (app()->getLocale() == 'en' )
                          
                                <p>Order Date: {{ $order->created_at->format('d/m/Y') }}</p>
                                <p>Delivery Date: {{ $order->delivery_date }}</p>
                                @else
                                <p>Ημερομηνία παραγγελίας: {{ $order->created_at->format('d/m/Y') }}</p>
                                <p>Ημερομηνία παράδοσης: {{ $order->delivery_date }}</p>
                                
                                @endif


                              </td>
                            </tr>
                          </tbody>
                        </table>
                        
                  </td>
          
        </tr>
        
        
        </table>
        </td>
    </tr>
  
  
      <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 100%; font-size: 13px; font-weight: 400; line-height: 160%;
			padding-top: 25px; 
			color: #000000;
			font-family: sans-serif;" class="paragraph">
			
			<div class="email--inner-container">
				
				{{-- <table width="100%" style="border:0px solid orange;">
					<tr>
						<td><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/229436/1_orange.png" width="50px" style="padding:15px;margin-top:-30px;"></td>
						<td><div class="content" style="padding:10px;"><div class="header" style="font-weight:bold !important;margin-bottom:3px;">DISCOVER PHOTOGRAPHY AT AFFORDABLE PRICES</div>Come to the only international photography fair where you can buy art directly from the photographers who make it.
                            Talk with the creators and gain insight  into work that will delight and inspire you.</div></td>
					</tr>
					
                </table> --}}
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                    <tbody>
                      <tr>
                        <th
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                          width="40%" align="left">
                          @if (app()->getLocale() == 'en' )
                          
                          Product Name
                          @else
                          
                          Όνομα προϊόντος
                          @endif
                        </th>
                        <th
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                          width="80px" align="left">
                          @if (app()->getLocale() == 'en' )
                          
                          Product Image
                          @else
                          
                          Εικόνα προϊόντος
                          @endif
                        </th>
                        <th width="10%"
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                          align="center">
                          @if (app()->getLocale() == 'en' )
                          
                          Qty
                          @else
                          Ποσότητα
                          
                          @endif
                        </th>
                        <th
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                          align="right">
                          @if (app()->getLocale() == 'en' )
                          
                          Price
                          @else
                          
                          Τιμή
                          @endif
                        </th>
                      </tr>
                      <tr>
                        <td height="1" style="background: #bebebe;" colspan="4"></td>
                      </tr>
                      {{-- <tr>
                        <td height="10" colspan="4"></td>
                      </tr> --}}
                      <?php $tatalPrice = 0; ?>
                      @foreach ($order->orders as $pro)
                      
                      <tr>
                        <td
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: center; padding:10px 0;"
                          class="article">
                          
                          <span style=" ">
                            @if (app()->getLocale() == 'en' )
                          
                              @if ($pro->product_name_eng == null )
                              <b> {{$pro->product_name}}</b>
                                  
                              @else
                              <b> {{$pro->product_name_eng}}</b>

                              @endif
                            @else
                              <b> {{$pro->product_name}}</b>
                                
                            @endif

                          </span>


                        </td>
                        <td width="80px">
                          @foreach ($products as $item)
                             @if ($item->id == $pro->product_id)
                             {{-- {{$item->code}} --}}
                             <img src="https://ebloom.gr/uploads/products/{{$item->image}}"
                             height="60" width="60px" alt="logo" border="0" />
                             @break
                             @endif
                          @endforeach
                        </td>
                        <td
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                          align="center">{{$pro->product_qty}}</td>
                        <td width="80px"
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0; "
                          align="right">{{$pro->product_price}}€</td>
                      </tr>
                      <tr>
                        <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                      </tr>
                      <?php $tatalPrice = $tatalPrice + $pro->product_price ?>
                      @endforeach
                      {{-- <tr>
                        <td
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                          class="article">Beats RemoteTalk Cable</td>
                        
                        <td
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                          align="center">1</td>
                        <td
                          style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                          align="right">$29.95</td>
                      </tr>
                      <tr>
                        <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                      </tr> --}}
                    </tbody>
                </table>
			
  

		</td>
	</tr>

	<!-- BUTTON -->
	
	
	
	{{-- <tr>
	<td align="center" valign="top" style="text-align:left;border:0px solid orange;padding-top:20px;border-collapse: collapse; border-spacing: 0; margin: 0; padding-left: 6.25%; padding-right: 6.25%;font-family: Lato;font-size:13px;" class="list-item">The 3rd annual Photo Independent Fair is proud to announce its 2016 program. Bringing some of today's most influential photographers, curators, critics and cultural figures into conversation, Photo Independent's In Conversation series returns April 29-May 1, 2016.</td>
	</tr> --}}
        <tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%;" class="list-item"><table align="center" border="0" cellspacing="0" cellpadding="0" style="width:100%; margin: 0; padding: 0; border-collapse: collapse; border-spacing: 0;">
			
						<!-- LIST ITEM -->
			<tr>

				<!-- LIST ITEM IMAGE -->
				<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
				<td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					padding-top: 30px;
                    padding-right: 3px;text-align:left;">
                    
        </td>
                <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					        padding-top: 30px;
                    padding-right: 3px;text-align:left;">
                    
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                           
                          <tr>
                              <td
                                  style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                  @if (app()->getLocale() == 'en' )
                                  Subtotal
                          
                                  @else
                                  Mερικό Σύνολο
                                  
                                  @endif
                              </td>
                              <td
                                  style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;"
                                  width="80">
                                  {{-- $329.90 --}}
                                  <?php echo $tatalPrice?>€ 
                              </td>
                          </tr>
                            
                          
                          <tr>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                              @if (app()->getLocale() == 'en' )
                              Shipping 
                          
                          @else
                          Μεταφορικά
                          
                          @endif
                            </td>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                              {{$order->shipping_charges}}€
                            </td>
                          </tr>
                          <tr>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                              <strong>
                                @if (app()->getLocale() == 'en' )
                          
                                Grand Total
                                @else
                                Σύνολο
                                
                                @endif
                              </strong>
                            </td>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                              <strong>{{$order->grand_total}}€</strong>
                            </td>
                          </tr>
                          {{-- <tr>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                              <small>TAX</small></td>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                              <small>$72.40</small>
                            </td>
                          </tr> --}}
                          {{-- tex row --}}
                        </tbody>
                      </table>
                </td>
				
			</tr>
            
            <tr>
                <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					        padding-top: 30px;
                    padding-right: 3px;text-align:left;">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
      
                        <tbody>
                          <tr>
                            <td
                              style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                              <strong>
                                @if (app()->getLocale() == 'en' )
                                BILLING Address
                          
                                @else
                                Διεύθυνση χρέωσης:
                                
                                @endif
                              </strong>
                            </td>
                          </tr>
                          <tr>
                            <td width="100%" height="10"></td>
                          </tr>
                          <tr>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                              @if ($order->receiptOptions != null || $order->receiptOptions !='')
                              @if (app()->getLocale() == 'en' )
                                Proof of payment:  
                                @if ($order->receiptOptions == "Receipt")
                                  Receipt
                                @else
                                  Invoice
                                @endif
                                <br>
                              @else
                              Απόδειξη πληρωμής: 
                              @if ($order->receiptOptions == "Receipt")
                                Απόδειξη
                              @else
                                Τιμολόγιο
                              @endif
                              {{-- {{$order->receiptOptions}}  --}}
                              <br>
                              
                              @endif
                                  
                              @endif
                              @if ($order->company != null || $order->company != '')
                              @if (app()->getLocale() == 'en' )
                                Company: 
                                @if ($order->company == "no")
                                  no
                                @else
                                  {{$order->company}} 
                                @endif
                              <br>
                              
                              @else
                                Εταιρία: 
                                @if ($order->company == "no")
                                  Όχι
                                @else
                                  {{$order->company}} 
                                @endif
                                <br>
                              
                              @endif   
                              @endif
                              @if ($order->vat != null || $order->vat != '')
                              
                              @if (app()->getLocale() == 'en' )
                              Vat Number: {{$order->vat}} <br>
                              
                              @else
                              Vat Αριθμός: {{$order->vat}} <br>
                              
                              @endif

                              @endif
                              @if ($order->address != null || $order->address != '')
                              {{$order->address}} <br>
                              @endif
                              
                              @if ($order->floor != null || $order->floor != '')
                              @if (app()->getLocale() == 'en' )
                              
                              Floor: {{$order->floor}}
                              @else
                              
                              Όροφος:  {{$order->floor}}
                              @endif
                              
                              @endif
                              @if ($order->city != null || $order->city != '')
                              <br>{{$order->city}}
                              @endif
                              @if ($order->mobile != null || $order->mobile != '')
                              <br> {{$order->mobile}}
                              @endif
                              <br> {{$order->senderEmail}}
                              <br>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </td>
                {{-- <td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					          padding-top: 30px;
                    padding-right: 3px;text-align:left;">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
      
                        <tbody>
                          <tr>
                            <td
                              style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                              <strong>BILLING Address</strong>
                            </td>
                          </tr>
                          <tr>
                            <td width="100%" height="10"></td>
                          </tr>
                          <tr>
                            <td
                              style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                              @if ($order->receiptOptions != null || $order->receiptOptions !='')
                              Proof of payment: {{$order->receiptOptions}} <br>
                                  
                              @endif
                              @if ($order->company != null || $order->company != '')
                              Industry: {{$order->company}} <br>
                                  
                              @endif
                              @if ($order->vat != null || $order->vat != '')

                              Vat Number: {{$order->vat}} <br>
                              @endif
                              @if ($order->address != null || $order->address != '')
                              {{$order->address}} <br>
                              @endif
                              
                              @if ($order->floor != null || $order->floor != '')
                              Floor: {{$order->floor}}
                              @endif
                              @if ($order->city != null || $order->city != '')
                              <br>{{$order->city}}
                              @endif
                              @if ($order->mobile != null || $order->mobile != '')
                              <br> {{$order->mobile}}
                              @endif
                              <br> {{$order->senderEmail}}
                              <br>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </td> --}}
            </tr>
			
			
			
		
			
			
			</table>
			</td>
	</tr>
	{{-- end of main content --}}
	
	<!-- LIST -->
	

	<!-- PARAGRAPH -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 15px; font-weight: 400; line-height: 160%;
			padding-top: 20px;
			padding-bottom: 25px;
			color: #000000;
            font-family: sans-serif;" class="paragraph">
            
        
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                <tbody>
                    <tr>
                        <td
                          style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                          @if (app()->getLocale() == 'en' )
                          
                          Florist: {{$florist->name}}
                          @else
                          Ανθοπώλης: {{$florist->name}}

                          @endif
                          
                        </td>
                      </tr>
                  <tr>
                      <tr></tr>
                    <td
                      style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                      @if (app()->getLocale() == 'en' )
                          
                      Have a nice day.
                      @else

                      Να έχετε μια όμορφη ημέρα.
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            

        </td>
	</tr>

<!-- End of WRAPPER -->
</table>

<!-- WRAPPER -->
<!-- Set wrapper width (twice) -->


<!-- End of SECTION / BACKGROUND -->
</td></tr></table>

</body>
</html>