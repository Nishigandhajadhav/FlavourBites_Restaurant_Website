<?php
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table</title>
    <link rel="stylesheet" href="styleinsertbup.css">
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
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-search"></i></a>
                      </li>
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

    

    </style>
</head>
<body>
<section class="reserve">
<div class="formbold-main-wrapper">
<img style="border-radius:15px"src="img\reservetableimg.jpg"/>
  <div class="formbold-form-wrapper">
  <div class="text">
        <h2>Update Table Reservation</h2>
        

        <?php
        if(isset($_GET['id']))
        {
          $student_id=mysqli_real_escape_string($con,$_GET['id']);
          $query="select * from booktable where id='$student_id'";
          $query_run=mysqli_query($con,$query);
          
          if (mysqli_num_rows($query_run)>0)
          {
            $student=mysqli_fetch_array($query_run);
            ?>

           
            <form action="processupdate.php" method="post">
                <input type="hidden" name="student_id"value="<?=$student['id'];?>">
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 ">
            <label for="fName" class="formbold-form-label"> First Name </label>
            <input type="text" name="fName" id="fName" value="<?=$student['fname'];?>"placeholder="First Name" class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="lName" class="formbold-form-label"> Last Name </label>
            <input type="text" name="lName" id="lName" value="<?=$student['lname'];?>"placeholder="Last Name" class="formbold-form-input" />
          </div>
        </div>
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          How many guest are you bringing?
        </label>
        <input type="number" name="guest" id="guest" value="<?=$student['guest'];?>" placeholder="5" class="formbold-form-input" />
      </div>

      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input type="date" name="date" id="date" value="<?=$student['date'];?>"class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Time </label>
            <input type="time" name="time" id="time" value="<?=$student['time'];?>"class="formbold-form-input" />
          </div>
        </div>
      </div>

      <div class="flex formbold-mb-5">
        <div class="flex">
        <label>Anyone with mobility issues?</label>
          <input type="radio" name="radio1" id="radioButton1" value="Yes"<?=$student['radio1'];?>class="formbold-radio" />
          <label for="radioButton1" class="formbold-radio-label"> Yes </label>
        </div>
        <div class="flex">
          <input type="radio" name="radio1" id="radioButton2" value="No"<?=$student['radio1'];?>class="formbold-radio" />
          <label for="radioButton2" class="formbold-radio-label"> No </label>
        </div>
      </div>

      <div>
        <button class="formbold-btn" name="update">Update</button>
        
      </div>
    </form>
    
            <?php
          }
          else{
            echo"<h4>No such record</h4>";
          }
        }
        ?>
  </div>
</div>
</section>
</body>
</html>