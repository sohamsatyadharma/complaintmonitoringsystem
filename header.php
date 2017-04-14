<header class="navbar navbar-inverse navbar-fixed-top "  id="bar1" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand"><img src="img/logo15.png" alt="SAC"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <li class="fire" id="logfirst"><a href="#" data-toggle="modal" data-target="#modal3">Lodge a Complaint</a></li>
                    <li  id="homeli"><a href="index.php"><strong>Home</strong></a></li>
                   
                    <li id="signupli"><a href="#" data-toggle="modal" data-target="#modal1">Sign Up</a></li>
                        	<li><a href="#" data-toggle="modal" data-target="#modal3" >Log In</a></li>
                       
                    </li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
	
	
	
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup" style="background:url(img/admin-body2.jpg)">
                        <div class="cross" align="left">
             			<i class="icon-remove-sign icon-2x" style="color:#fff; margin-top:0;" ></i>
         				</div>
                <p class="modal-msg"> </p>
				<h2 class="white">Sign Up</h2>
				<form  class="popup-form">
					<input type="text" class="form-control form-white input-modal" id="fullname1"  value="Full Name">
					<input type="text" class="form-control form-white input-modal"  id="username1" value="Username">
					<input type="text" class="form-control form-white input-modal-pass" id="password1" value="password">
					<input type="text" class="form-control form-white input-modal-pass"  id="passwordre1" value="Password(rewrite)">
                    <input type="text" class="form-control form-white input-modal"  id="adhar" value="Adhar">
                    <input type="text" class="form-control form-white input-modal"  id="contact" value="Contact">
					<div class="checkbox-holder text-left" >
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" checked="checked" name="tc"/>
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<br>
					<button id="signup" class="btn-green">Submit</button>
				</form>
			</div>
		</div>
	</div>
    
    
<!--	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup" style="background:url(img/admin-body2.jpg)">
				         <div class="cross" align="left">
                         <i class="icon-remove-sign icon-2x" style="color:#fff; margin-top:0;" ></i>
                         </div>
                <p class="modal-msg2"> </p>
				<h2 class="white">Log In (Administrator)</h2>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white input-modal" id="username2" value="Username">
					<input type="text" class="form-control form-white input-modal-pass" id="password2" value="Password">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Club
						</button>
						<ul class="dropdown-menu animated fadeIn " role="menu" aria-labelledby="dLabel">
							<li class=""><a href="#">LitC</a></li>
                            <li class=""><a href ="#">Abhay-Dramatics</a></li>
							<li class=""><a href="#">CUE-rious</a></li>
							<li class=""><a href="#">Manthan</a></li>
							<li class=""><a href="#">ART-freaks</a></li>
                            <li class=""><a href="#">LITM</a></li>
							<li class=""><a href="#">E-CELL(genesis)</a></li>
							<li class=""><a href="#">FOTO-freaks</a></li>
							<li class=""><a href="#">Samitra</a></li>
						</ul>
					</div>
					<br>
					<br>
					<br>
					<button  id="admin-login"  class="btn-green">Submit</button>
				</form>
			</div>
		</div>
	</div>
    -->
    
	<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup" style="background:url(img/admin-body2.jpg)">
                     <div class="cross" align="left">
             <i class="icon-remove-sign icon-2x" style="color:#fff; margin-top:0;" ></i>
                     </div>
                <p class="modal-msg3"> </p>
				<h2 class="white">Log in (User)</h2>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white input-modal"  id="username3" value="Username">
					<input type="text" class="form-control form-white input-modal-pass" id="password3" value="Password" >
					<br>
					<br>
					<br>
					<button  id="login" class="btn-green">Submit</button>
				</form>
			</div>
		</div>
	</div>
	   
    
    
    
    
    
    
