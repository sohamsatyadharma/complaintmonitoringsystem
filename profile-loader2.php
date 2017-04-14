
<?php
 
 

require("connect.php");
$user_id=$_GET['user_id'];


$query=" SELECT heading,description,timestamp,complaint_hash,location,recent_status FROM complain WHERE user_id='$user_id'";
$query_run=mysqli_query($con,$query);


$data = array(array());
while ($row = mysqli_fetch_assoc($query_run)) {
    $data[] = array(
        'heading' =>$row['heading'],
        'timestamp' => $row['timestamp'],
        'description' => $row['description'],
		'complain_hash'=>$row['complaint_hash'],
		'location'=>$row['location'],
		'recent_status'=>$row['recent_status']
    );
}
$json_data = json_encode($data);
echo $json_data;