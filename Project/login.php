<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin</title>
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body>
  
<form class="box" action="database.php" method="post">
  <h1>HUMarket</h1>
  <h2>Login</h2>
  <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <input type="text" name="username" placeholder="Username" required autofocus>
  <input type="password" name="password" placeholder="Password" maxlength="10" required>
  <input type="submit" name="submit" value="َLogin">
  <div class="sign"><p>New Customer?<a href="SIGN_UP.php">Create an Account</a></p></div>
</form>
  </body>
</html>
