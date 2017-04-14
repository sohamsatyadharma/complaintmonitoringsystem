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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event</title>
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
	else if(isset($_SESSION['club_name'])){
		require("header-admin.php");
	}
	else{
	require("header.php") ;
	}
	
	?>

        <!-- Page Title -->

        
        <div class="section" id="detail">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-sm-10">
						<div class="blog-post blog-single-post">
							<div class="single-post-title-detail">
                                                        <div  style="margin-bottom:1px;" >
                                 <button id="editli" class="btn-green  hide" style="padding-left:17px; padding-right:17px;margin-left:2px; font-size:1.2em;">Edit</button>
                                 </div>
								<h2 id="detailhead" style="color:#000;"></h2>
                                <h4 id="below-detail-head" style=" margin-top:-4px"></h4>
							</div>

							<div class="single-post-image-detail">
								<img src="">
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>30 JAN, 2013
							</div>							
							<div class="single-post-content">
								<p></p>
							</div>
						</div>
					</div>
					<!-- End Blog Post -->
					<!-- Sidebar -->
                            <div  style="margin-bottom:10px;">
                                 <button id="editli" class="btn-green btn hide" style="padding-left:17px; padding-right:17px; font-size:1.8em;">Edit</button>
                                 </div>
				</div>
			</div>
	    </div>

        <?php require("footer.php") ?>
	            <!-- Javascripts -->
     <script src="js/jquery-1.9.1.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
     <script src="js/bootstrap.min.js"></script>
	 <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>	
		<!-- my jquery file -->
	 <script src="js/my.js"></script>	

    </body>
</html>