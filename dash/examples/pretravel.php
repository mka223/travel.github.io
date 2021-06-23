<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    User Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
 <!--start container-->
 <div class="container">
          <p class="caption">Order List</p>
          
            
            <div>
            <div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Ticket Status</h3>
    </div>
   
    <div class="card-body">
        <div class="table-responsive">
        <?php

            $connection = mysqli_connect ("localhost" , "root" , "","travel");
            $query = "SELECT * FROM booking";
            $query_run = mysqli_query($connection, $query);
        ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> Order ID </th>
                        <th> Name </th>
                        <th>Destination </th>
                        <th>Package</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0)        
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                        <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['name']; ?></td>
                            <td><?php  echo $row['destination']; ?></td>
                            <td><?php  echo $row['package']; ?></td>
                            <td><?php  echo $row['date']; ?></td>
                            <td>
                                <form action="approve.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success">Cancel</button>
                                </form>
                            </td>
                           
                           
                        </tr>
                    <?php
                        } 
                    }
                    else {
                        echo "No Record Found";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>