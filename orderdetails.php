<?php
// Start the session
session_start();
include 'database.php';



if (isset($_POST['btn']))
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $billing_address = $_POST['billing_address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cardholder_name = $_POST['cardholder_name'];
    $card_number = $_POST['card_number'];
    $shipping_address = $_POST['shipping_address'];

    $sql="INSERT INTO orders (full_name, email, billing_address, city, state, zip, cardholder_name, card_number, shipping_address) VALUES ('$full_name', '$email', '$billing_address', '$city', '$state', '$zip', '$cardholder_name', '$card_number', '$shipping_address')";

   
    if(mysqli_query($con,$sql)){
        $_SESSION["user"] = $full_name;
        echo"<script>alert('Order Placed')</script>";
        echo '<script>window.location.href="invoice.php";</script>';
    }
    else{
        echo"error:".mysqli_error($con);
    }
    
    mysqli_close($con);
    }
    ?>
