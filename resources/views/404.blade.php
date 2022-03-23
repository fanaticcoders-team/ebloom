<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eBloom-404</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/404.css")}}">

</head>
<body>

        <!-- Error Page -->
            <div class="error">
                <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-404">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">Sorry! Page not found</h2>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('/')}}" onclick="window.history.go(-1); return false;" class="btn btn-warning" style="margin-top:10px;">Go Back</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/')}}" class="btn btn-info" style="margin-top:10px;">Go to homepage</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        <!-- Error Page -->
        <script src="{{asset("frontEnd-assets/assets/js/404.js")}}"></script>
</body>
</html>