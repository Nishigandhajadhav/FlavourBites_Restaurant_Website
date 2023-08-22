<?php
include 'database.php';
if(isset($_POST['submit'])){
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $guest=$_POST['guest'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $radio1=$_POST['radio1'];



$sql="insert into booktable(fname,lname,guest,date,time,radio1) 
values('$fName','$lName','$guest','$date','$time','$radio1')";

if(mysqli_query($con,$sql)){
    echo"<script>alert('table reservation successful')</script>";
    echo"<script>window.open('display.php','_self')</script>";
}
else{
    echo"error:".mysqli_error($con);
}

mysqli_close($con);
}
?>
