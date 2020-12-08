<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َPayment</title>
  </head>



  <style>
  
body{
 
  margin: 0;
  padding: 0;
  font-family: 'Times New Roman', Times, serif;
  background:white;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
}
.form{
  width: 500px;
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: white;
  text-align: center;
  border: 2px solid orangered;
  opacity: 0.7;
  
  
}
.form h1{
  color: orangered;
  text-transform: uppercase;
  font-weight: 500;
}
.form h2{
  color: orangered;
  text-transform: uppercase;
  font-weight: 100;
}
.form input[type = "text"],.form input[type = "password"],.form input[type = "varchar"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid orangered;
  padding: 9px 20px;
  width: 100px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}

.form input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid orangered;
  padding: 14px 40px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.form input[type = "text"]:focus,.form input[type = "password"]:focus,.form input[type = "varchar"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.form input[type = "submit"]:hover{
  background: #2ecc71;
}
.sign{
    text-decoration-color: orangered;
}
.txt{
text-decoration-color: orangered;
}
.error
{
    background:#F2DEDE;
    color:#A94442;
    padding:5px;
    width:80%;
    margin:10px auto;
}
.success
{
    background:#D4EDDA;
    color:#40754C;
    padding:5px;
    width:80%;
    margin:10px auto;
}
  </style>

<body>
<form class="form" action="payment.php" method="post">
<h1>Payment</h1>

<p><strong> Fill in Credit Card Details</strong> </p>
<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  <?php if (isset($_GET['success'])) { ?>
    <p class="success"><?php echo $_GET['success']; ?></p>
  <?php } ?>

  <?php if (isset($_GET['name'])) { ?>
    <input type="text"
    name="name" 
    placeholder="Card Holder Name" 
    value=<?php echo $_GET['name']; ?>>
  <?php } else {?>
         <input type="text" 
         name="name" 
         placeholder="Card Holder Name" required autofocus>
      <?php } ?>

      <?php if (isset($_GET['Card Number'])) { ?>
    <input type="text"
    name="card" 
    placeholder="Card Number" 
    value=<?php echo $_GET['card']; ?>>
  <?php } else {?>
         <input type="text" 
         name="card" 
         placeholder="Card Number" maxlength="16" required autofocus>
      <?php } ?>

<input type="varchar" name="expiry" placeholder="Expiry Date" maxlength="5" required>
<input type="varchar" name="cvv" placeholder="cvv" maxlength="3" required>
<input type="varchar" name="bill" placeholder="Billing Address" maxlength="20" required>
<?php
    $total=0;
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key=> $value)
    {
        $total=$total+$value['Price'];
    }
 }
    ?>

Total Amount:<h4 class="text-right">$<?php echo $total ?></h4>
<input type="submit" name= "submit" value="َBUY">
<button class="btn btn-primary"><a href="view.php">Cancel</a></button>
    
</form>
  </body>
</html>