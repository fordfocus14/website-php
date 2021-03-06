<?php

session_start();

?>
<html>
  <head>
    <title>HUMARKET-Buy your best product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<style>
*
{
  margin: 0;
  padding: 0;
}
body{
  background-color: white;
  font-family:'Times New Roman', Times, serif ;
}
.top-nav-bar
{
  height:57px;
 top: 0;
 position:sticky ;
 background: #fff;
 margin-bottom: 20px;
 border-bottom:3px solid orangered;
 z-index: 2;

}
.logo{
  height: 45px;
  margin:5px 10px;
}
.form-control{
  margin-top: 9px;
  margin-left: 20px;
  border:1px solid orangered !important;
  border-top-left-radius: 20px !important;
  border-bottom-left-radius: 20px !important;
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
  box-shadow: none !important;
}
.form-control:hover
{
  border:1px solid black;
}

.input-group-text{
  background: orangered;
  border: 1px solid orangered;
  margin: 8.5px 10px 3px 0;
  border:1px solid orangered !important;
  border-top-left-radius: 0px !important;
  border-bottom-left-radius: 0px !important;
  border-top-right-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
  cursor: pointer;
}
.input-text
{
  background: white;
  border: 1px solid orangered;
  border-radius:7px;
}
.input-text:hover
{
  background: white;
  border: 1px solid black;
}
.search-box{
  display: inline-flex;
  width: 50%;
 
}
.fa-search
{
  color: #fff;
  

}
.menu-bar{
  width: 40%;
  height: 57px;
  float: right;
}
.menu-bar ul{
display:inline-flex;
float: right;

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
.fa-shopping-basket{
margin-right: 5px;
}
@media only screen and (max-width: 980px){
  .top-nav-bar{
    height: 118px;
    border-bottom: 0;
  }
  .search-box{
    width: 100%;
  }
  .menu-bar{
    width: 100%;
  }
  .menu-bar ul{
    margin: 10px 0;
    width: 100%;
  }
  .menu-bar ul li{
    height: 57px;
    width: 100%;
  }
}

/*-------------Side menu-----------*/
.side-menu{
  height: 79%;
  width: 15%;
  font-size: 14px;
  float: left;
  color:white;
  z-index: 2;
  background-color:orangered;
}
.side-menu ul{
  margin-left: 10px;
}
.side-menu ul li{
  list-style-type: none;
  font-weight: bold;
  margin-top: 10px;
  cursor:pointer;
}
.side-menu ul li:hover{
  color: orangered;
  background: black;
  
}
.side-menu ul li ul{
  display: none;
  z-index: 10;
  top: 77px;
}

.side-menu ul li:hover ul{
  display: block;
  height: 400px;
  margin-left: 14%;
  padding: 0 100px 10px 10px;
  position: fixed;
  background: #ececec;
  box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.4) ;

}
.fa-angle-right
{
  margin-top: 4px;
  margin-right: 8px;
  float: right;
}
.cat-col{
  color: white;
}
@media only screen and (max-width: 980px)
{
  .side-menu
  {
    width: 34%;
    z-index: 20;
    top:133px;
    position: fixed;
    font-size: 12px;
    
  }
  .side-menu ul li ul
  {
    top: 133px;

  }
  .side-menu ul li:hover ul
  {
    margin-left: 31%;

  }
  
}


