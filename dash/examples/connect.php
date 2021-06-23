<?php
include('security.php');
?>

<?php

$con = mysqli_connect("localhost","root","","travel");
if(isset($_POST['submit']))
{
    $role = $_POST['role'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
    $password = $_POST['password'];
    
    $querry = "INSERT INTO user (role,fname,lname,username,email,phone,address,password) VALUES ('$role','$fname','$lname','$username','$email','$phone','$address','$password')";
    $querry_run = mysqli_query($con,$querry);

}



?>