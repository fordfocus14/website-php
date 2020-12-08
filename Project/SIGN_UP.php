<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َRegister</title>
  </head>



  <style>
  
body{
 
  margin: 0;
  padding: 0;
  font-family: 'Times New Roman', Times, serif;
  background:white;
  background-image: url(female-friends-out-shopping-together_53876-25041.jpg);
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
<form class="form" action="reg_database.php" method="post">
<h1>welcome to HUMarket</h1>
<h2>Registration</h2>
<p><strong> Fill this form to create an account</strong> </p>
<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  <?php if (isset($_GET['success'])) { ?>
    <p class="success"><?php echo $_GET['success']; ?></p>
  <?php } ?>

  <?php if (isset($_GET['name'])) { ?>
    <input type="text"
    name="name" 
    placeholder="Name" 
    value=<?php echo $_GET['name']; ?>>
  <?php } else {?>
         <input type="text" 
         name="name" 
         placeholder="Name" required autofocus>
      <?php } ?>

      <?php if (isset($_GET['username'])) { ?>
    <input type="text"
    name="username" 
    placeholder="Username" 
    value=<?php echo $_GET['username']; ?>>
  <?php } else {?>
         <input type="text" 
         name="username" 
         placeholder="Username" required autofocus>
      <?php } ?>

<input type="varchar" name="email" placeholder="Email" required>
<input type="varchar" name="phone" placeholder="Phone Number" required>
<input type="varchar" name="address" placeholder="Address" required>
<input type="checkbox" name="gender" value="male">Male<input type="checkbox" name="gender" value="male">Female<br>
<input type="password" name="password" placeholder="Password" maxlength="20" required>
    
<input type="submit" name= "submit" value="َsignup">
    <div class="sign"><p>Already have an Account?<a href="login.php">Sign in</a></p></div>
</form>
  </body>
</html>