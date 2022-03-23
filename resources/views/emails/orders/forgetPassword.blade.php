<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your New Password</title>
</head>
<body>

    <h1>
		@if (app()->getLocale() == 'gr' )
        Ο νέος σας κωδικός
        
        @else
        Your new password


        @endif
    </h1>
    <p> <b>
        @if (app()->getLocale() == 'gr' )
        Κωδικός:
        
        @else
        
        password: 

        @endif
    </b> {{$password}} </p>
    <br>
    <p>
    
        @if (app()->getLocale() == 'gr' )

        Ο κωδικός σας άλλαξε με επιτυχία
        @else
        
        Please login and change your password again

        @endif

    </p>

</body>
</html>
