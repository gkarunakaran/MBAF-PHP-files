<?php
$connection=mysqli_connect("localhost","root","","MBAF")or die("Error" .mysqli_error($connection));
$sql="select Message from messages";
$result=mysqli_query($connection,$sql) or die ("Error in selecting" .mysql_error($connection));
$message=array();
while ($row=mysqli_fetch_assoc($result)) {
	
	$message[] = $row;
}
echo json_encode(array('messages'=>$message));
mysqli_close($connection);
?>