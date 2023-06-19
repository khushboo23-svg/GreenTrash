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
    <title>Sell Summary</title>
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
          <a href="orders.php" class="list-group-item list-group-item-action py-2 ripple">
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

  <main style="margin-top: 60px;">
    <div class="container pt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pincode</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `sell`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_array($result)){
                      ?>
                      <tr>
                          <td>
                              <p><?php echo $row['id']; ?></p>
                          </td>
                          <td>
                              <p><?php echo $row['product_name']; ?></p>
                          </td>
                          <td>
                              <p><?php echo $row['type']; ?></p>
                          </td>
                          <td>
                              <img width="auto" src="../sell/upload/<?php echo $row['image']?>" width="100" height="100" /> 
                          </td>
                          <td>
                              <?php echo $row['quantity']; ?>
                          </td>
                          <td>
                                 <p><?php echo $row['area']; ?><?php echo $row['city'];?></p>
                            </td>
                            <td>
                                <p><?php echo $row['pincode']; ?></p>
                            </td>
                      </tr>  
                      <?php
                       
                       

                    
                    }
                }

                ?>
          
                
            </tbody>
        </table>
       
    </div>
  </div>
</main>
    
  <!--Main layout-->
</body>
</html>

