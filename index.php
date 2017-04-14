<?php
session_start();
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMS_HOME</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
    <!-- Fonts & Icons -->
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	

	

</head>

    <body>
    <?php 
	if(isset($_SESSION['user_name'])){
		require("header-logged.php");
	}
	else{
	require("header.php") ;
	}
	
	?>
	<div class="distance" style="margin-top:100px;">     
        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<!-- Featured News -->
					<div class="col-sm-6 leftwala container">
                    
                <img class="img-responsive img-rounded current "  id="i1"  src="">
                <h2>  </h2>
            
              
                    
					</div>
	        		<div class="col-sm-6 featured-news rightwala">
	        			<h2 class="news">Latest&nbsp;News&nbsp;&&nbsp;Events</h2>
	        			<div class="row">
	        				<div class="col-xs-4"><a id="image1"><img src="img/news/no1.jpg" alt="Post Title"></a></div>
	        				<div class="col-xs-8">
	        					<div class="caption" id="caption1"><a href="img/news/no1.jpg"> </a></div>
	        					<div class="date" id="date1"> </div>
								
	        					<div class="intro" id="intro1"> 
									<h4> Baby among three dead after driver mows down pedestrians in Kolkata, wounding dozens </h4> 
									<a href="detail1.php">Read more...</a>
								</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-xs-4"><a id="image2"><img src="img/news/no2.jpg" alt="Post Title"></a></div>
	        				<div class="col-xs-8">
	        					<div class="caption" id="caption2"><a href="img/news/no2.jpg"> </a></div>
	        					<div class="date" id="date2"> </div>
	        					<div class="intro" id="intro2"> 
									<h4> Drug lord 'El Chapo' lands in Kolkata after extradition from Bangladesh, to face judge Friday </h4>
									<a href="detail2.php">Read more...</a>
								</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-xs-4"><a id="image3"><img src="img/news/no3.jpg" alt="Post Title"></a></div>
	        				<div class="col-xs-8">
	        					<div class="caption" id="caption3"><a href="img/news/no3.jpg"> </a></div>
	        					<div class="date" id="date3"> </div>
	        					<div class="intro" id="intro3">
									<h4> Biker's gang thrashes youth, cops sit on FIR </h4>
									<a href="detail3.php">Read more...</a>
								</div>
	        				</div>
	        			</div>
	        		</div>
	        		<!-- End Featured News -->
	        	</div>
	        </div>
	    </div>
	</div>	

	<hr style="border-bottom:#aec62c 1px dotted">

		<!-- Our Portfolio -->	

        <div class="section section-white ">
                     <div style="margin-left:130px;"> <h3 style="margin-bottom=0;">Enter Your Location </h3>
                <h3></h3>                  
                    <div id="locationField" style="width:300px; margin-left=30px;">
      <input id="autocomplete" placeholder="Enter your Location"
             onFocus="geolocate()" type="text"></input>
    </div>
    </div>
        <table id="address" class="hide">
      <tr class="hide">
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label" >City</td>
        <!-- Note: Selection of address components in this example is typical.
             You may need to adjust it for the locations relevant to your app. See
             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
        -->
        <td class="wideField" colspan="3"><input value="" class="field" id="locality"
              ></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
              
      </tr>
      <tr class="hide">
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>
        
        
        
        
        
	        <div class="container">
	        	<div class="row">
                
                
	
				<div class="section-title col-lg-6 col-md-6" style="margin-top:30px;" align="center" >
				<h1 style="padding-top:40px;">BEST PERFORMERS</h1>



    
				</div>
	
        
		
			<ul class="grid cs-style-3">
            
            <div id="coverhai" class="">
	        	<div class="col-md-3 col-md-4 col-sm-6">
					<figure id="figure1">
						<img src="img/station/0.jpg" alt="img04" height="168" width="300">
						<figcaption>
							<h3>Garia</h3>
							<span>Garia</span>
							<a  class="clubicons" value="garia" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
	        	</div>	
                
                
				<div class=" col-md-3 col-md-4 col-sm-6">
					<figure id="figure2">
						<img src="img/station/1.jpg" alt="img01" height="168" width="300">
						<figcaption>
							<h3>Jadavpur</h3>
							<span>Jadavpur</span>
							<a  class="clubicons" value="jadavpur" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                <div class="col-md-3 col-md-4 col-sm-6">
					<figure id="figure3">
						<img src="img/station/2.jpg" alt="img06" height="168" width="300">
						<figcaption>
							<h3>Dwarka</h3>
							<span>Dwarka</span>
							<a  class="clubicons" value="Dwarka" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                
                <div class=" col-md-3 col-md-4 col-sm-6">
					<figure id="figure4">
						<img src="img/station/3.jpg" alt="img01" height="168" width="300">
						<figcaption>
							<h3>Jorabagan</h3>
							<span>Jorabagan</span>
							<a  class="clubicons" value="jorabagan" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                
                <div class=" col-md-3 col-md-4 col-sm-6">
					<figure id="figure5">
						<img src="img/station/4.jpg" alt="img01" height="168" width="300">
						<figcaption >
							<h3>Amherst</h3>
							<span>Amherst</span>
							<a  class="clubicons" value="amherst" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                
				<div class=" col-md-3 col-md-4 col-sm-6">
					<figure id="figure6">
						<img src="img/station/5.jpg" alt="img02" height="168" width="300">
						<figcaption>
							<h3>Gariahat</h3>
							<span>Gariahat</span>
							<a  class="clubicons" value="gariahat" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
				<div class=" col-md-3 col-md-4 col-sm-6 hide">
					<figure id="figure7">
						<img src="img/station/6.jpg" alt="img02" height="168" width="300">
						<figcaption>
							<h3>Gariahat</h3>
							<span>Gariahat</span>
							<a  class="clubicons" value="gariahat" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                				<div class=" col-md-3 col-md-4 col-sm-6 hide">
					<figure id="figure8">
						<img src="img/station/gariahat.jpg" alt="img02" height="168" width="300">
						<figcaption>
							<h3>Gariahat</h3>
							<span>Gariahat</span>
							<a  class="clubicons" value="gariahat" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                                				<div class=" col-md-3 col-md-4 col-sm-6 hide">
					<figure id="figure9">
						<img src="img/station/gariahat.jpg" alt="img02" height="168" width="300">
						<figcaption>
							<h3>Gariahat</h3>
							<span>Gariahat</span>
							<a  class="clubicons" value="gariahat" href="police_station.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
                
                
               </div>
                
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->
			
<hr style="">

		

        <?php require("footer.php") ?>
	            <!-- Javascripts -->
     <script src="js/jquery-1.9.1.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
     <script src="js/bootstrap.min.js"></script>
	 <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>	
		<!-- my jquery file -->
	 <script src="js/my.js"></script>	
     <script src="js/my4.js"></script>
     
         <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfT3Bbf5CIPXpdiiys-sM9bZLhRxtCIAU&libraries=places&callback=initAutocomplete"
        async defer></script>

    </body>
</html>