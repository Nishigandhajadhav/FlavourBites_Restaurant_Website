
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Bites</title>
    <link rel="stylesheet" href="stylehome.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  />

</head>
<body>
    <header>
        <div class="hedbg">
        <div class=" row mar">
            <div class="logo active">
                <p ><font size="6" face="Freestyle Script" color="#FDBD01"><b>Flavour Bites</b></font><p>
            </div>
            <nav class="nav row">
                <ul class="nav__list nav__list__primary--list">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Order Now</a></li>
                    <li class="nav-item"><a class="nav-link " href="insertb.php">Book Table</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                    <ul class="nav__list nav__list__secondary--list">
                    
                </ul>
            </nav>
        </div>
    </div>
    </header>
    <section class="conbg">
    <div class="container">
      <p><font size="4" face="Arial" color="#FFFFFF"><b>Welcome to Flavour Bites<b><br>
         Flavours for Royality!</p>
  </div>
  <!-- form -->


  <div class="search container">
    <form action="search.php" method="POST">
      <input class="search" type="text" placeholder="Menu.." name="search_value">
      <button class="search" type="submit" name="search_btn">
        <i class="fa fa-search"></i>
      </button>
    </form>
    </div>


    <div class="search container">
      <form >
      
    </form>
    </div>
  </section>
    <!-- form ends here -->



    <section class="guests">
      <div class="container row color">
        <div class="slogans ">
        <div class="guestst">
          <h1>Unexpeted Guests? <br>
          NO Time To Cook FOOD? <br>
          Then Why Are You Watiing For?<br>
          Order Online Now !!!
          </h1> 
          <h1> <span>
            Upto 50% Discount On Your <br>
            First Order!!! </span>
          </h1>
        </div>
     
    </section>
<!-- guests ends here -->
<!-- food images stats here -->
<section class="eat">
  <div class="container">
    <p><span>order online now</span></p>
    <h1 class="heading">Our Speciality </h1>
    <nav class="nav row">
      <ul class="nav__list nav__list__primary--list">
          <li class="nav-item"><a class="nav-link" href="#">BreakFast</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Lunch</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Dinner</a></li>
          <li class="nav-item"><a class="nav-link " href="#">Desert</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shake</a></li>
      </ul>
      </nav>
      <div class="eat-images">
        <img class="fo" src="img/1.jpg" alt="">
        <img class="fo" src="img/2.jpg" alt="">
        <img class="fo" src="img/3.jpg" alt="">
        <img class="fo" src="img/4.jpg" alt="">
        <img class="fo" src="img/5.jpg" alt="">
        <img class="fo" src="img/6.jpg" alt="">
        <img class="fo" src="img/7.jpg" alt="">
        <img class="fo" src="img/8.jpg" alt="">
      </div>
  </div>
</section>
<!-- food images ends here -->
<section class="order">
  <div class="container row">
    <div class="order-one">
      <img src="img/one.png" alt="">
      <h2>No Minimum Order</h2>
      <p>Order in for yourself or for the group, with no restrictions on order value</p>
  </div>
  <div class="order-one">
    <img src="img/two.png" alt="">
    <h2>Live Order Teacking</h2>
    <p>Know where your order s at all times, from the restaurant to your doorstep</p>
</div>
<div class="order-one">
  <img src="img/three.png" alt="">
  <h2>Lightning-Fast Delivery</h2>
  <p>Experience Flavour Bites superfast delivery for food delivered fresh & on time.</p>
</div>
</section>
<!-- Order ends here -->
<section class="playstore">
  <div class="container bg row">
    <div class="alikad">
      <h1><span>Restraunt in Your Pocket</span></h1>
      <p  style="color:black";>Order from restraunt & track on the go, with the all-new FOODIE app.</p>
  <div class="row">
      <img class="appi" src="img/playstore.png" alt="">
      <img class="appi" src="img/applestore.png" alt="">
    </div>
    </div>
    <div class="palikad">
      <div class="app">
        <img class="mobi" src="img/four.png" alt="">
        <img class="mobi" src="img/five.png" alt="">
      </div>
    </div>
  </div>
</section>
<!-- play store ends here -->

<div class="social_links container">
  <h2 style="color:salmon";>SOCIAL</h2>
  <a href="http://www.instagram.com"><img  class="so" src="img/instagram-logo.svg" ></a>
  <a href="#"><img src="" alt=""><img class="so" src="img/twitter-logo.svg" alt=""></a>
  <a href="#"><img class="so" src="img/linkedin-logo.svg" alt=""></a>
</div> 

</body>
</html>
