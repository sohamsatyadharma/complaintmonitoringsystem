<?php


require("connect.php");
$city=$_GET['city'];
$query=" SELECT name FROM station  WHERE city='$city' LIMIT 9";
$query_run=mysqli_query($con,$query);

$data = array(array());
while ($row = mysqli_fetch_assoc($query_run)) {
    $data[] = array(
        'name' =>$row['name']
    );
}
$json_data = json_encode($data);
echo $json_data;


?>