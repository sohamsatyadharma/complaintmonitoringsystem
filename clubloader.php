<?php


require("connect.php");
$clubname=$_GET['cl'];
$query=" SELECT club,heading,id,discription,date,type FROM events  WHERE club='$clubname' ORDER BY timestamp DESC LIMIT 6";
$query_run=mysqli_query($con,$query);

$data = array(array());
while ($row = mysqli_fetch_assoc($query_run)) {
    $data[] = array(
        'heading' =>$row['heading'],
        'date' => $row['date'],
        'discription' => $row['discription'],
		'club'=>$row['club'],
		'id'=>$row['id'],
		'type'=>$row['type']
    );
}
$json_data = json_encode($data);
echo $json_data;


?>