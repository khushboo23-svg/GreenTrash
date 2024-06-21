<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & User Registration</title>
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
    <link rel="stylesheet" href="css/finalindex.css">
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
        body{ 
            background: url('images/baner.jpg')no-repeat 0 0;
            background-attachment: fixed;
            background-size: cover; 
        }
        .container { 
            background: inherit;
            position: relative;
            z-index: 1;
            overflow: hidden;
            margin: 0 auto;
            box-sizing: border-box;
            box-shadow: 0 .5em 1em rgba(0,0,0,.3);
            color:white;
            margin-bottom:30px;
        }
        .container::before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0; right: 0; bottom: 0; left: 0;
        background: inherit;
        box-shadow: inset 0 0 3000px rgba(255,255,255,.5);
        filter: blur(10px);
        margin: -20px;
        }
        .register{
            margin-top:50px;
        }
        #sealer_btn{
            background-color: rgb(46,139,87);
            margin-bottom:30px;
            margin-top:30px;
            border: 2px solid rgb(46,139,87);
        }
        #sealer_btn:hover{
            background-color: rgb(78, 204, 133);
            color:black;
        }
        #buyer_btn{
            background-color: rgb(46,139,87);
            margin-bottom:75px;
            border: 2px solid rgb(46,139,87);
        }
        #buyer_btn:hover{
            background-color: rgb(78, 204, 133);
            color:black;
        }
        #btn_login{
            background-color: rgb(46,139,87);
            border: 2px solid rgb(46,139,87);
        }
        #btn_login:hover{
            background-color: rgb(78, 204, 133);
            color:black;
        }
        #link{
            text-decoration:none;
            color:white;
        }
        #link:hover{
            color:black;
        }
    </style>
</head>
<body>
<div id="header" class="px-3">
        <div class="container1">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../About/about.php">About Us</a></li>
                        <li><a href="../service/services.php">Services</a></li>
                        <li><div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Login/SignUp
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="register.php">User Login</a></li>
                              <li><a class="dropdown-item" href="../Admin/login.php">Admin Login</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-4 m-3">
                        <h2 class="text-center">Register Here</h2>
                        <div class="register">
                        <center>
                        <button type="submit" class="btn btn-primary"  id="sealer_btn"style="display:block;"><a href="seller/registration-seller.php"  id="link">Register as trash Seller</a></button>
                        <button type="submit" class="btn btn-primary" id="buyer_btn" style="display:block;"><a href="buyer/registration-buyer.php"  id="link">Register as trash Buyer</a></button>

                        </center>
                        
                        </div>
                        <div class="row">
                                <div class="col-md-12 text-center">
                                <img src="images/join.png" alt="" style="width:80%;height:100%;">
                                </div>
                        </div>
                       
                    </div>
                    
                    <div class="col-md-4 m-3">
                        <h2 class="text-center" >Login Here</h2>
                        <div class="register">
                        <center>
                        <button type="submit" class="btn btn-primary"  id="sealer_btn"style="display:block;"><a href="seller/seller-login.php"  id="link">Login as trash Seller</a></button>
                        <button type="submit" class="btn btn-primary" id="buyer_btn" style="display:block;"><a href="buyer/buyer-login.php"  id="link">Login as trash Buyer</a></button>

                        </center>
                        
                        </div>   
                            
                            <div class="row">
                                <div class="col-md-12 text-center">
                                <img src="images/log.png" alt="" style="width:80%;height:100%;">
                                </div>
                            </div>
                        </form>
                    </div>               
        </div>
    </div>

    
</body>
</html>
