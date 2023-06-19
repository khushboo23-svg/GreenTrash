<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
      @import url('http://fonts.cdnfonts.com/css/florentia');
        body {
         background-color: rgb(240,240,240);
        }
        @media (min-width: 991.98px) {
             main {
                padding-left: 240px;
                padding-top:15px;
            }
        }    
        #main-navbar{
          background-color: rgb(1, 26, 1);
        }  

        /* Sidebar */
        .sidebar {
          position: fixed;
          top: 0;
          bottom: 0;
          left: 0;
          padding: 58px 0 0; 
          width: 240px;
          z-index: 600;
          margin-top:5px;
        }

        @media (max-width: 991.98px) {
          .sidebar {
            width: 100%;
            }
        }
        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
          position: relative;
          top: 0;
          height: calc(100vh - 48px);
          padding-top: 0.5rem;
          overflow-x: hidden;
          overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }
        
        #menu{
          list-style: none;
          margin: 0;
          padding: 0;
          color:green;
        }      
        #menu li{
          display: inline-block;
        }
        #menu li a{
          color: green;
          padding: 15px 10px;
          display: block;
          text-decoration: none;
        }
        #menu li a:hover{
          background-color: rgb(19, 116, 19);
        }
    </style>
</head>
<body>
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white " >
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <span>Main dashboard</span>
          </a>    
          <a href="display.php" class="list-group-item list-group-item-action py-2 ripple">
            <span>Admin</span></a>
          <a href="user-table.php" class="list-group-item list-group-item-action py-2 ripple">
            <span>Users</span></a>  
          <a href="orders.php" class="list-group-item list-group-item-action py-2 ripple" >
            <span>Orders</span></a>
          <a href="contact.php" class="list-group-item list-group-item-action py-2 ripple">
            <span>Contact Us</span></a>
            
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
 
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light  fixed-top" >
      <!-- Container wrapper -->
      <div class="container-fluid" style="background-color: rgb(1, 26, 1);">
        <!-- Brand -->
        <a class="navbar-brand" href="#" >
          <div class="col-md-4 my-2 ">
            <h1 id="logo"style="color: whitesmoke;"><i class="fa fa-recycle" style="color: whitesmoke;"></i>  Green Trash </h1>
          </div>
        </a>
        <!-- Right links -->
        <div class="col-md-4 my-2" >
          <ul id="menu" class="float-md-end">   
            <li ><a href="logout.php"style="color: whitesmoke;"><b>Logout</b></a></li>
          </ul>
        </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>

  <main style="margin-top: 58px;">
    <div class="container pt-4">
        <!-- Begin Page Content -->
<div class="container-fluid">

<br>
<br>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   
</div>


<!-- Content Row -->
<div class="row">

  <!-- Total User -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered User</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php
                $sql = "Select * from `usertable`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
              echo "<h4>Total User: $rowcount</h4>"
             ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!---Admin Data-->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $sql = "Select * from `admintable`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
              echo "<h4>Total Admin: $rowcount</h4>"
             ?>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
<!---Contact Query-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contact Query</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $sql = "Select * from `contactus`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
              echo "<h4>Total Query: $rowcount</h4>"
             ?>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
  

</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Order Details</h1>
   
</div>
<div class="row">
  <!--Sell Orders-->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sell Orders</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $sql = "Select * from `sell`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
              echo "<h4>Sell Orders: $rowcount</h4>"
             ?>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Buy Orders</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                $sql = "Select * from `buy`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
              echo "<h4>Buy Orders: $rowcount</h4>"
             ?>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
</div>

</main>
</body>
</html>
