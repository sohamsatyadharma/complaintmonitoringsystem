<?php
  $user='abhishek';
  $password='abd';
  $host="localhost";
  $db="cms";
 $con= mysqli_connect($host,$user,$password,$db) or die();
echo 'vuiug';
$t=time();
$user_id=$_POST["user_id"];
$complain_hash=$_POST["complain_hash"];
$content=$_POST["content"];
$query=" INSERT INTO `cms`.`chat` (`id`, `content`, `user_id`,`complain_hash`, `timestamp`) VALUES (NULL, '$content', '$user_id','$complain_hash','$t')";
$query_run=mysqli_query($con,$query);


?>

