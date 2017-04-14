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

    <title>CLUBs</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
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
		<div class="section section-breadcrumbs">
			<div class="container-fluid bloghead">
				<div class="row">
					<div class="col-md-12">
						<h1></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<div  id="post1" class ="col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>
								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->   
                    
                    
                    
					<!-- Blog Post Excerpt -->
					<div id="post2"  class="col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>
								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->

					<!-- Blog Post Excerpt -->
					<div id="post3"  class=" col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>
								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div id="post4" class="col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>

								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->

					<!-- Blog Post Excerpt -->
					<div id="post5" class="col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>

								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->

					<!-- Blog Post Excerpt -->
					<div id="post6" class="col-sm-4">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2></h2>
							</div>

							<div >
								<img class="single-post-image">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>
							</div>
							
							<div class="single-post-content">
								<p>
								</p>
							<a class="btn"></a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->	
                 <hr>
				

				</div>
			</div>
	    </div>
        								<!-- Pagination -->
             <div class="section">
	    	<div class="container">
								<div class="pagination-wrapper col-sm-12 ">
									<ul class="pagination pagination-sm">
										<li><a id="more" href="#">more...</a></li>
									</ul>
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
     <script src="js/my2.js"></script>		

    </body>
</html>