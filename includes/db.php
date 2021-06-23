<?php

   $server   =  "sql313.epizy.com";
   $username =  "epiz_28947394";
   $password =  "0TWP6c8icR2HL";
   $dbname   =  "epiz_28947394_traveler";


   $conn = mysqli_connect($server,$username,$password,$dbname);

   if(!$conn){
       die("connection failed:".mysqli_connect_error());
   }

   ?>