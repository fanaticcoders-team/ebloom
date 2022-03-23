<?php
// use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
?>
<html>

<head>
    <style>
        body {
            background-color: white;
        }

        h1 {
            color: black;
            text-align: center;
        }

        #ep_logo {
            width: 100%;
            text-align: center;
        }

        #pay-form {
            width: 100% !important;
        }
    </style>
    <title>Pay Now</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- <script src="https://sandbox-js.everypay.gr/v3"></script> -->
    <script src="https://js.everypay.gr/v3"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- My App -->
    <div class="custom-control custom-radio">
        <!-- <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" onclick="everypay.showForm()" required> -->
        <!-- <h1><label for="credit">Credit card</label></h1> -->
        <div id="ep_logo"><img src="https://ebloom.gr/frontEnd-assets/images/header-logo.svg" alt="ebloom logo" style="height: 150px;
                          width: 370px;"></div>
        <div id="ep_logo"><img src="{{asset('frontEnd-assets/images/everypay/everypaylogo.png')}}" alt="EveryPay logo" style="height: 130px;
                          width: 500px;"></div>
        <!-- <div id="ep_logo">
                <h2>We accept only the credit cards.</h4>
            </div> -->
        <input id="credit" name="paymentMethod" type="hidden" class="custom-control-input" onclick="everypay.showForm()" required>
        <!--<label class="custom-control-label" for="credit">Credit card</label> -->
        <div id="pay-form"></div>
    </div>

    <script type="text/javascript">
        var tkn;
        var amt = "<?php echo $amount; ?>";
        var payload = {
            // pk: 'pk_ZbT9DyNlnE8INnvPepM1Zm4lWx7N84Rr',
            pk: 'pk_Nkxa5mCtivRDNRFkMGCGce3lop6rk3RG',
            amount: parseInt(amt),
            data: {
                customerToken: tkn,
                cardType: '',
                cardExpMonth: '',
                cardExpYear: '',
                cardLastFour: '',
                cardHolderName: '',
            },
        }
        everypay.payform(payload, handleResponse);

        function handleResponse(r) {

            if (r.response === 'success') {
                // You have the token! Submit it to your backend
                axios.get("savePaymentDetails", {
                        token: r.token
                    }).then(response => {
                        tkn = r.token;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{ url(app()->getLocale().'/enterdetails') }}",
                            type: 'get',
                            data: {
                                data: r.token
                            },
                            success: function(d) {
                                var data = JSON.parse(d);
                                if (data != '' && data != null && data != undefined) {
                                    if (data.status == "Captured") {
                                        console.log('successsssssssssss');
                                        window.location.href = "/success";
                                    } else {
                                        console.log('status changed');
                                        window.location.href = "/payment-failed";
                                    }
                                } else {
                                    console.log('dfffsfgsdgsdgsdg');
                                    window.location.href = "/payment-failed";
                                }
                            },
                            error: function(d) {
                                window.location.href = "/payment-failed";
                            },
                        });
                    })
                    .catch(error => {
                        alert('Payment not done');
                    })
            } else {
                
            }
        }
    </script>

</body>

</html>