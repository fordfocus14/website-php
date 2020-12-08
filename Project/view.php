<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<style>
.menu-bar{
  width: 40%;
  height: 57px;
  float: right;
}
.btn_buy
{
    background-color:orangered;
    border-radius:5px;
    cursor: pointer;
    color:white;
    
}
.btn_buy:hover
{
    background-color:black;
    color:white;
}
.menu-bar ul{
display:inline-flex;
float: left;

}
.menu-bar ul li{
  border-left: 1px solid #fff;
  list-style-type:none;
  padding: 15px 35px;
  text-align: center;
  background-color: orangered;
  cursor: pointer;
}
.menu-bar ul li:hover
{
  background: black;
}
.menu-bar ul li a{
  font-size: 16px;
  font-weight:bold;
  color: #fff;
  text-decoration:none;
}
</style>


<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>My Cart</h1><hr>
</div>

<div class="menu-bar">
      <ul>
          <li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
        </ul>
</div>



<div class="col-lg-9">
 <table class="table">
    <thead class="text-center">
        <tr>
        <th scope="col">Serial No</th>
        <th scope="col">Item Name</th>
        <th scope="col">Item Price</th>
        <th scope="col">Quantity</th>
        
        </tr>
    </thead>
    <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key=> $value)
    {
        $total=$total+$value['Price'];
        echo "
        <tr>
        <td>1</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price]</td>
        <td><input type='number' min='1' value=$value[Quantity] max='10'></td>
        <td>
        <form action='createcart.php' method='POST'>
        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        </tr>
        ";
    }
 }
    ?>
    
        </tbody>
        </table>

</div>

<div class="col-lg-3">
<div class="border bg-light rounded p-4">
<h4>Total:</h4>
<h5 class="text-right">$<?php echo $total ?></h5><br>

<form action="">
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
    Cash On Delivery
    <label class="form-check-label" for="flexRadioDefault2">

    </label>
    </div>
    <br>
<button class="btn_buy"><a href="purchase.php">Buy Now</a></button>

</form>
</div>
</div>


</div>
</div>
</body>
</html>