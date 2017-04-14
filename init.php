<?php
$db_name="registration";
$m_user="rohit";
$m_pass="8961447949";
$ser_name="127.0.0.1";

$con=mysqli_connect($ser_name,$m_user,$m_pass,$db_name);
if(!$con)
{
echo "Connection Error".mysqli_connect_error();
}
else
{
echo "<h3>Success</h3>";
}
?>