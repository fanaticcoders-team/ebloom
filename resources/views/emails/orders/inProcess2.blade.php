{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Order</title>
</head>
<body>
    <center>

        <h2>New order</h2>
        <p>New order of  {{$florist->name}}</p>
    </center>
</body>
</html> --}}
{{-- old template --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Order Inprocess </title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

  body {
    margin: 0;
    padding: 0;
    background: #e1e1e1;
  }

  div,
  p,
  a,
  li,
  td {
    -webkit-text-size-adjust: none;
  }

  .ReadMsgBody {
    width: 100%;
    background-color: #ffffff;
  }

  .ExternalClass {
    width: 100%;
    background-color: #ffffff;
  }

  body {
    width: 100%;
    height: 100%;
    background-color: #e1e1e1;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
  }

  html {
    width: 100%;
  }

  p {
    padding: 0 !important;
    margin-top: 0 !important;
    margin-right: 0 !important;
    margin-bottom: 0 !important;
    margin-left: 0 !important;
  }

  .visibleMobile {
    display: none;
  }

  .hiddenMobile {
    display: block;
  }

  @media only screen and (max-width: 600px) {
    body {
      width: auto !important;
    }

    table[class=fullTable] {
      width: 96% !important;
      clear: both;
    }

    table[class=fullPadding] {
      width: 85% !important;
      clear: both;
    }

    table[class=col] {
      width: 45% !important;
    }

    .erase {
      display: none;
    }
  }

  @media only screen and (max-width: 420px) {
    table[class=fullTable] {
      width: 100% !important;
      clear: both;
    }

    table[class=fullPadding] {
      width: 85% !important;
      clear: both;
    }

    table[class=col] {
      width: 100% !important;
      clear: both;
    }

    table[class=col] td {
      text-align: left !important;
    }

    .erase {
      display: none;
      font-size: 0;
      max-height: 0;
      line-height: 0;
      padding: 0;
    }

    .visibleMobile {
      display: block !important;
    }

    .hiddenMobile {
      display: none !important;
    }
  }
</style>
</head>
<body>
    <section >

        <!-- Header -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
          <tr>
            <td height="20"></td>
          </tr>
          <tr>
            <td>{{--- first width= 600 !--}}
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff"
                style="border-radius: 10px 10px 0 0;">
                <tr class="hiddenMobile">
                  <td height="40"></td>
                </tr>
                <tr class="visibleMobile">
                  <td height="30"></td>
                </tr>
      
                <tr>
                    <td>
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody >
                          <tr>
                            <td>
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="col">
                                <tbody>
                                  <tr>
                                      <td></td>
                                      <td>
                                          <span style="position: relative;
                                          left: 21%;">
                                          {{--  --}}
                                          <img src="https://ebloom.gr/frontEnd-assets/images/logo4.png" alt="eBloom logo" style="width: 250px;
                                          height: 150px;">
                                          
                                            {{-- {{$florist->name}} --}}
                                            {{-- Oak Hills Florist --}}
                                            </span>

                                      </td>
                                  </tr>
                                </tbody>
                              </table>
                              
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                </tr>
                {{-- end to heading --}}
                <tr>
                  <td>
                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                      <tbody>
                        <tr>
                          <td style="border-bottom: 1px solid grey;">
                              {{-- <hr style="color: gray"> --}}
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                    <td>
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody style="display: flex;justify-content: center">
                          <tr style="margin: 30px 0px; margin-bottom: 10px;">
                            <td >   
                                <span style="font-size: 14px;">
                                  Your order at eBloom has been accepted and is being prepared.

                                  {{-- Just to let you know - We have received your order and it's now being inprocessed. <br>
                                 Thank You! --}}
                                </span>
                                {{-- <fieldset><legend>Wash Your Hands</legend></fieldset> --}}
                                {{-- <hr style="color: gray"> --}}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                </tr>
                <tr>
                    <td>
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody >
                          <tr style="margin: 0px 0px;">
                            <td >
                                <h3 style="position: relative;
                                left: 40%;">Order Details</h3>
                                {{-- <fieldset><legend>Wash Your Hands</legend></fieldset> --}}
                                {{-- <hr style="color: gray"> --}}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                </tr>
                <tr>
                    <td>
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          <tr>
                            <td>
                              <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                <tbody>
                                  <tr>
                                    <td
                                      style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                      Order Number: #{{$order->orderNo}}
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                <tbody>
                                  <tr>
                                    <td
                                      style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                      {{-- <small>ORDER</small> #800000025<br /> --}}
                                      <p>Order Date: {{ $order->created_at->format('d/m/Y') }}</p>
                                      <p>Delivery Date: {{ $order->delivery_date }}</p>

                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                </tr>
                <tr >
                    <td height="20"></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!-- /Header -->
        <!-- Order Details -->

        
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
          <tbody>
            <tr>
              <td>
                {{---  width= 600 !--}}
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                  bgcolor="#ffffff">
                  <tbody>
                    {{-- <tr> --}}
                    {{-- <tr class="hiddenMobile">
                      <td height="60"></td>
                    </tr>
                    <tr class="visibleMobile">
                      <td height="40"></td>
                    </tr> --}}
                    <tr>
                      <td>
                        {{-- width=480 --}}
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <th
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                width="40%" align="left">
                                Product Name
                              </th>
                              <th
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                width="40%" align="left">
                                Product Image
                              </th>
                              <th
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                align="center">
                                Quantity
                              </th>
                              <th
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                align="right">
                                Price
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
                                    <b> {{$pro->product_name}}</b>

                                </span>


                              </td>
                              <td>
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
                              <td
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
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
                    <tr>
                      <td height="20"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- /Order Details -->
        <!-- Total -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
          <tbody>
            <tr>
              <td>
                {{--- first width= 600 !--}}
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                  bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td>
      

                        <!-- Table Total -->
                        {{-- width=480 --}}
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                             
                            <tr>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                    Subtotal
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
                                Shipping 
                              </td>
                              <td
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                {{$order->shipping_charges}}€
                              </td>
                            </tr>
                            <tr>
                              <td
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                <strong>Grand Total (Incl.Tax)</strong>
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
                        <!-- /Table Total -->
      
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- /Total -->
        <!-- Information -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
          <tbody>
            <tr>
              <td>
                {{--- first width= 600 !--}}
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                  bgcolor="#ffffff">
                  <tbody>
                    <tr>
                    <tr class="hiddenMobile">
                      <td height="60"></td>
                    </tr>
                    <tr class="visibleMobile">
                      <td height="40"></td>
                    </tr>
                    <tr>
                      <td>
                        {{-- width=480 --}}
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <td>
                                <table width="200" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
      
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
      
      
                                {{-- <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                  <tbody>
                                    <tr class="visibleMobile">
                                      <td height="20"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                        <strong>PAYMENT METHOD</strong>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td width="100%" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                        Credit Card<br> Credit Card Type: Visa<br> Worldpay Transaction ID: <a href="#"
                                          style="color: #ff0000; text-decoration:underline;">4185939336</a><br>
                                        <a href="#" style="color:#b0b0b0;">Right of Withdrawal</a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table> --}}
                                {{-- end payment method --}}
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <td>
                                {{-- <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                  <tbody>
                                    <tr class="hiddenMobile">
                                      <td height="35"></td>
                                    </tr>
                                    <tr class="visibleMobile">
                                      <td height="20"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                        <strong>SHIPPING INFORMATION</strong>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td width="100%" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                        Sup Inc<br> Another Place, Somewhere<br> New York NY<br> 4468, United States<br> T:
                                        202-555-0171
                                      </td>
                                    </tr>
                                  </tbody>
                                </table> --}}
      
      
                                {{-- <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                  <tbody>
                                    <tr class="hiddenMobile">
                                      <td height="35"></td>
                                    </tr>
                                    <tr class="visibleMobile">
                                      <td height="20"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                        <strong>SHIPPING METHOD</strong>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td width="100%" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td
                                        style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                        UPS: U.S. Shipping Services
                                      </td>
                                    </tr>
                                  </tbody>
                                </table> --}}
                                {{-- end shipping method --}}
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="hiddenMobile">
                      <td height="60"></td>
                    </tr>
                    <tr class="visibleMobile">
                      <td height="30"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- /Information -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      
          <tr>
            <td>
              {{--- first width= 600 !--}}
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff"
                style="border-radius: 0 0 10px 10px;">
                <tr>
                  <td>
                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                      <tbody>
                        <tr>
                          <td
                            style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                            Have a nice day.
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr class="spacer">
                  <td height="50"></td>
                </tr>
      
              </table>
            </td>
          </tr>
          <tr>
            <td height="20"></td>
          </tr>
        </table>
      
    </section>
    
</body>
</html>