<?php

$connection = mysqli_connect ("localhost" , "root" , "","travel");

if(isset($_POST['cancel_btn']))
{
    $id = $_POST['cancel_id'];
    $query = "UPDATE booking SET status='Order Cancelled' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
   
  
}
?>