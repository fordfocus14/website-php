<?php
$server="localhost";
$user="root";
$pass="";
$db="registration";

$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];

$con=mysqli_connect($server, $user, $pass, $db );
if(!con){
	echo "Not connected";
}
else 
{
	
	$sql="INSERT INTO register(f_name, username, email, phone, address1, pass) VALUES ('$name', '$username', '$email', '$phone', '$address', '$password')";
    if(mysqli_query($con,$sql)){
		header("location:SIGN_UP.php?success=Registration Successful");
		header("location:SIGN_UP.php");
	}else
	{
		header("location:SIGN_UP.php?error=All fields Required");
	}
}
