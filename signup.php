<?php
$connection=mysqli_connect("localhost","root","","MBAF")or die("Error" .mysqli_error($connection));
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$sql="select * from signup Where Mobile='$mobile'";
$result=mysqli_query($connection,$sql) or die ("Error in selecting" .mysql_error($connection));
$check=mysqli_fetch_array($result);
if(isset($check)){
echo "User Already Exist";
}
else{
	$sql_friend="INSERT INTO findfriend (Username,Mobile) VALUES('$username','$mobile')";
	$sql_signup="INSERT INTO signup (Username,Mobile,password) VALUES('$username','$mobile','$password')";
	mysqli_query($connection,$sql_friend);
	mysqli_query($connection,$sql_signup);
echo "Registered Successfully";
}
mysqli_close($connection);
?>