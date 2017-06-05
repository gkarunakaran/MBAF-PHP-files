<?php
$connection=mysqli_connect("localhost","root","","MBAF")or die("Error" .mysqli_error($connection));
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from signup Where Username='$username' and Password='$password'";
$sql_mobile="select Mobile from signup Where Username='$username' and Password='$password'";
$result=mysqli_query($connection,$sql) or die ("Error in selecting" .mysql_error($connection));
$mobile=mysqli_query($connection,$sql_mobile);
$row=mysqli_fetch_array($mobile);
$check=mysqli_fetch_array($result);
if(isset($check)){
echo "success";	
echo $row['Mobile'];
}
else{
echo "failure";
}
mysqli_close($connection);
?>