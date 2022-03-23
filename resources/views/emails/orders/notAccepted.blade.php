<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order not accepted</title>
</head>
<body>
    <center>
        <h2>
            @if (app()->getLocale() == 'en' )
            Order not accepted
            @else
            Η παραγγελία δεν έγινε δεκτή
            @endif

        </h2>
        @if (app()->getLocale() == 'en' )
            <p>Order not accepted by {{$florist->name}}</p>
        @else
            <p>Η παραγγελία δεν έγινε δεκτή από {{$florist->name}}</p>
        @endif


        
    </center>
</body>
</html>