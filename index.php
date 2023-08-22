<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu_Item</title>
    <link rel="stylesheet" href="style.css">
</head>
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
<body class="">
    <?php
    include ('database.php');
    $sql1 = "select * from `cart`";
    $result=mysqli_query($con,$sql1);
    $cont=mysqli_num_rows($result);
    ?>
    
    <div class="container">
        <header>
            <h1>Your Shopping Cart</h1>
            <div class="shopping">
                <a href="cart.php">
                    <img src="image/shopping.jpg">
                    <span class="quantity"><?php echo $cont ?></span>
                </a>
            </div>
        </header>

        <div class="list">
        <?php
            $res = mysqli_query($con,"select * from products");
            $i = 1;
            while($row = mysqli_fetch_array($res))
                    { ?> 
                    <div class="item">
                        <img src="image/<?php echo $row['img']?>">
                        <div class="title"><?php echo $row['name']?></div>
                        <div class="price"><?php echo $row['oprise']?></div>
                        <form  method="POST" enctype="multipart/form-data">
                        <button  name="add_<?php echo $row['id']?>">Add To Card</button>
                    </div>
                    </form>
                    <?php 
                    if(isset($_POST['add_'.$row['id']]))
                        {	
                        $pid=$row['id'];

                        $sql="SELECT * from cart where product_id='".$pid."' ";
                        $result=mysqli_query($con,$sql);
                        $cnt=mysqli_num_rows($result); 
                        //echo $sql;
                        if ($cnt !== 0) {
                            // Product already in cart, increase quantity
                            $row = mysqli_fetch_array($result);
                            $newQuantity = $row['quantity'] + 1;
                            $updateSql = "UPDATE cart SET quantity = $newQuantity WHERE product_id = $pid";
                            mysqli_query($con, $updateSql);
                            echo "<script> alert('Product already in cart quantity increased');</script>";
                        }
                            else{	
                            $quantity=1;
                            $que="insert into `cart` SET `product_id`='".$pid."',`quantity`='".$quantity."'";
                            mysqli_query($con,$que);
                            // echo $que;
                            echo "<script> alert('Added Successfully To the Cart....');</script>";
                            echo '<script>window.location.href="index.php";</script>';
                            }
                        }
                    }
                    ?>
        </div>
    </div>
   <div class="card">
  <h1>Card</h1>
  <ul class="listCard"></ul>
  <div class="checkOut">
    <div class="total">Total : 0</div>
    <!-- <button class="btn" onclick="window.location.href='checkout.php'">  -->
    <button class="btn" onclick=insertOrder()>

      Pay </button>
    <div class="closeShopping">Close</div>
  </div>
</div>

</body>
</html>