<?php
$server="localhost";
$user="root";
$pass="";
$db="registration";

$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect($server, $user, $pass, $db );
if(!con){
	echo "Not connected";
}
else 
{
	$sql="SELECT * FROM register WHERE username='$username' AND pass='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row['username'] ==$username && $row['pass']==$password){
		header("location:index.php");
        
	}else{
        header("location:login.php?error=All fields Required");
	}
}
