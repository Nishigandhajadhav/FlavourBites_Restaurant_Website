<?php
include 'database.php';
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    



$sql="insert into contact(name,email,message) 
values('$uname','$email','$message')";

if(mysqli_query($con,$sql)){
    echo"<script>alert('new record inserted')</script>";
    
}
else{
    echo"error:".mysqli_error($con);
}

mysqli_close($con);
}
?>
