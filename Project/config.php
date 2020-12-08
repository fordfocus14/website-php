<?php
session_start();
$conn =mysqli_connect("localhost","root","","add_to_cart");
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id= array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count=count($_SESSION["shopping_cart"]);
            $item_array=array(
                'item_id'       =>$_GET["id"],
                'item_name'       =>$_GET["hidden_name"],
                'item_quantity'       =>$_GET["quantity"],
                'item_price'       =>$_GET["hidden_price"]
            );
            $_SESSION["shopping_cart"][$count]=$item_array;
        }
        else
        {
            echo'<script>alert("Item Added to Cart")</script>';
            echo'<script>window.location="index.php"</script>';
        }
    }
    else{
    $item_array=array(
        'item_id'       =>$_GET["id"],
        'item_name'     =>$_GET["hidden_name"],
        'item_quantity' =>$_GET["quantity"],
        'item_price'    =>$_GET["hidden_price"]
    );
    $_SESSION["shopping_cart"][0]=$item_array;
    }
}

if(isset($_GET["action"]))
{
  if($_GET["action"]=="delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys =>$values)
    {
      if($values["item_id"]==$_GET["id"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>windows.location="product_cart.php"</script>';
      }
    }
  }
}
?>