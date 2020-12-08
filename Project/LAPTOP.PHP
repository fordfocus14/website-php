
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
  border-radius:5px;
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





/*---------------slider-------*/
.slider
{
  width: 100%;
  height:79%;
  margin-left: 0%;
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
          <li><a href="view.php"><i class="fa fa-shopping-basket"></i>Cart</a></li>
        </ul>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
        </ul>
        
        
      </div>
      </div>
      
        <div class="slider">
          <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/AD1.jpg" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img  src="images/AD2.jpg" class="d-block w-100">
              </div>
              
              
            <ol class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
            </ol>
          </div>

        </div> 
      </section><br>
      
      <form action="insertcart.php" method="post">
      <section class="on-sale" >
        <div class="container">
          <div class="title-box">
           <h2>Laptops</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
              <div class="product-top">
               <img name="image" src="images/AD3.jpg">
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
                <h3><i>Iphone</i></h3>
                <h3><i>$1000</i></h3>
                <input type="hidden" name="name" value="Iphone">
                <input type="hidden" name="price" value="1000">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/AD4.jpg">
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
                <h3>Iphone X Max</h3>
                <h5>$1900.00</h5>
                <input type="hidden" name="name" value="Iphone X Max">
                <input type="hidden" name="price" value="1900">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/AD5.jpg">
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
                <h3>Tecno</h3>
                <h5>$1700.00</h5>
                <input type="hidden" name="name" value="Tecno">
                <input type="hidden" name="price" value="1700">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>

            <div class="col-md-3">
              <div class="product-top">
               <img src="images/AD6.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="BUY NOW">
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
                <h3>Iphone 7</h3>
                <h5>$470.00</h5>
                <input type="hidden" name="name" value="Iphone 7">
                <input type="hidden" name="price" value="470">
                <input type="submit" value="Add to Cart" name="addCart" class="cart">
              </div>
            </div>

          </div>
        </div>
       
      </section>
      
    
      
</form>
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