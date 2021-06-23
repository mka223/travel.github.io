<?php

$con = mysqli_connect("localhost","root","","travel");
if(isset($_POST['submit']))
{
    $packname = $_POST['packname'];
    $packtype = $_POST['packtype'];
	$destination = $_POST['destination'];
	$hotel = $_POST['hotel'];
	$city = $_POST['city'];
	$country = $_POST['country'];
    $cost = $_POST['cost'];
    
    $querry = "INSERT INTO addpackages (packname,packtype,destination,hotel,city,country,cost) VALUES ('$packname','$packtype','$destination','$hotel','$city','$country','$cost')";
    $querry_run = mysqli_query($con,$querry);

}



?>