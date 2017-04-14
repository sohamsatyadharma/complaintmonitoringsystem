<?php
  $user='abhishek';
  $password='abd';
  $host="localhost";
  $db="cms";
 $con= mysqli_connect($host,$user,$password,$db) or die();
 
 $complain_hash=$_POST["complain_hash"];
 
$query=" SELECT content,user_id,timestamp FROM chat WHERE `complain_hash`='$complain_hash' ORDER BY timestamp DESC";
$query_run=mysqli_query($con,$query);

$data = array(array());
while ($row = mysqli_fetch_assoc($query_run)) {
    $data[] = array(
        'timestamp' =>$row['timestamp'],
        'user_id' => $row['user_id'],
        'content' => $row['content'],
    );
}
$json_data = json_encode($data);
echo $json_data;


?>