<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    {{-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
      crossorigin="anonymous"
    />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}

    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/slider.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>My Geocode App</title>
    <style>
      #map {
        height: 500px;
        width: 80%;
      }
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
      

  </head>
  <body>

    <div class="containe">
      	<!-- wrapperAll -->
	<section class="wrapperAll">
		<section class="wrapper">
			<h1>Latest Albums</h1>
			<a class="buttonLine" href="http://marguerite-nicot.com/sliderEng/">See it with images</a>
		</section>

		<!-- 
		This section will prevent bugs : it hide overflowing content.
		The section is in position:relative; that way, buttons will be attach more easily.
		 -->
		<section class="sliderComplete">
			<!-- 
			The wrapper provides a good implementation of the code in responsive design.
			"Latest Albums" and the slider are aligned with the wrapper.
			 -->
			<!-- Wrapper -->
			<section class="wrapper">
				<!-- ".slider" has a width greater than 100% to give way to all albums to align.  -->
				<ul class="slider">
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">EXO - 'MAMA' Mix</a> - Date</p>
						<p><a href="#">BMixer</a></p>
					</li>
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">Galaxy Supernova</a> - Date</p>
						<p><a href="#">GG</a></p>
					</li>
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">2nd Album</a> - Date</p>
						<p><a href="#">Boyfriend</a></p>
					</li>
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">3</a> - Date</p>
						<p><a href="#">Indochine</a></p>
					</li>
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">Nadiya</a> - Date</p>
						<p><a href="#">Nadiya</a></p>
					</li>
					<li>
						<a href="#" class="cover">
							<img src="http://media6.tiin.vn/media01/4e6eaf58ba7e1/2013/06/17/8480ab71-99b3-4574-ac01-ca0b9eb35350.jpg" />
						</a>
						<p><a href="#">Objection (Tango)</a> - Date</p>
						<p><a href="#">Shakira</a></p>
					</li>
				</ul>
			</section>
			<!-- End wrapper -->

			<!-- 
			The buttons on the outside of the section are crucial to be connected in position:absolute; to .sliderComplete.
			 -->

			<!-- 
			The class "close" allows the button to be invisible without loading jQuery.
			The layout will make it faster to load regardless of the connection.
			 -->
			<button title="before" class="close">
				<svg version="1.1" id="left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="12.7 2.5 15.4 25" enable-background="new 12.7 2.5 15.4 25" height="24" xml:space="preserve">
				<g id="chevron-right">
					<polygon fill="#38373A" points="13,15 25,27 27.8,24.2 18.6,15 27.8,5.8 25,3 	"/>
				</g>
				</svg>
			</button>

			<!-- 
			".open" is on display:block; to be visible.
			 -->
			<button title="after" class="open">
				<svg version="1.1" id="right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="12.7 2.5 15.4 25" enable-background="new 12.7 2.5 15.4 25" height="24" xml:space="preserve">
				<g id="chevron-right">
					<polygon fill="#38373A" points="15.8,3 13,5.8 22.2,15 13,24.2 15.8,27 27.8,15 	"/>
				</g>
				</svg>
			</button>
		</section>
		<!-- End sliderComplete -->
	</section>
	<!-- End wrapperAll -->
    </div>

      <div class="container">
        <h2 id="text-center">Enter Location:</h2>
        <form id="location-form">
          <input
            type="text"
            id="location-input"
            class="form-control form-control-lg"
          />
          <br />
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <div class="card-block" id="formatted-address"></div>
        <div class="card-block" id="address-components"></div>
        <div class="card-block" id="geometry"></div>
        
      </div>
    <h1>location</h1>
      <div id="map"></div>
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    {{-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4&libraries=&v=weekly"
    async
  ></script> --}}
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script> --}}
    <script>

    function getDistance(origin,destination) {
      var directionsService = new google.maps.DirectionsService();
      var request = {
        origin      : origin, // a city, full address, landmark etc
        destination : destination,
        travelMode  : google.maps.DirectionsTravelMode.DRIVING
      };

      directionsService.route(request, function(response, status) {
        if ( status == google.maps.DirectionsStatus.OK ) {
          var distanceInMeter = response.routes[0].legs[0].distance.value;
          var distaceInKm = distanceInMeter/1000;
          console.log(distaceInKm);
          // alert( response.routes[0].legs[0].distance.value ); // the distance in metres
        }
        else {
          // oops, there's no route between these two locations
          // every time this happens, a kitten dies
          // so please, ensure your address is formatted properly
        }
      });
    }



//start google places api
  var searchInput = 'location-input';
 
 $(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
   types: ['geocode'],
   componentRestrictions: {
    country: "GR"
   }
  });
   
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
   var near_place = autocomplete.getPlace();
   console.log(near_place);
  });
 });
