<?php

require("connect.php");
$password1=$_POST["password1"];
$username1=$_POST["username1"];
$name1=$_POST["fullname1"];
$adhar=$_POST["adhar"];
$contact=$_POST["contact"];
$address="Q.no. 123, xyz colony, abc road, Indore (M.P)";

$query=" INSERT INTO `cms`.`users` (`id`, `name`, `adhar`, `user_id`, `user_password`,`contact`,`address`) VALUES (NULL, '$name1', '$adhar', '$username1', '$password1' , '$contact' ,'$address')";

if($query_run=mysqli_query($con,$query)){
	echo 'yes';
}
else{
	echo
	'no';
}

?>