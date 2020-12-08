<?php
$server="localhost";
$user="root";
$pass="";
$db="add_to_cart";

$name=$_POST['name'];
$qty=$_POST['qty'];
$price=$_POST['price'];


$con=mysqli_connect($server, $user, $pass, $db );
if(!con){
	echo "Not connected";
}
else 
{
	
	$sql="INSERT into cart(p_name, quantity, price) values('$name','$qty','$price')";
    if(mysqli_query($con, $sql)){
		header("location:index.php");
	}else
	{
		echo '<script>alert("Item Not Added")</script>';
	}
}
?>

