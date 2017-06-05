<?php
$connection=mysqli_connect("localhost","root","","MBAF")or die("Error" .mysqli_error($connection));
$lattitude=$_POST['lattitude'];
$longitude=$_POST['longitude'];
$mobile=$_POST['mobile'];
$sql="UPDATE findfriend SET Lattitude='$lattitude',Longitude='$longitude' WHERE Mobile='$mobile'";
$result=mysqli_query($connection,$sql) or die ("Error in selecting" .mysql_error($connection));
mysqli_close($connection);
?>