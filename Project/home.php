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
  background-color: #f1f3f4;
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
  height: 40px;
  margin:5px 10px;
}
.form-control{
  margin-top: 9px;
  margin-left: 30px;
  border:1px solid orangered !important;
  border-top-left-radius: 20px !important;
  border-bottom-left-radius: 20px !important;
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
  box-shadow: none !important;
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
.search-box{
  display: inline-flex;
  width: 60%;
 
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
  margin-left: 0;
  width: 70px;

}
.overlay-right .fa {
  cursor: pointer;
  background-color: orangered;
  color: #000;
  height: 35px;
  width: 35px;
  font-size: 20px;
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
          <li><a href="SIGN_UP.php">Sign up</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      </div>
      <section class="header"> 
        <div class="side-menu" id="side-menu" >
         <h4 class="cat-col">More Cartegories</h4>
          <ul>
           
            <li>Mobiles<i class="fa fa-angle-right"></i>
              <ul>
                <li>Iphone</li>
                <li>Android</li>
              </ul>
            </li>
            <li>Computers<i class="fa fa-angle-right"></i>
              <ul>
                <li></li>
                <li>Laptop</li>
                <li>Desktop</li>
              </ul>
            </li>
            <li>Cloth<i class="fa fa-angle-right"></i>
              <ul>
                <li>Men</li>
                <li>Women</li>
              </ul>
            </li>
            <li>Books<i class="fa fa-angle-right"></i>
              <ul>
                <li>Science</li>
                <li>History</li>
                <li>E-books</li>
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
      <section class="on-sale">
        <div class="container">
          <div class="title-box">
           <h2>Phones</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat6.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Shirt</h3>
                <h5>$10.00</h5>
                
              </div>
            </div>

            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat5.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Tecno</h3>
                <h5>$190.00</h5>
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat4.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Hotwave</h3>
                <h5>$170.00</h5>
                
              </div>
            </div>

            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat7.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Laptop</h3>
                <h5>$470.00</h5>
                
              </div>
            </div>

          </div>
        </div>
       
      </section>

      <section class="on-sale">
        <div class="container">
          <div class="title-box">
           <h2>Laptops</h2>
          </div>
          <div class=" row">
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat8.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>hp-laptop</h3>
                <h5>$556.00</h5>
                
              </div>
            </div>

            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat9.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Acer</h3>
                <h5>$530.00</h5>
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat10.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Mac</h3>
                <h5>$440.00</h5>
                
              </div>
            </div>

            <div class="col-md-3">
              <div class="product-top">
               <img src="images/cat7.jpg">
               <div class="overlay-right">
               <button type="button" class="btn btn-secondary" title="Quick Shop">
                 <i class="fa fa-eye"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to wish list">
                 <i class="fa fa-heart-o"></i>
                </button>
               <button type="button" class="btn btn-secondary" title="Add to Cart">
                 <i class="fa fa-shopping-cart"></i>
                </button>

               </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <h3>Hp</h3>
                <h5>$400.00</h5>
                
              </div>
            </div>

          </div>
        </div>
       
      </section>

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