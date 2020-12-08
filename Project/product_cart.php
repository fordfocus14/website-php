
<!DOCTYPE html>
<html>
<head>
<?php
include "config.php";
?>
<title></title>
</head>
<body>
    <div class="container">
        <div class="row">
        <h1>Add to Cart</h1><hr>
        <?php 
        $query="SELECT * FROM cart ORDER BY id ASC";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <div class="col-md-4">
        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">  
                <div style=border:1px solid #333; background-color:#f1f1f1;>
                <h4 class=text-info><?php echo $row["p_name"]; ?></h4>
                <h4 class=text-info><?php echo $row["quantity"]; ?></h4>
                <h4 class=text-danger>$<?php echo $row["price"]; ?></h4>
            
                </div>
        </form>
        </div>
        <?php
            }
        }
        ?>
        <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php
         if(!empty($_SESSION['shopping_cart']))
         {
             $total=0;
             foreach($_SESSION['shopping_cart'] as $keys =>$values)
             {
                
            ?>
            <tr>
                <td><?php echo $values["item_name"];?></td>
                <td><?php echo $values["item_quantity"];?></td>
                <td>$ <?php echo $values["item_price"];?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                <td><a href="product_cart.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                $total = $total +($values["quantity"] * $values["price"]);
             }
            
             ?>
             <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total,2);?></td>
                <td></td>
             </tr>
             <?php
         }
        ?>
        </table>
    </div>
        </div> 
    </div>

    

</body>
</html>