<html>
<head>
	<style type="text/css">
		body{
			background-image: url("images/success.jpg");
			background-repeat:  no-repeat;}
	</style>
</head>
	
	<body>
	<?php
	  $num=unserialize(urldecode($_GET['num']));
	  $path = 'reports/'.$num.'.pdf';

	?>
		<h1 align="center">Your Complaint Has been registered</h1>
		<br><br>
		<h2 align="center">Complaint ID:<?php echo $num ?></h2>
		<br><br>
		<form action="<?php echo $path ?>" method="GET">
		<div align="center">
		<button id="Download" name="Download" type="Submit" >Download FIR Copy</button>
		</div>
		</form>
	</body>
</html>
