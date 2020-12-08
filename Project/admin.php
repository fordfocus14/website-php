<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<style>
.menu-bar{
  width: 20%;
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

.table-responsive 
{
    border: 1px solid orangered;
}
.background-class
{
    background:orangered;
    color:white;
}
.hr-class
{
    color:orangered;
}
.tr-class
{
    border: 1px solid orangered;
}
</style>
<body class="background-class">
<div class="menu-bar">
      <ul>
          <li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
        </ul>
</div>

<h3>ADMINISTRATION</h3><hr class="hr-class"> 
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr class="tr-class">
            <th width="15%">name</th>
            <th width="15%">Username</th>
            <th width="50%">Email</th>
            <th width="15%">Phone</th>
            <th width="15%">Address</th>
            <th width="15%">Password</th>
            <th width="15%">Items</th>
            
            
        </div>
        
        </tr>
        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                <h4 class=text-info><?php echo $row["p_name"]; ?></h4>
                </div>
        </form>
<?php
$conn=mysqli_connect("localhost","root","","registration");

 $sql="SELECT f_name, username, email, phone, address1, pass FROM register";
 $results=mysqli_query($conn,$sql);

 if (mysqli_num_rows($results)>0)
 {
     while($row=mysqli_fetch_array($results))
     {
        ?>
        <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td>
        <?php
        if(!empty($_SESSION['cart']))
         {
             foreach($_SESSION['cart'] as $keys =>$values)
             {
                 ?>
                 
        <?php echo $values["item_name"];?>
        </td>
        
       
         <?php
             }
            }
     }
 }
 
 mysqli_close($conn);
?>
 </tr>
</table>
</body>
</html>