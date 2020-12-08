<?php
    session_start();

    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['qty'];
    
    
    $products =array($name, $price, $quantity);
    $_SESSION[$name] =$products;




    

    echo '<script>alert("Added to cart")</script>';
    header("location:index.php");

?>