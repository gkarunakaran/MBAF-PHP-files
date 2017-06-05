<?php
$connection=mysqli_connect("localhost","root","","MBAF")or die("Error" .mysqli_error($connection));
$sql="select * from findfriend";
$result=mysqli_query($connection,$sql) or die ("Error in selecting" .mysql_error($connection));
$frienddetais=array();
while ($row=mysqli_fetch_assoc($result)) {
	
	$frienddetais[] = $row;
}
echo json_encode(array('friends'=>$frienddetais));
mysqli_close($connection);
?>