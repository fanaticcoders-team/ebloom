<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Native 3DS test</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://demo.vivapayments.com/web/checkout/v2/js"></script>
</head>

<body>

    <form action="" method="POST" id="payment-form">
        <div class="form-row">
            <label>
                <span>Cardholder Name</span>
                <input type="text" size="20" name="txtCardHolder" autocomplete="off" data-vp="cardholder"
                    value="Joe Blogs" />
            </label>
        </div>

        <div class="form-row">
            <label>
                <span>Card Number</span>
                <input type="text" size="20" name="txtCardNumber" autocomplete="off" data-vp="cardnumber"
                    value="5188340000000060" />
            </label>
        </div>
        <div class="form-row">
            <label>
                <span>CVV</span>
                <input type="text" name="txtCVV" size="4" autocomplete="off" data-vp="cvv" value="111" />
            </label>
        </div>
        <div class="form-row">
            <label>
                <span>Expiration (MM/YYYY)</span>
                <input type="text" size="2" name="txtMonth" autocomplete="off" data-vp="month" value="1" />
            </label>
            <span> / </span>
            <input type="text" size="04" name="txtYear" autocomplete="off" data-vp="year" value="2025" />
        </div>
        <button type="button" id="submit" (click)="submit($event)">Pay now</button>
    </form>
    <div id="threed-pane" style="height: 450px;width:500px">
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            const baseUrl = 'https://demo-api.vivapayments.com';
            VivaPayments.cards.setup({
                baseURL: baseUrl,
                authToken: '[access-token]',
                cardHolderAuthOptions: {
                    cardHolderAuthPlaceholderId: 'threed-pane',
                    cardHolderAuthInitiated: function () {
                        $('#threed-pane').show();
                    },
                    cardHolderAuthFinished: function () {
                        $('#threed-pane').hide();
                    }
                },
                installmentsHandler: function (response) {
                    if (!response.Error) {
                        if (response.MaxInstallments == 0)
                            return;
                        $('#drpInstallments').show();
                        for (i = 1; i <= response.MaxInstallments; i++) {
                            $('#drpInstallments').append($("<option>").val(i).text(i));
                        }
                    }
                    else {
                        alert(response.Error);
                    }
                }
            });

            $('#submit').on('click', function (evt) {
                evt.preventDefault();
                VivaPayments.cards.requestToken({
                    amount: 100
                }).done(function (data) {
                    console.log(data);
                    alert(data.chargeToken);
                });
            });

        });
    </script>
</body>
</html>