/*---------------slider-------*/
.slider
{
  width: 85%;
  height:79%;
  margin-left: 15%;
  padding:0 10px;
}
.carousel
{
  box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
}
.carousel-indicators
{
  z-index: 1 !important;
}
.carousel-inner img
{
  height:99%;
}
@media only screen and (max-width: 980px)
{
  .slider
  {
    width:100%;
    margin-left: 0;
  }
}
.featured-categories
{
  margin: 50px 0;
}
.featured-categories img
{
  width: 100%;
  padding: 20px;
  transition: 1s;
  cursor: pointer;
}
.featured-categories img:hover
{
  transform: scale(1.1);
}
.title-box
{
  background: orangered;
  color: white;
  width: 180px; 
  padding: 4px 10px;
  height:40px ;
  margin-bottom:30px;
  display:flex;
}
.title-box h2
{
font-size:24px;
}
.title-box::after
{
  content: '';
  border-top:40px solid orangered ;
  border-right: 50px solid transparent;
  position:absolute;
  display: flex;
  margin-top: -4px;
  margin-left: 170px;
}
.product-top
{
   width: 100%;
}
.product-top:hover .overlay-right
{
  opacity: 1;
  margin-left: 5%;
  transition:0.5s;
}
.product-bottom .fa
{
  color:orangered;
  font-size: 10px;

}
.product-bottom h3
{
font-size: 20px;
font-weight: bold;
}
.product-bottom h5 
{
  font-size: 15px;
  padding-bottom: 10px;
}
.overlay-right
{
  display: block;
  opacity: 0;
  position: absolute;
  top: 10%;
  margin-left: 5px;
  width: 50px;

}
.overlay-right .fa {
  cursor: pointer;
  background-color: orangered;
  color: #000;
  height: 35px;
  width: 35px;
  font-size: 15px;
  padding: 7px;
  margin-top: 5%;
  margin-bottom: 5%;
}
.overlay-right .btn-secondary
{
  background: none !important;
  border: none !important;
  box-shadow:none !important;
}
.footer
{
  margin-top: 50px;
  background: orangered;
  color: white;
}
.footer h1
{
 font-size: 16px;
 margin: 25px 0;
}
.footer p
{
 font-size: 12px;
}
.app-logo img
{
  width: 50%;

}
.copyright
{
  margin-bottom:-80px ;
  text-align: center;
  font-size: 15px;
  padding-bottom: 20px;

}
.fa-fa-heart-o
{
color: white;
font-size: 10px;
}
.footer hr
{
  margin-top: 15px;
  background-color: white;
}
.footer .row .fa
{
padding-right: 20px;
font-size: 15px;
}
.cart
{
  width:100px;
  background-color:orangered;
  border-radius:2px;
  border:2px;
}
.cart:hover
{
  
  background-color:black;
  color:white;
}

.product-top img
{
   height:100px;
}
.hr
{
  background-color:orangered;
}
.hr:hover
{
  background-color:white;
}


