<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:buyer_login_connection.php');
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
    <link rel="stylesheet" href="css/finalindex.css">
    <link rel="stylesheet" href="css/dashboard.css">
  
    <title>Dashboard</title>
    <style>
        .container{
            
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
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 mb-2 user">
          <h1>Welcome <?php echo  $_SESSION['username'];   ?> <i class="fas fa-user-check"></i></h1>
          
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
    
    <div class="container">
    <div class="row ">


      <!-- DEMO 4 Item-->
      <div class="col-md-4 mb-3  ">
        <div class="hover hover-4 text-white rounded "><img src="images/baner2.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light"><i class="fas fa-recycle"></i>  </span>SELL WASTE</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Reduce the amount of waste sent to landfills and incinerators by recycling.</p>
          </div>
        </div>
        <button type="button" class="btn btn-success w-100">Go to Sell Page</button>
      </div>

      <div class="col-md-4 mb-3 ">
        <div class="hover hover-4 text-white rounded"><img src="images/baner2.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0 black"><span class="font-weight-light"><i class="fas fa-recycle"></i>  </span>BUY WASTE</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Buying Recycled Products Keeps Our Landfills from Overflowing</p>
          </div>
        </div>
        <button type="button" class="btn btn-success w-100">Go to Buy Page</button>
      </div>

      <div class="col-md-4 mb-3 ">
        <div class="hover hover-4 text-white rounded"><img src="images/baner2.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light"><i class="fas fa-recycle"></i>  </span>RECYCLE INFO</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Gather more information about recycling.</p>
          </div>
        </div>
        <button type="button" class="btn btn-success w-100">Go to Info Page</button>
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