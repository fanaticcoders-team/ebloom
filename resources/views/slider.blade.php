<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Thumbnail Carousel with Content</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	background: #ebebeb;
	font-family: "Open Sans", sans-serif;
}
.carousel {
	margin: 30px auto 60px;
	padding: 0 80px;
}
.carousel .carousel-item {
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item h4 {
	font-family: 'Varela Round', sans-serif;
}
.carousel .carousel-item img {
	max-width: 100%;
	display: inline-block;
}
.carousel .carousel-item .btn {
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	border: none;
	background: #a177ff;
	padding: 6px 15px;
	margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
	background: #8c5bff;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	margin: 5px;
	text-align: left;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
}
.carousel .thumb-content {
	padding: 15px;
	font-size: 13px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 44px;
	background: none;	
	margin: auto 0;
	border-radius: 50%;
	border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 4px;
	border: none;
}
.carousel-indicators li {	
	background: #ababab;
}
.carousel-indicators li.active {	
	background: #555;
}
</style>
{{-- <link rel="stylesheet" href="{{asset('css/wolt.css')}}"> --}}

</head>
<body>
<div class="container">
	<style>
		.quotes {display: none;}
	</style>
	<div class="container">
		<h2 class="quotes">first quote</h2>
		<h2 class="quotes">second quote</h2>
		<h2 class="quotes">3rd quote</h2>
		<h2 class="quotes">4th quote</h2>
		<h2 class="quotes">5th quote</h2>
		<h2 class="quotes">6th quote</h2>
	</div>
	<script>
		(function() {

			var quotes = $(".quotes");
			var quoteIndex = -1;

			function showNextQuote() {
			++quoteIndex;
			quotes.eq(quoteIndex % quotes.length)
				.fadeIn(2000)
				.delay(2000)
				.fadeOut(2000, showNextQuote);
			}

			showNextQuote();

		})();
	</script>

	<style>
		.ba{
			font-size:50px;
			font-weight:600;
			opacity:0;
			text-transform:uppercase;
			animation:fade 400ms ease-in-out forwards;
		}
	</style>
	<div class="fo">One Two Three Four Five Six Seven</div>
	<div class="bar"></div>
	<span class="debug"></span>
	<script>
		var words = $('.foo').text().split(' ');
		var index = 0;
		var wordCount = 1;

		var showHide = setInterval(function () {
			var displayWords = "";
			
			var mx = index + wordCount;
			if (mx > words.length) mx = words.length;
			for (var i = index; i < mx; i++) {
				displayWords += words[i] + " ";
			}
			
			$('.bar').fadeIn(1000).text(displayWords).fadeOut(1000);
			index = mx;   
		}, 2000);
	</script>

	<style>
		.text-animation {
		color:#000;
		opacity:0;
		}
		.text-animation span {
		position:relative;
		top:10px;
		left:10px;
		font-size:50px;
		font-weight:600;
		opacity:0;
		text-transform:uppercase;
		animation:fade 400ms ease-in-out forwards;
		}
		.center {
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		}
		@keyframes fade {
		0% {
			top:10px;
			left:10px;
			filter:blur(15px);
			opacity:0;
		}
		50% {
			filter:blur(10px);
			opacity:0.9;
		}
		100% {
			top:0px;
			left:0px;
			filter:blur(0px);
			opacity:1;
		}  
		}
	</style>
	<div class="center">
		<div class="text-animation">
		  CSS Fade Text Animation.
		</div>
		<div class="text-animation">
			Rai Saeed Anwar.
		  </div>
	</div>
	{{-- <script>
			var wrapper = document.getElementsByClassName("text-animation")[0];
			// var wrapper2 = document.getElementsByClassName("text-animation")[1];
			
			wrapper.style.opacity="1";
			wrapper.innerHTML = wrapper.textContent.replace(/./g,"<span>$&</span>");
	
			var spans = wrapper.getElementsByTagName("span");
			// console.log("span:"+spans);
			for(var i=0;i<spans.length;i++){
				spans[i].style.animationDelay = i*30+"ms";
				console.log("i: "+i);
				if (i===(spans.length-1)) {
					// alert('check');
					var delayInMilliseconds = 1000; //1 second
					console.log("before time i: "+i);

					setTimeout(function() {
						//your code to be executed after 1 second
						wrapper.style.display="none";
						var wrapper2 = document.getElementsByClassName("text-animation")[1];
						// var wrapper2 = document.getElementsByClassName("text-animation")[1];
						
						wrapper2.style.opacity="1";
						wrapper2.innerHTML = wrapper.textContent.replace(/./g,"<span>$&</span>");
				
						var spans = wrapper2.getElementsByTagName("span");
						for(var i=0;i<spans.length;i++){
							spans[i].style.animationDelay = i*30+"ms";
							console.log("after time i: "+i);
						}
					}, delayInMilliseconds);
	
	
				}
			}  
		
	</script> --}}
	<style>
		.fade-word{
			position: relative;
		}
		.js-nametag{
			position: absolute;
		}
		.js-nametag:nth-child(1){
		animation-name: fade;
		animation-fill-mode: both;
		animation-iteration-count: infinite;
		animation-duration: 5s;
		animation-direction: alternate-reverse;  
		}


		.js-nametag:nth-child(2){
		animation-name: fade;
		animation-fill-mode: both;
		animation-iteration-count: infinite;
		animation-duration: 5s;
		animation-direction: alternate;
		}

		@keyframes fade{
			0%,25% {
			opacity: 0;
		}
			100%{
			opacity: 1;
		}
		}
	</style>
	<div class="fade-word1" id="first">
		<p class="js-nametag">Leandro de Lima</p>
		  <p class="js-nametag">Game Master</p>
	  	 
	</div>
	<div class="fade-word1" id="two" style="display: none">
		<p class="js-nametag">saeed anwar</p>
		  <p class="js-nametag">humair</p>
	  	 
	</div>
	<div class="fade-word1" id="three" style="display: none">
		<p class="js-nametag">waseh</p>
		  <p class="js-nametag">hanan</p>
	  	 
	</div>
	<script>
			var wrapper = document.getElementsByClassName("fade-word1");
		
	// setInterval(function(){  
		setTimeout(function() {
			console.log('in time');
			document.getElementById("first").style.display = "none";
			document.getElementById("two").style.display = "block";

		},5000);
		setTimeout(function() {
			console.log('second time');
			document.getElementById("first").style.display = "none";
			document.getElementById("two").style.display = "none";
			document.getElementById("three").style.display = "block";

			
		},10000);
	// }, 10000);

	</script>

	<style>
		.ml10 {
  position: relative;
  font-weight: 900;
  font-size: 4em;
}

.ml10 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml10 .letter {
  display: inline-block;
  line-height: 1em;
  transform-origin: 0 0;
}
	</style>
	<h1 class="ml10">
		<span class="text-wrapper">
		  <span class="letters">Domino Dreams</span>
		</span>
	  </h1>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	  <script>
		  // Wrap every letter in a span
		var textWrapper = document.querySelector('.ml10 .letters');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: true})
		.add({
			targets: '.ml10 .letter',
			rotateY: [-90, 0],
			duration: 1300,
			delay: (el, i) => 45 * i
		}).add({
			targets: '.ml10',
			opacity: 0,
			duration: 1000,
			easing: "easeOutExpo",
			delay: 1000
		});
	  </script>
	{{-- social icon style --}}
	<style>
		  .SocialsColumn-module__root___6OoKn {
			display: flex;
			justify-content: center;
			background-color: #f8f8f8;
			width: 100%;
			color: #202125; }
		
		.SocialsColumn-module__container___2FJFO {
			display: flex;
			flex-direction: column;
			max-width: 1200px;
			width: 100%;
			margin-top: 4rem;
			margin-bottom: 1.5rem;
			padding: 0 30px; }
			@media print, screen and (max-width: 39.99875em) {
			.SocialsColumn-module__container___2FJFO {
				padding: 0 16px; }
				.SocialsColumn-module__container___2FJFO.SocialsColumn-module__discovery___Afdi7 {
				margin-bottom: 2.5rem; } }
			@media print, screen and (max-width: 63.99875em) {
			.SocialsColumn-module__container___2FJFO.SocialsColumn-module__venuePage___egfR4 {
				margin-bottom: 3.5rem; } }
		
		.SocialsColumn-module__row___1jDmu {
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap; }
		
		.SocialsColumn-module__bottomRow___1nDPA {
			color: #717171;
			align-items: center;
			flex-wrap: wrap-reverse; }
			.SocialsColumn-module__bottomRow___1nDPA .SocialsColumn-module__link___Qpv8N {
			color: #838383; }
			@media print, screen and (max-width: 39.99875em) {
			.SocialsColumn-module__bottomRow___1nDPA {
				flex-direction: column-reverse;
				align-items: left;
				align-items: start; } }
		
		.SocialsColumn-module__column___3guXg {
			display: flex;
			flex-direction: column;
			flex: 1;
			margin-bottom: 2.5rem;
			list-style: none;
			margin-left: 0;
			-webkit-margin-start: 0;
					margin-inline-start: 0; }
		
		.SocialsColumn-module__columnTitle___gugu7 {
			font-size: 1rem;
			font-weight: bold;
			margin-bottom: 2rem; }
			@media print, screen and (max-width: 39.99875em) {
			.SocialsColumn-module__columnTitle___gugu7 {
				margin-bottom: 1rem; } }
		
		.SocialsColumn-module__logo___16Xmq {
			width: 10.3rem;
			height: 4.75rem;
			color: #202125;
			margin: 0 0 1.5rem -2rem; }
		
		.SocialsColumn-module__footerList___3kptT {
			list-style: none;
			margin: 0; }
		
		.SocialsColumn-module__columnWrapper___2YRz4 {
			display: flex;
			flex-direction: column;
			flex: 1; }
		
		@media print, screen and (max-width: 39.99875em) {
			.SocialsColumn-module__socialsColumn___2Wzua {
			flex: 1 0 100%; } }
		
		.SocialsColumn-module__socialRow___1cGwT {
			list-style: none;
			margin: 0;
			display: flex; }
			.SocialsColumn-module__socialRow___1cGwT .SocialsColumn-module__socialListItem___3irFk:not(:last-child) {
			margin-right: 1.5rem;
			-webkit-margin-end: 1.5rem;
					margin-inline-end: 1.5rem;
			-webkit-margin-start: 0;
					margin-inline-start: 0; }
		
		.LegalWrapper-module__legalWrapper___reszF {
			display: flex;
			width: 100%;
			flex-direction: row;
			flex: 1;
			margin-bottom: 2.5rem;
			list-style: none;
			margin-left: 0;
			-webkit-margin-start: 0;
					margin-inline-start: 0; }
		
		.LegalWrapper-module__legalWrapperColumn___1cjeM {
			flex-direction: column; }
			.SocialsButton-module__shareButton___ji0qR {
			position: relative;
			width: 38px;
			height: 38px;
			border: 1px solid rgba(32, 33, 37, 0.18);
			border-radius: 50%;
			cursor: pointer;
			display: block;
			color: #202125;
			transition: background 150ms linear; }
			.SocialsButton-module__shareButton___ji0qR svg {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%); }
		
			.SocialsButton-module__fb___311YL svg {
				left: 50%; }
			
			.SocialsButton-module__fb___311YL:hover, .SocialsButton-module__fb___311YL:focus {
				color: #fff;
				background-color: #3b5998;
				border: #3b5998; }
			
			.SocialsButton-module__twitter___iRUPn svg {
				top: 51%;
				left: 52%; }
			
			.SocialsButton-module__twitter___iRUPn:hover, .SocialsButton-module__twitter___iRUPn:focus {
				background-color: #1da1f2;
				color: #fff;
				border: #1da1f2; }
			
			.SocialsButton-module__linkedin___3Y1mW svg {
				left: 52%; }
			
			.SocialsButton-module__linkedin___3Y1mW:hover, .SocialsButton-module__linkedin___3Y1mW:focus {
				background-color: #0088b5;
				color: #fff;
				border: #0088b5; }
			
			.SocialsButton-module__instagram___R5rEl:hover,
			.SocialsButton-module__instagram___R5rEl:focus {
				background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%);
				border: transparent;
				color: #fff; }
	</style>
	{{-- end social icon style  --}}
	<div class="SocialsColumn-module__column___3guXg SocialsColumn-module__socialsColumn___2Wzua">
		<ol class="SocialsColumn-module__socialRow___1cGwT">
			<li class="SocialsColumn-module__socialListItem___3irFk"><a data-test-id="social-button-fb"
					class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__fb___311YL"
					href="https://www.facebook.com/woltapp/" target="_blank" aria-label="Logo - facebook"><svg width="20"
						height="20" viewBox="0 0 20 20" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M20 10.061C20 4.505 15.523 0 10 0S0 4.505 0 10.061C0 15.083 3.657 19.245 8.438 20v-7.03h-2.54V10.06h2.54V7.845c0-2.522 1.492-3.915 3.777-3.915 1.094 0 2.238.197 2.238.197v2.476h-1.26c-1.243 0-1.63.775-1.63 1.57v1.888h2.773l-.443 2.908h-2.33V20c4.78-.755 8.437-4.917 8.437-9.939z"
							fill="currentColor"></path>
					</svg></a></li>
			<li class="SocialsColumn-module__socialListItem___3irFk"><a data-test-id="social-button-instagram"
					class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__instagram___R5rEl"
					href="https://instagram.com/woltapp" target="_blank" aria-label="Logo - instagram"><svg width="24"
						height="24" viewBox="0 0 24 24">
						<path fill="none" d="M0 0h24v24H0z"></path>
						<path
							d="M17.338 5.462a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4M12 15.333a3.333 3.333 0 110-6.665 3.333 3.333 0 010 6.665m0-8.468a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27M12 2c-2.716 0-3.057.012-4.123.061-1.064.047-1.791.216-2.428.464a4.875 4.875 0 00-1.77 1.154 4.875 4.875 0 00-1.154 1.77c-.248.637-.416 1.364-.464 2.428C2.012 8.943 2 9.284 2 12s.012 3.057.061 4.123c.048 1.065.216 1.791.464 2.428a4.875 4.875 0 001.154 1.77 4.875 4.875 0 001.77 1.154c.637.248 1.364.417 2.428.465 1.066.048 1.407.06 4.123.06s3.057-.012 4.123-.06c1.065-.048 1.791-.217 2.428-.465a4.875 4.875 0 001.77-1.154 4.875 4.875 0 001.154-1.77c.248-.637.417-1.363.465-2.428.048-1.066.06-1.407.06-4.123s-.012-3.057-.06-4.123c-.048-1.064-.217-1.791-.465-2.428a4.875 4.875 0 00-1.154-1.77 4.875 4.875 0 00-1.77-1.154c-.637-.248-1.363-.417-2.428-.464C15.057 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.041.058.975.044 1.504.207 1.857.344.466.182.799.399 1.15.748.35.351.566.684.748 1.151.137.352.3.881.344 1.856.049 1.055.058 1.371.058 4.041 0 2.67-.009 2.986-.058 4.041-.044.975-.207 1.504-.344 1.857a3.12 3.12 0 01-.748 1.15 3.12 3.12 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.055.049-1.371.058-4.041.058-2.67 0-2.986-.009-4.041-.058-.975-.044-1.504-.207-1.856-.344a3.116 3.116 0 01-1.151-.748 3.133 3.133 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.055-.058-1.371-.058-4.041 0-2.67.01-2.986.058-4.041.044-.975.207-1.504.344-1.856.182-.467.399-.8.748-1.151a3.129 3.129 0 011.151-.748c.352-.137.881-.3 1.856-.344C9.014 3.812 9.33 3.802 12 3.802"
							fill="currentColor"></path>
					</svg></a></li>
			<li class="SocialsColumn-module__socialListItem___3irFk"><a data-test-id="social-button-linkedin"
					class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__linkedin___3Y1mW"
					href="https://www.linkedin.com/company/wolt-oy/" target="_blank" aria-label="Logo - linkedin"><svg
						width="16" height="16" viewBox="0 0 16 16">
						<g fill="currentColor">
							<path
								d="M1.894 0C.749 0 0 .813 0 1.882c0 1.045.727 1.883 1.85 1.883h.022c1.167 0 1.893-.838 1.893-1.883C3.743.812 3.039 0 1.894 0M0 15.059h3.765V4.706H0zM12.095 4.706c-1.8 0-2.606.983-3.056 1.671v.033h-.023l.023-.033V4.944H5.647c.046.95 0 10.115 0 10.115H9.04v-5.65c0-.302.023-.603.113-.819.245-.605.802-1.23 1.74-1.23 1.227 0 1.717.928 1.717 2.287v5.412H16v-5.8c0-3.107-1.673-4.553-3.905-4.553">
							</path>
						</g>
					</svg></a></li>
			<li class="SocialsColumn-module__socialListItem___3irFk"><a data-test-id="social-button-twitter"
					class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__twitter___iRUPn"
					href="https://twitter.com/woltapp" target="_blank" aria-label="Logo - twitter"><svg width="17"
						height="15" viewBox="0 0 17 15">
						<path fill="currentColor"
							d="M17 2.143c-.637.321-1.275.428-2.019.536.744-.429 1.275-1.072 1.488-1.929-.638.429-1.382.643-2.232.857C13.6.964 12.645.536 11.688.536c-1.806 0-3.4 1.607-3.4 3.535 0 .322 0 .536.107.75A9.75 9.75 0 011.169 1.18C.85 1.714.744 2.25.744 3c0 1.179.637 2.25 1.594 2.893-.532 0-1.063-.214-1.594-.429 0 1.715 1.169 3.107 2.762 3.429C3.188 9 2.87 9 2.55 9c-.212 0-.425 0-.637-.107.424 1.393 1.7 2.464 3.293 2.464-1.169.964-2.656 1.5-4.356 1.5H0c1.594.964 3.4 1.607 5.313 1.607 6.375 0 9.88-5.357 9.88-9.964v-.429c.745-.535 1.382-1.178 1.807-1.928z">
						</path>
					</svg></a></li>
		</ol>
	</div>
	<div class="FrontHeroBanner-module__content___2AjMM">
		<div class="FrontHeroBanner-module__headerContainer___13kez">
			<h1 class="header_words_animated__Root-sc-1gcosuw-0 fNazjO FrontHeroBanner-module__headers___2zc8Z"><span
					class="header_words_animated__Word-sc-1gcosuw-1 jAOmqL"><span style="animation-delay: 0s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">T</span><span style="animation-delay: 0.013s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">i</span><span style="animation-delay: 0.027s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">r</span><span style="animation-delay: 0.04s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">e</span><span style="animation-delay: 0.053s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">d</span><span>&nbsp;</span></span><span
					class="header_words_animated__Word-sc-1gcosuw-1 jAOmqL"><span style="animation-delay: 0s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">f</span><span style="animation-delay: 0.027s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">r</span><span style="animation-delay: 0.053s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">o</span><span style="animation-delay: 0.08s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">m</span><span>&nbsp;</span></span><span
					class="header_words_animated__Word-sc-1gcosuw-1 jAOmqL"><span style="animation-delay: 0s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">p</span><span style="animation-delay: 0.04s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">a</span><span style="animation-delay: 0.08s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">r</span><span style="animation-delay: 0.12s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">t</span><span style="animation-delay: 0.16s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">y</span><span style="animation-delay: 0.2s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">i</span><span style="animation-delay: 0.24s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">n</span><span style="animation-delay: 0.28s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">g</span><span style="animation-delay: 0.3s;"
						class="header_letter__Root-sc-1sg5q7u-0 cJIUJF">?</span></span></h1>
		</div>
		<h3 class="FrontHeroBanner-module__addressLabel___2xsQy"><span
				data-localization-key="front-view.address-label">Delivery address</span></h3>
		<div class="AddressPickerInput-module__root___30L3J"><span
				class="Popover__root___2jRQG AddressPickerInput-module__tooltipWrapper___14sIZ">
				<div><label for="front-page-input" class="FrontPageLocationSelector-module__inputLabel___2iI_j">Choose a
						delivery address</label>
					<div class="InputField-module__flat___Yzj-9">
						<div class="">
							<div
								class="InputField-module__inputWrapper___2FXWt InputField-module__hasStartIcon___1IHUZ InputField-module__showEndIcon___2rlZe">
								<div class="InputField-module__inlineStartElement___t9A0C"><svg viewBox="0 0 24 24"
										class="FrontPageLocationSelector-module__icon___1cqeZ" alt="location icon">
										<path fill="none" d="M0 0h24v24H0z"></path>
										<path
											d="M12 12c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2m0-5c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3m0 13.827C10.575 19.52 5 14.136 5 10c0-4.547 3.606-7 7-7s7 2.453 7 7c0 4.132-5.576 9.519-7 10.827M12 2c-3.933 0-8 2.992-8 8 0 5.169 7.359 11.606 7.673 11.878a.5.5 0 00.654 0C12.641 21.606 20 15.169 20 10c0-5.008-4.067-8-8-8"
											fill="#202125"></path>
									</svg><svg width="24" height="24" viewBox="0 0 24 24"
										class="FrontPageLocationSelector-module__iconFill___2t5mS" alt="location icon">
										<g fill="none" fill-rule="evenodd">
											<path d="M0 0h24v24H0z"></path>
											<path fill="#202125"
												d="M12 7c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3m0-5c-3.933 0-8 2.992-8 8 0 5.169 7.359 11.606 7.673 11.878a.5.5 0 00.654 0C12.641 21.606 20 15.169 20 10c0-5.008-4.067-8-8-8">
											</path>
										</g>
									</svg></div><input type="text" autocomplete="off" value=""
									class="InputField-module__input___3YXJT" placeholder="1 Example Street"
									id="front-page-input">
								<div class="InputField-module__inlineEndElement___3WW0z"></div>
							</div>
						</div>
					</div>
				</div>
			</span><button type="button"
				class="Button-module__button___QloF7 AddressPickerInput-module__button___1f7rV FrontPageLocationSelector-module__button___1lxSd"><span
					data-localization-key="front-view.fetch-address">Search</span></button></div>
		<div class="FrontHeroBanner-module__cityLink___1OIWM"><a class="LinkButton-module__link___3otld"
				href="/en/kaz/shymkent">or view popular restaurants and stores in Shymkent</a></div>
	</div>
	<div class="row">
		<div class="col-md-12 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/london.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>London</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/new-york.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>New York</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/paris.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Paris</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/kuala-lumpur.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Kuala Lumpur</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/agra.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Agra</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/dubai.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dubai</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/rio-de-janeiro.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Rio De Janeiro</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/giza.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Giza</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/sydney.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sydney</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
            </div>
            
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
<script src="{{asset("js/wolt.js")}}"></script>

</body>
</html>


{{-- <!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 <link rel="stylesheet" href="css/slider.css">
 

<!--Item slider text-->
<h1 class="text-center"> Product Slider</h1>
<ul>
  <li>Auto Slide</li>
  <li>Stop On Hover</li>
  <li>Slide One Item</li>
</ul>
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1539840093138-9b3e230e5206?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=765a2eb222b1851840a4a157780fb487&auto=format&fit=crop&w=1534&q=80" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL SUKNJA</h4>
              <h5 class="text-center">4000,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1524010349062-860def6649c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e725946a3f177dce83a705d4b12019c2&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL KOŠULJA</h4>
              <h5 class="text-center">4000,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1511556820780-d912e42b4980?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=04aebe9a22884efa1a5f61e434215597&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <span class="badge">10%</span>
              <h4 class="text-center">PANTALONE TERI 2</h4>
              <h5 class="text-center">4000,00 TK</h5>
              <h6 class="text-center">5000,00 TK</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1531925470851-1b5896b67dcd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=91fe0ca1b5d72338a8aac04935b52148&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">CVETNA HALJINA</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1516961642265-531546e84af2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74065eec3c2f6a8284bbe30402432f1d&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA FOTO</h4>
              <h5 class="text-center">4000,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1532086853747-99450c17fa2e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=61a42a11f627b0d21d0df757d9b8fe23&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA MAYORAL</h4>
              <h5 class="text-center">4000,00 TK</h5>
            </div>
          </div>

        </div>
        {{-- end item list --}}
        {{-- <div id="slider-control">
            <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
            <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
        </div>
      </div> --}}
      {{-- end carousel --}}
    {{-- </div> --}}
  {{-- </div>
</div> --}}
<!-- Item slider end-->
{{-- <br/><br/>
<footer class="bg-info">
  <p class="text-center">
  &copy; <a href="https://www.facebook.com/maruf.al.bashir" target="_blank" >Maruf-Al Bashir 2018</a>
  </p>
</footer>
<script src="js/slider.js"></script> --}}