</style>

    <body>
      <div class="top-nav-bar">
      <div class="search-box">
      <img src="images/IMG-20201004-WA0002.jpg" class="logo">
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
      </div>
      <div class="menu-bar">
      <ul>
          <li><a href="login.php"><i class="fa fa-user-circle"></i> logout</a></li>
        </ul>
        <ul>
          <li>
          <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
          <a href="view.php" ><i class="fa fa-shopping-basket"></i>Cart (<?php echo $count; ?>)</a></li>
        </ul>
        
        
      </div>
      </div>
      <section class="header"> 
        <div class="side-menu" id="side-menu" >
         <h4 class="cat-col">More Cartegories</h4>
          <ul>
           
            <li>Mobiles<i class="fa fa-angle-right"></i>
              <ul>
                <li><a href="iphones.php">Iphone</a></li>
                <li><a href="ANDROID1.php">Android</a></li>
              </ul>
            </li>
            <li>Computers<i class="fa fa-angle-right"></i>
              <ul>
                <li></li>
                <li><a href="laptop1.php">Laptop</a></li>
                <li><a href="SYSTEM.php">Desktop</a></li>
              </ul>
            </li>
            <li>Cloth<i class="fa fa-angle-right"></i>
              <ul>
                <li><a href="mencloth.php">Men Shirt</a></li>
                <li><a href="women.php">Women Dress</a></li>
              </ul>
            </li>
            <li>Books<i class="fa fa-angle-right"></i>
              <ul>
                <li><a href="BOOK.php">Computer Science- Books</a></li>
              </ul>
            </li>
           
          </ul>
        </div>
        <div class="slider">
          <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/stanislav-kondratiev-6pO3QFkk7hQ-unsplash.jpg" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img  src="images/campaign-creators-RSc6D7bO0fA-unsplash.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img  src="images/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img  src="images/angela-bailey-jlo7Bf4tUoY-unsplash.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img  src="images/christian-wiediger-WkfDrhxDMC8-unsplash.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img  src="images/fran-hogan-jXyzSLg1UZM-unsplash.jpg" class="d-block w-100">
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              <li data-target="#slider" data-slide-to="2"></li>
              <li data-target="#slider" data-slide-to="3"></li>
              <li data-target="#slider" data-slide-to="4"></li>
              <li data-target="#slider" data-slide-to="5"></li>
            </ol>
          </div>

        </div> 
      </section><br>
      
      
      <section class="on-sale" >
        <div class="container">
          <div class="title-box">
           <h2>Phones</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img name="image" src="images/iph1.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>
               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="Quantity" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Iphone</h3>
                <h3>$1000</h3>
                <input type="hidden" name="Item_Name" value="Iphone">
                <input type="hidden" name="Price" value="1000">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
             </form>
             
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/iph2.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="Quantity" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Iphone X Max</h3>
                <h5>$1900.00</h5>
                <input type="hidden" name="Item_Name" value="Iphone X Max">
                <input type="hidden" name="Price" value="1900">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>
            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/cat5.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="Quantity" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Tecno</h3>
                <h5>$1700.00</h5>
                <input type="hidden" name="Item_Name" value="Tecno">
                <input type="hidden" name="Price" value="1700">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>
            
            <div class="col-md-">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/iph4.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="BUY NOW">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td><br>
                  <td><input type="text" name="Quantity" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Iphone 7</h3>
                <h5>$470.00</h5>
                <input type="hidden" name="Item_Name" value="Iphone 7">
                <input type="hidden" name="Price" value="470">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </section><br><hr class="hr">
    
      <section class="on-sale">
        <div class="container">
          <div class="title-box">
           <h2>Laptops</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/cat8.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>hp-laptop</h3>
                <h5>$556.00</h5>
                <input type="hidden" name="Item_Name" value="hp-laptop">
                <input type="hidden" name="Price" value="556">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/cat9.jpg">
               <div class="overlay-right">
            
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Acer</h3>
                <h5>$530.00</h5>
                <input type="hidden" name="Item_Name" value="Acer">
                <input type="hidden" name="Price" value="530">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/cat10.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Mac</h3>
                <h5>$440.00</h5>
                <input type="hidden" name="Item_Name" value="Mac">
                <input type="hidden" name="Price" value="440">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/cat7.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Hp</h3>
                <h5>$400.00</h5>
                <input type="hidden" name="Item_Name" value="Hp">
                <input type="hidden" name="Price" value="400">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </section><br><hr class="hr">
      <section class="on-sale">
        <div class="container">
          <div class="title-box">
           <h2>Books</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/e1.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>ebook</h3>
                <h5>$10.00</h5>
                <input type="hidden" name="Item_Name" value="ebook">
                <input type="hidden" name="Price" value="10">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/b1.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Health System</h3>
                <h5>$13.00</h5>
                <input type="hidden" name="Item_Name" value="Health System">
                <input type="hidden" name="Price" value="13">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/e2.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Guide</h3>
                <h5>$17.00</h5>
                <input type="hidden" name="Item_Name" value="Guide">
                <input type="hidden" name="Price" value="17">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/b2.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>History</h3>
                <h5>$7.00</h5>
                <input type="hidden" name="Item_Name" value="History">
                <input type="hidden" name="Price" value="7">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

          </div>
        </div>
       
      </section><br><hr class="hr">

      <section class="on-sale">
        <div class="container">
          <div class="title-box">
           <h2>Cloth</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/c1.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Women Dress</h3>
                <h5>$50.00</h5>
                <input type="hidden" name="Item_Name" value="Women Dress">
                <input type="hidden" name="Price" value="50">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/s1.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Shirt</h3>
                <h5>$19.00</h5>
                <input type="hidden" name="Item_Name" value="Shirt">
                <input type="hidden" name="Price" value="19">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/c2.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Long Dress</h3>
                <h5>$17.00</h5>
                <input type="hidden" name="Item_Name" value="Long Dress">
                <input type="hidden" name="Price" value="17">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </from>

            
            <div class="col-md-3">
            <form action="createcart.php" method="post">
              <div class="product-top">
               <img src="images/s2.jpg">
               <div class="overlay-right">
               
               <button type="button" class="btn btn-secondary" title="BUY NOW" >
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <tbody>
                <tr>
                  <td><i>Quantity</i></td>
                  <td><input type="text" name="qty1" class="input-text"></td>
              </tbody>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3> Shirt</h3>
                <h5>$40.00</h5>
                <input type="hidden" name="Item_Name" value="Shirt">
                <input type="hidden" name="Price" value="40">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </section><br><hr class="hr">

   <section class="footer">
   <div class="container tex-center">
     <div class="row">
     <div class="col-md-3">
        <h1>
          Useful Links
        </h1>
        <P>Privacy Policy</P>
        <P>Terms of Use</P>
        <P>Return Policy</P>
        <P>Discount Coupons</P>
     </div>
     
     <div class="col-md-3">
        <h1>
          Company
        </h1>
        <P>About us</P>
        <P>Contact</P>
        <P>Career</P>
        <P>Affiliate</P>
     </div>

     <div class="col-md-3">
      <h1>
        Fellow Us On
      </h1>
      <P><i class="fa fa-facebook-official"></i> Facebook</P>
      <P><i class="fa fa-youtube-play"></i> Youtube</P>
      <P><i class="fa fa-linkedin"></i> Linkedin</P>
      <P><i class="fa fa-twitter"></i> Twitter</P>
   </div>

   <div class="col-md-3">
    <h1>
      Download App
    </h1>
    <div class="app-logo"> <img src="images/app.jpg"></div>
   
    </div>

     </div>
   <hr>
   <p class="copyright"> Made with <i class="fa fa-heart-o"></i> By Roland Chermeh</p>
   </div>
   </section>


    </body>
  </head>
</html>