<?php

session_start();
require("connect.php");
$password3=$_POST["password3"];
$username3=$_POST["username3"];

$query=" SELECT `user_id` FROM `users` WHERE user_id='$username3'  AND user_password='$password3'";

$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)==1){
			$user_name="";
			$row=mysqli_fetch_assoc($query_run);
			$user_name=$row['user_id'];
			$_SESSION['user_name']=$user_name;
			
			echo $user_name;
	
}
else{
	echo 'fail';
}



?>