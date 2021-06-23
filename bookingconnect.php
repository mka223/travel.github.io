<?php
include('security.php');
?>

<?php

$con = mysqli_connect("localhost","root","","travel");
if(isset($_POST['submit']))
{
    
    $name = $_POST['name'];
    $activities = $_POST['activities'];
	$destination = $_POST['destination'];
	$package = $_POST['package'];
	$date = $_POST['date'];
    
    $querry = "INSERT INTO booking (name,activities,destination,package,date) VALUES ('$name','$activities','$destination','$package','$date')";
    $querry_run = mysqli_query($con,$querry);

}



?>