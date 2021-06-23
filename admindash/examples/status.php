<?php
    include('security.php');


$connection = mysqli_connect ("localhost" , "root" , "","travel");

if(isset($_POST['approve_btn']))
{
    $id = $_POST['approve_id'];
   
    $query = "UPDATE booking SET status='Approved' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
}


if(isset($_POST['reject_btn']))
{
    $id = $_POST['reject_id'];
    
    $query = "UPDATE booking SET status='Reject' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
}


?>