//google places api code

      // Call Geocode

      //geocode();

      // Get location form
      var locationForm = document.getElementById("location-form");

      // Listen for submiot
      locationForm.addEventListener("submit", geocode);
      
      
      function geocode(e) {
        // Prevent actual submit
        e.preventDefault();

        var location = document.getElementById("location-input").value;

        axios
          .get("https://maps.googleapis.com/maps/api/geocode/json", {
            params: {
              address: location,
              key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
            },
          })
          .then(function (response) {
            // Log full response
            console.log("response");
            console.log(response);

            // Formatted Address
            var formattedAddress = response.data.results[0].formatted_address;
            var formattedAddressOutput = `
          <ul class="list-group">
            <li class="list-group-item">${formattedAddress}</li>
          </ul>
        `;
            // Address Components
            var addressComponents = response.data.results[0].address_components;
            var addressComponentsOutput = '<ul class="list-group">';
             
            console.log(response.data);
            for (var i = 0; i < addressComponents.length; i++) {
              if (addressComponents[i].types[0] == 'postal_code') {
                console.log(addressComponents[i].long_name);
              }
               
              addressComponentsOutput += `
            <li class="list-group-item"><strong>${addressComponents[i].types[0]}</strong>: ${addressComponents[i].long_name}</li>

          `;
            }
            addressComponentsOutput += "</ul>";
            // Geometry
            var lat = response.data.results[0].geometry.location.lat;
            var lng = response.data.results[0].geometry.location.lng;
            
            let map;
              console.log("in "+lat+" & "+lng);
              map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: lat, lng: lng },
                zoom: 12,
              });
              new google.maps.Marker({
                  position:{ lat: lat, lng: lng },
                  map:map,
                  label:"S",
              });
            

            var geometryOutput = `
          <ul class="list-group">
            <li class="list-group-item"><strong>Latitude</strong>: ${lat}</li>
            <li class="list-group-item"><strong>Longitude</strong>: ${lng}</li>
          </ul>
        `;

            // Output to app
            document.getElementById(
              "formatted-address"
            ).innerHTML = formattedAddressOutput;
            document.getElementById(
              "address-components"
            ).innerHTML = addressComponentsOutput;
            document.getElementById("geometry").innerHTML = geometryOutput;
          })
          .catch(function (error) {
            console.log(error);
          });
          
      }
      var outlat = 32.0740;
      var outlng=72.6861;
      let map;
      console.log(outlat+" & "+outlng);
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: outlat, lng: outlng },
          zoom: 10,
        });
        new google.maps.Marker({
            position:{ lat: outlat, lng: outlng },
            map:map,
            label:"S",
        });
      }

    lati1 = 37.9458786;
    longi1 = 23.7537935;
    lati2 = 37.9454214;
    longi2 = 23.7553896;

    var lat1 = 32.0740;
    var lng1 = 72.6861;
    var lat2 = 33.6844;
    var lng2 = 73.0479;
    var unit = "K";
    // 0.14889838937471936
    console.log("total distance: "+calcCrow(lati2,longi2,lati1,longi1).toFixed(5));

    function calcCrow(lat1, lon1, lat2, lon2) 
    {
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c;
      return d;
    }

    // Converts numeric degrees to radians
    function toRad(Value) 
    {
        return Value * Math.PI / 180;
    }

    // function distance(lat1, lon1, lat2, lon2, unit) {
    //       var radlat1 = Math.PI * lat1/180
    //       var radlat2 = Math.PI * lat2/180
    //       var radlon1 = Math.PI * lon1/180
    //       var radlon2 = Math.PI * lon2/180
    //       var theta = lon1-lon2
    //       var radtheta = Math.PI * theta/180
    //       var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    //       dist = Math.acos(dist)
    //       dist = dist * 180/Math.PI
    //       dist = dist * 60 * 1.1515
    //       if (unit=="K") { dist = dist * 1.609344 }
    //       if (unit=="N") { dist = dist * 0.8684 }
    //       return dist
    // }

  // function distance(lat1, lon1, lat2, lon2, unit) {
  //   if ((lat1 == lat2) && (lon1 == lon2)) {
  //     return 0;
  //   }
  //   else {
  //     var radlat1 = Math.PI * lat1/180;
  //     var radlat2 = Math.PI * lat2/180;
  //     var theta = lon1-lon2;
  //     var radtheta = Math.PI * theta/180;
  //     var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
  //     if (dist > 1) {
  //       dist = 1;
  //     }
  //     dist = Math.acos(dist);
  //     dist = dist * 180/Math.PI;
  //     dist = dist * 60 * 1.1515;
  //     if (unit=="K") { dist = dist * 1.609344 }
  //     if (unit=="N") { dist = dist * 0.8684 }
  //     return dist;
  //   }
  // }
     
    </script>
    <script src="js/slider.js"></script>
  </body>
</html>

{{-- // ----------------second map------------- --}}

{{-- <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 32.0740, lng: 72.6861 },
          zoom: 10,
        });
        new google.maps.Marker({
            position:{ lat: 32.0740, lng: 72.6861 },
            map:map,
            label:"S",
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    
  </body> 
</html>  --}}

{{-- //--------------------last one --}}

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel google map</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="container">
                    <h2>Google map</h2>
                </div>
                <input type="text" data-field-name="city_name" id="country" class="form-control autocomplete_txt">
                <input type="text" data-field-name="city" id="city" class="form-control">
                <button class="btn btn-success"> order now </button>
                <div class="map" id="app">

                </div>
            </div>
            <script src="js/app.js"></script>
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <script src="{{asset("eBloom-assets/assets/js/autocompleteField.js")}}"></script>
    </body>
</html> --}}
