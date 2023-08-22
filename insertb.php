<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Bites</title>
    <link rel="stylesheet" href="styleinsertb.css">
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
                </ul>
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

<body>
<section class="reserve">
<div class="formbold-main-wrapper">
<img style="border-radius:15px"src="img\reservetableimg.jpg"/>
  <div class="formbold-form-wrapper">
  <div class="text">
        <h2>Reserve Table</h2>
        <h5><span style="color:darkgoldenrod";>Welcome to Flavour Bites!!!</span><br>
        Book your table online today</h5>
    <form action="process.php" method="post">
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 ">
            <label for="fName" class="formbold-form-label"> First Name </label>
            <input type="text" name="fName" id="fName" placeholder="First Name" class="formbold-form-input" required/>
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="lName" class="formbold-form-label"> Last Name </label>
            <input type="text" name="lName" id="lName" placeholder="Last Name" class="formbold-form-input" required/>
          </div>
        </div>
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          How many guest are you bringing?
        </label>
        <input type="number" name="guest" id="guest" placeholder="5" class="formbold-form-input" required/>
      </div>

      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input type="date" name="date" id="date" class="formbold-form-input" required/>
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Time </label>
            <input type="time" name="time" id="time" class="formbold-form-input" required/>
          </div>
        </div>
      </div>

      <div class="flex formbold-mb-5">
        <div class="flex">
          <label>Anyone with mobility issues?</label>
          <input type="radio" name="radio1" id="radioButton1" class="formbold-radio" value="Yes" required  />
          <label for="radioButton1" class="formbold-radio-label"> Yes </label>
        </div>
        <div class="flex">
          <input type="radio" name="radio1" id="radioButton2" class="formbold-radio" value="No" required/>
          <label for="radioButton2" class="formbold-radio-label"> No </label>
        </div>
      </div>

      <div>
        <button margin-top="700px" margin-left="600px"class="formbold-btn" name="submit">Submit</button>
        
      </div>
    </form>
    <!--<a href="display.php">
          <button style="position:absolute;top:490px;left:1000px"class="formbold-btn" name="check">Check</button>
        </a>-->
  </div>
</div>
</section>
</body>
</html>