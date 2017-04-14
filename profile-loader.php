<?php
 
 

require("connect.php");
$user_id=$_GET['user_id'];
$query1=" SELECT name,address,contact,adhar FROM users WHERE user_id='$user_id'";
$query_run=mysqli_query($con,$query1);

$data = array();
while ($row = mysqli_fetch_assoc($query_run)) {
    $data = array(
        'name' =>$row['name'],
        'address' => $row['address'],
        'contact' => $row['contact'],
		'adhar'=>$row['adhar']
    );
}
$json_data = json_encode($data);
echo $json_data;


 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
	
 