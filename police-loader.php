<?php


require("connect.php");
$station=$_GET['station'];
$query1=" SELECT name,address,phno,star,incharge,complain_res,complain_pend FROM station WHERE name='$station'";
$query_run=mysqli_query($con,$query1);

$data = array();
while ($row = mysqli_fetch_assoc($query_run)) {
    $data = array(
        'name' =>$row['name'],
        'address' => $row['address'],
        'phno' => $row['phno'],
		'incharge'=>$row['incharge'],
		'cr' => $row['complain_res'],
        'cp' => $row['complain_pend'],
		'star'=>$row['star']
    );
}
$json_data = json_encode($data);
echo $json_data;

