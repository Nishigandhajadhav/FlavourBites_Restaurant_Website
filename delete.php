<?php
include 'database.php';
$id=$_GET['id'];
$query="delete from booktable where id='$id'";
$data=mysqli_query($con,$query);

if($data){
    echo"<script>alert('table reservation cancelled')</script>";
    echo"<script>window.open('insertb.php','_self')</script>";
}
else{
    echo"Failed to delete";
}
?>