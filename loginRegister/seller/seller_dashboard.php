<?php
session_start();
include('../connection.php');
if(!isset($_SESSION['username'])){
    header('location:seller_login.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/finalindex.css">
    <link rel="stylesheet" href="../css/dashboard.css">
  
    <title>Dashboard</title>
    <style>
        .container{
            
        }
        #button{
        background-color: rgb(46,139,87);
        width:260px;
        }
        #button:hover{
            color:black;
        }
        #link{
            text-decoration:none;
            color:white;
        }
        #link:hover{
            color:black;
            cursor:hand;
        }
    </style>
    
</head>
<body>
    <div id="header" class="">
        <div class="container1">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="seller_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 mb-2 user">
          <h1>Welcome <?php echo  $_SESSION['username']; $user=$_SESSION['username'];  ?> <i class="fas fa-user-check"></i></h1>
          <?php
                $sql = "SELECT * FROM sell WHERE username='$user'";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
                echo "<h4>Total Orders: $rowcount</h4>"
                                    
            ?>
             <p><button type="button" class="btn bg-cart" id="button" ><a href="sell_details.php" id="link">View Order Details</a></button></p>
    </div>
    
    <div class="container2">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-center text-uppercase">
                avail the services of green trash
                </h1>
                <p>It makes a big difference to recycle. <br> It makes a big difference to use recycled products. <br> It makes a big difference to reuse things, to not use the paper cup - and each time you do, that's a victory.</p>
                <hr>
            </div>  
        </div>
    </div>
    

    <!-- DEMO 4 -->
  <div class="container2 pb-5 pt-2">
        <div class="row justify-content-evenly">
            <div class="col-md-4">
                <img src="../images/sell.png" alt="" class="w-100 h-100 images">
            </div>            
            <div class="col-md-6 p-5">
                <h1 class="text-uppercase" style="color:black;">Sell Trash</h1>
                <hr style="color:black;"> 
                <p class="p-5 ps-0" style="color:black;">            
                    Reduce the amount of waste sent to landfills and incinerators by selling recyclable materials.
                </p>
                <button class="btn btn-success w-75" id="button"><a href="../../sell/sell.php" class="btns" id="link">Sell Now</a></button>            
            </div>
        </div>
        <div class="container text-light  mb-5">
            <div class="row justify-content-evenly">
                <div class="col-md-4">
                    <img src="../images/info.png" alt="" class="w-100 h-100 images">
                </div>
                <div class="col-md-6 p-5">
                    <h1 class="text-uppercase" style="color:black;">Recycle Info</h1>
                    <hr style="color:black;">
                    <p class="p-5 ps-0" style="color:black;">
                    Recycling reduces the need for extracting, refining and processing raw materials all of which create air and water pollution. As recycling saves energy it also reduces greenhouse gas emissions, which helps to tackle climate change.
                    </p>
                    
                    <button class="btn btn-success w-75" id="button"><a href="waste.php" class="btns" id="link">Recycling Info</a></button>            
                </div>
            </div>
        </div>
  </div>

    
    

  <!-- Footer section -->
  <div id="footer-sidebar">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4>About This Approach</h4>
                        <p>The approach of this web app is to automate and extend the rate of recycling procedure with
                            tech-support and to establish a connection among the people and organizations dealing in
                            waste-to-product conversion. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4> Read More</h4>
                        <ul class="latest-news">
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Read more about us</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Sell recycleable products</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Buy recycleable products</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Learn more about recycling</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="font-size: 15px;">@copyright greentrash.com</div>
                <div class="col-md-6">
                    <ul id="icons" class="float-md-end">
                        <li><a href="" class="fab fa-facebook-square"></a></li>
                        <li><a href="" class="fab fa-twitter-square"></a></li>
                        <li><a href="" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



</body>
</html>