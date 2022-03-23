<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@if (Session::get('language') == 'en' )
			Thank you | eBloom
		
		@else

			ΕΥΧΑΡΙΣΤΟΥΜΕ! | eBloom

		@endif
	</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
        <div class="imag" style="position: relative;top:-100px;">
            <a href="{{url('/welcome')}}">
				<img src="{{asset('frontEnd-assets/images/logo-svg.svg')}}" alt="eBloom logo" style="width: 250px;
                  height: 150px;">
            </a>
        </div>
		<h1 class="site-header__title" data-lead-id="site-header-title">
			{{-- {{__('words.ΕΥΧΑΡΙΣΤΟΥΜΕ!')}} --}}
			@if (Session::get('language') == 'en' )
				Thank you!
		
			@else

				ΕΥΧΑΡΙΣΤΟΥΜΕ!
			@endif
			{{-- THANK YOU! --}}
		</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">
            {{-- Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you. --}}
            <h2 class="text-center" style="font-family: none;">
				
				@if (Session::get('language') == 'en' )
					THE PAYMENT WAS COMPLETELY SUCCESSFULLY
				
				@else
				
					Η ΠΛΗΡΩΜΗ ΟΛΟΚΛΗΡΩΘΗΚΕ ΕΠΙΤΥΧΩΣ
					

				@endif

				{{-- ΕΧΟΥΜΕ ΠΑΡΑΛΑΒΕΙ ΤΗΝ ΠΑΡΑΓΓΕΛΙΑ ΣΑΣ --}}
				{{-- YOUR ORDER HAS BEEN RECEIVED --}}
			</h2>
          <h3 class="text-center">
			  
			  
			  @if (Session::get('language') == 'en' )
			  We have received your order
			  @else
			  
			  Έχουμε παραλαβει την παραγγελία σας και σύντομα

			@endif

			{{-- Ευχαριστούμε για την πληρωμή, η παραγγελία είναι υπό επεξεργασία --}}
			{{-- Thank you for your payment, it’s processing --}}
		  </h3>
          
          {{-- <p class="text-center">Your order # is: 100000023</p> --}}
          <p class="text-center">
			  
			  
			  @if (Session::get('language') == 'en' )
			  You will receive an email with the shipping details
			  @else
			  
			  θα λαβετε ένα email με τις λεπτομέρειες της αποστολής
				

			@endif
			{{-- Θα λάβετε ένα email επιβεβαίωσης με τις λεπτομέρειες της παραγγελίας σας. --}}
			{{-- You will receive an order confirmation email with details of your order --}}
			</p>

            <center>
                <div class="btn" style="margin-top:50px;">
					<a href="{{url('/welcome')}}" class="btn btn-warning">
						
						@if (Session::get('language') == 'en' )
						Back
						
						@else
						Επιστροφή
					
						

					@endif
						{{-- CONTINUE --}}
					</a>
                </div>
            </center>

        </p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Created & Developed by eBloom all Rights Reserved</p>
	</footer>
</body>
</html>