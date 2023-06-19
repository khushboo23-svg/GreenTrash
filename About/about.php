<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="aboutstyle.css">
    <title>About</title> 
    <link rel="icon" href="images/icon.png" type="image/icon type">
    
</head>

<body>
    <!-- Navigation Bar  -->
    <div id="header" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="../service/services.php">Services</a></li>
                        <li><div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Login/SignUp
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="../login.php">User Login</a></li>
                              <li><a class="dropdown-item" href="../Admin/login.php">Admin Login</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br><br>


    <!-- Description about us -->
    <div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
        <div class="container pt-xl-3 pe-xl-5 ps-xl-5">
            <div class="row">
                <h1 class="text-center mb-3">About Us</h1>
                <hr>
                <div class="col-md-12 pt-xl-5 pe-xl-5 ps-xl-5">
                    <p class="text-center">The approach of this web app "GREEN TRASH" is to automate and extend the rate of recycling procedure with tech-support and to establish a connection among the people and organizations dealing in waste-to-product conversion. The residents will be able to know about various recycling techniques and waste collection points near their locality where they can sell and buy recyclable materials. In turn they can make some money with the waste they are going to sell. This app includes a domain of users where they can get themselves registered. Choose whether they want to buy or sell the waste. Select its type and know about the various organizations or collection points concerned with that type of waste. The waste type and its reusability is finally analyzed and the selling or purchase gets confirmed if the waste is worth selling and vice versa. Further with help of transportation the waste is reached to its destination and then converted to reusable material.</p>
                </div>
            </div>
        </div>


      
        <!-- form -->
        <div class="container">
            <div class="row">
            <div class="col-md-6 forms">
                <form class="p-3" action="insert.php" method="post">
                    <h3 class="text-center">Contact</h3>
                    <hr class="mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" name="First_name" type="text" placeholder="First name">
                        </div>
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" name="Last_name" type="text" placeholder="Last name">
                        </div>
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" name="email_id" type="email" placeholder="Email id">
                        </div>
                        <div class="col-md-10 m-2">                                                    
                            <textarea id="" cols="30" rows="5" name="message" class="inp w-100 p-3" placeholder="Message"></textarea> 
                        </div>
                        <div class="col-md-10 m-2 text-center">
                            <button name="submit" type="submit" class="btn btn-success w-50">Send</button>
                        </div>                      
                    </div>                  
                </form> 
                    </div>
                       <div class="col-md-6 text-center">
                <img src="images/aboutImage.png" alt="" srcset="" class="aboutImg">
            </div>                
            </div>
        </div>
    </div>

    <br><br>
    



    <!-- Footer -->
    <div id="footer" class="p-3">
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
