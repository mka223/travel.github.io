 <!--start container-->
<div class="container">
          <p class="caption">Order List</p>
          <div class="divider"></div>
									<div id="work-collections">
									<ul id="projects-collection" class="collection">
								<?php
                                $connection = mysqli_connect ("localhost" , "root" , "","travel");
									if(isset($_GET['status'])){
										$status = $_GET['status'];
									}
									else{
										$status = '%';
									}			
									$sql = mysqli_query($connection, "SELECT * FROM booking WHERE status LIKE '$status';");
									while($row = mysqli_fetch_array($sql)){								                                
									echo'<a href="view-ticket-admin.php?id='.$row['id'].'"class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">'.$row['dish'].'</p>                                              
                                            </div>
                                            <div class="col s2">
                                            <span class="task-cat cyan">'.$row['status'].'</span></div>											
                                            <div class="col s2">
                                            <span class="task-cat grey darken-3">'.$row['deltype'].'</span></div>
                                            <div class="col s2">
                                            <span class="badge">'.$row['deltime'].'</span></div>
                                        </div>
                                    </a>';
									}
									?>
									</ul>
									</div>
            <div class="divider"></div>
            
            <div>
            <div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ticket Status</h6>
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