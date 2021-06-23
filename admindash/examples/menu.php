<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Journey
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="./dashboard.php">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./user.php">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./packages.php">
          <i class="material-icons">content_paste</i>
          <p>packages</p>
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="material-icons">payments</i>
              <p>Payments</p>
    
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    
                    <a class="collapse-item" href="recpayment.php">Recieved Payments</a>
                    <a class="collapse-item" href="pendpayment.php">Panding Payments</a>
                </div>
            </div>
           </li>
    </ul>
  </div>
</div>