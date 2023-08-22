<?php
include 'database.php';

if(isset($_POST['update'])){
    $student_id=mysqli_real_escape_string($con,$_POST['student_id']);
    $fName=mysqli_real_escape_string($con,$_POST['fName']);
    $lName=mysqli_real_escape_string($con,$_POST['lName']);
    $guest=mysqli_real_escape_string($con,$_POST['guest']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $time=mysqli_real_escape_string($con,$_POST['time']);
    $radio1=mysqli_real_escape_string($con,$_POST['radio1']);

$sql="UPDATE booktable SET fname='$fName', lname='$lName', guest='$guest', date='$date', time='$time', radio1='$radio1' WHERE id='$student_id'";

$data=mysqli_query($con,$sql);
if($data){
    echo"<script>alert('Reservation updated successfully')</script>";
    echo"<script>window.open('display.php','_self')</script>";
}
else{
    echo"error:".mysqli_error($con);
}
}
?>
