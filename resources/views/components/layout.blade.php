<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GMi Chaft</title>
  </head>
  
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");

    body{
      
      scroll-behavior: smooth;
      
    }
    header {
      
      background-color: white;
      padding: 10px;
      border: black;
      filter: drop-shadow(0px 4px 10px rgba(0, 0, 0, 0.5));
      position: sticky;
  top: 0;
  z-index: 100;
    }

    .navbar {
    
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar-left,
    .navbar-right {
      display: flex;
    }
    
    .navbar-logo {
      margin-right: auto;
      margin-left: auto;
    }

    .navbar-logo img {
      height: 100px;

      
    }

    .navbar-links {
      list-style-type: none;
      margin: 0;
      padding: 20px;
      display: flex;
      margin-right: 10px;
    }

    .navbar-links  li {
      margin-right: 80%; /* Adjust the spacing as needed */
    }
    .navbar-links li:last-child {
  margin-right: 0; /* Remove right margin from the last item */
}
.navbar-links li a:hover {
    background-color: #8EDAD8;
    color: white;
    border-radius: 10px;
  }

    .navbar-links li a {
      text-decoration: none;
      color: #333;
      background-color: transparent;
    }
    .navbar-links li:not(:last-child) {
  margin-right: 40px; /* Adjust the spacing as needed */
}

.container {
  background-color: #d1eaf0;
  padding: 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.container h1 {
  font-family: "Roboto Serif";
  font-style: normal;
  font-weight: 600;
  font-size: 5rem;
  line-height: 75px;
  color: #000000;
  margin-bottom: 20px; 
}
    .cart-link {
  display: flex;
  align-items: center;
}

.cart-logo {
  height: 30px;
  margin-right: 10px;
  margin-top: 10px;
}
.search-box {
  display: flex;
  
  margin-top: 20px; /* Adjust the spacing as needed */
  margin-left: 8px;
  flex-direction: column;
}

.search-box input {
  padding: 10px;
  width: 800px;
  color: black;
  
}

input[type="search"]{
    padding:10px 15px 10px 50px;
    font-size:36px;
    color:black;
/*removing boder from search box*/
    border:none;
/*defining background image as a search symbol*/
    background-image:url(data:image/png;base64,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);
    background-repeat:no-repeat;

-webkit-background-size:35px 35px;
   -moz-background-size:35px 35px;
     -o-background-size:35px 35px;
        background-size:35px 35px;

    background-position:8px 12px;

    background-color:white;
}

input[type="search"]::-webkit-input-placeholder{
    color:black;
}
input[type="search"]:-moz-placeholder { 
   color: #b1e0de;
}
input[type="search"]::-moz-placeholder {  
   color: #b1e0de;
}
input[type="search"]:-ms-input-placeholder {  
   color: #b1e0de;
}
a{
    display:block;

    text-decoration:none; 
    color:black;
    font-size:30px;
    background-color:#ace5e2;
    padding:10px;
}
.suggestions ul{

    list-style:none;

    padding: 0px;;
     width:465px;
     align-items: center;
     justify-content: center;
     
     
}
ul li{
    margin-bottom:10px;
}

.searchbox ul li a:hover{
    color:#b23b61;
    background:#ecd1da;
  
}

.searchbox ul li:hover{

-webkit-transform:translateX(20px);
   -moz-transform:translateX(20px);
    -ms-transform:translateX(20px);
     -o-transform:translateX(20px);
        transform:translateX(20px);
          
}

.suggestions li{
    overflow: hidden;
  height: 0;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  align-items: center;
  justify-content: center;
}
input[type="search"]:focus + .suggestions li {
    height:63px;
}

.byline{
  text-align:center;
  font-size:18px;
}
.byline a{
  text-decoration:none;
  color: black;
}




h2 {
  position: relative;
  color: #000;
  font-family: "Mate SC";
  font-size: 5rem;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  text-align: center;
}

h2:before {
  content: "";
  display: block;
  width: 30%;
  height: 1.4375rem;
  background: #D1EAF0;
  left: 0;
  top: 40%;
  border-radius: 1.375rem;
  position: absolute;
  flex-shrink: 1;
}

h2:after {
  content: "";
  display: block;
  width: 30%;
  height: 1.4375rem;
  background: #D1EAF0;
  right: 0;
  top: 40%;
  border-radius: 1.375rem;
  position: absolute;
  flex-shrink: 1;
}


      .owl-carousel .owl-stage {
    display: flex;
  }

  .owl-carousel .owl-item {
    flex: 0 0 auto;
    margin-right: 15px; /* Adjust the spacing as desired */
  }

  span {
    font-size: 70px;
    position: relative;
    top: -5px;
  }

  .owl-carousel .item {
    border-radius: 20px;
    overflow: hidden;
    position: relative;
  }

  .owl-carousel .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .owl-carousel .item .image-text {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  background-color: #D1EAF0;
  color: black;
  text-align: center;
  font-size: 18px;
}

  
  .owl-carousel .owl-item .item-inner {
    height: 200px; 
  }

  .about{
   
   margin-top: 10rem;
   background: rgba(209, 234, 240, 1);
   position: relative;
   padding: 120px;
   height: 60vh;
     }

.about h4{
 position: relative;
 text-align: center;
 font-family: "Montserrat Thin";
 font-style: normal;
 font-weight: 600;
 font-size: 3.5rem;
 bottom: 35rem;
 letter-spacing: 2px;
 left: 12rem;
 
}


 .logo{
   position: relative;
align-items: center;
justify-content: center;

}

.h5 a{
	font-family: "Montserrat Thin";
	font-weight: 100;
  font-size: 20px;
	text-decoration:none;
 width: 100px;
  height: 20px;
  
}
.btn_style_9 {
	display: inline-block;
  width: 20%;
	padding: 10px 20px;
	background: #069187;
	border: 2px solid #069187;
	color: #fff;
	text-transform: uppercase;
	position: relative;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
  font-size: 4px;
  left: 48%;
  bottom: 10rem;
}
.btn_style_9 span {
	position: relative;
	display: inline-block;
	animation: button-roll-out .5s forwards cubic-bezier(.165,.84,.44,1);
}
.btn_style_9:hover span {
	animation: button-roll-over .5s forwards cubic-bezier(.165,.84,.44,1);
}
.btn_style_9::before {
	content: " ";
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	transform-origin: bottom left;
	transition: transform .5s cubic-bezier(.77,0,.175,1);
	background-color: #fff;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
}
.btn_style_9:hover::before {
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
}
.btn_style_9:hover{
	color: #069187;
}
@keyframes button-roll-over{
	35%{transform:translateY(10px)}
	35.001%{color:#069187;transform:translateY(-20px)}
	100%{color:#069187;transform:translateY(0)}
}

  </style>


  
  <body>

    <header>
      <nav class="navbar">
        <div class="navbar-left">
          <ul class="navbar-links">
            <li style="font-size: 20px"><a href="homepage.html">Home</a></li>
            <li style="font-size: 20px"><a href="aboutus.html">About</a></li>
            <li style="font-size: 20px"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="navbar-logo">
          <img src="images/logo.png" alt="Logo" />
        </div>
        <div class="navbar-right">
          <ul class="navbar-links">
            <li class="cart-link"></li>
            @auth
            <img class="cart-logo" src="images/cart.png" alt="Cart" />
            <li><a href="#">Cart</a></li>
           </li>
           <li><a href="/profile">Welcome {{auth()->user()->name}}</a></li>
           @else
            <li><a href="/register">Register / Login</a></li>
            @endauth
          </ul>
        </div>
      </nav>
    </header>
    
    <div class="container">
      <h1>Anything but ordinary</h1>
      
                  </div>
              <h2>CATEGORIES</h2>

              <div class="owl-slider">
                <div id="carousel" class="owl-carousel">
                  <div class="item">
                    <img src="images/gadgets.jpeg" alt="1000X1000">
                    <div class="image-text" style="font-size: 1.5rem;">Mobile</div>
                  </div>
                  <div class="item">
                    <img src="images/outfits.jpeg" alt="">
                    <div class="image-text" style="font-size: 1.5rem;">Outfits</div>
                  </div>
                  <div class="item">
                    <img src="images/fashion.jpeg" alt="">
                    <div class="image-text" style="font-size: 1.5rem;">Fashion & Accesories</div>
                  </div>
                  <div class="item">
                    <img src="images/automotive.jpeg" alt="">
                    <div class="image-text" style="font-size: 1.5rem;">Automotive</div>
                  </div>
                    <div class="item">
                    <img src="images/hobbies.jpeg" alt="">
                    <div class="image-text" style="font-size: 1.5rem;">Hobbies</div>
                  </div>
                  <div class="item">
                    <img src="images/services.jpeg" alt="">
                    <div class="image-text" style="font-size: 1.5rem;">Services</div>
                  </div>
                  
              </div>
                </div>
                    <main>
                        {{$slot}}
                    </main>
                </div>
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                <script>
                  jQuery(document).ready(function($) {
                    $("#carousel").owlCarousel({
                      loop: true,
                      margin: 20,
                      responsiveClass: true,
                      autoHeight: true,
                      autoplay: false,
                      nav: false, 
                      dots: false, 
                      navText: [], 
                      responsive: {
                        0: {
                          items: 1
                        },
                        600: {
                          items: 3
                        },
                        1024: {
                          items: 4
                        },
                        1366: {
                          items: 4
                        }
                      }
                    });
                  });
                </script>
    </body>  

    <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Product</a>
  </footer>
  
</html> 
