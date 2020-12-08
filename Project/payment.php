<?php
$server="localhost";
$user="root";
$pass="";
$db="payment";

$name=$_POST['name'];
$card=$_POST['card'];
$expiry=$_POST['expiry'];
$cvv=$_POST['cvv'];
$bill=$_POST['bill'];

$con=mysqli_connect($server, $user, $pass, $db );
if(!con){
	echo "Not connected";
}
else 
{
	
	$sql="INSERT INTO buyitems(cardname,cardno,epx,cvv,bill) VALUES ('$name', '$card', '$expiry', '$cvv', '$bill')";
    if(mysqli_query($con,$sql)){
        echo"<script>
        alert('Payment Successful');
        window.location.href='index.php';
        </script>";
	}else
	{
		header("location:purchase.php.php?error=All fields Required");
	}
}
