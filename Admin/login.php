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
        @import url('http://fonts.cdnfonts.com/css/florentia');
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
    </style>
</head>
<body>
<div id="header" class="mb-3">
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
                              <li><a class="dropdown-item" href="../login.php">User Login</a></li>
                              <li><a class="dropdown-item" href="login.php">Admin Login</a></li>
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
                        <h2 class="text-center">Admin Login</h2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="username" id="username" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
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
