<?php
    include('security.php');
?>

<?php
//include('security.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Orders Status</h6>
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
                                    <form action="status.php" method="post">
                                        <input type="hidden" name="approve_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="approve_btn" class="btn btn-success">Approve</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="status.php" method="post">
                                        <input type="hidden" name="finish_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="finish_btn" class="btn btn-success">Finished</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="status.php" method="post">
                                        <input type="hidden" name="reject_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="reject_btn" class="btn btn-danger">Reject</button>
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

</div>


