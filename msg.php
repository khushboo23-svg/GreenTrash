<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/finalindex.css">
    <link rel="stylesheet" href="css/msg.css">
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
<body onload="show('popup1')">
<script type="text/javascript" src="msg.js"></script>
<div id="header" class="mb-3">
        <div class="container1">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index-final.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="Login-form.html">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-4 m-3">
                        <h2 class="text-center">Register Here</h2>
                        <form action="connection.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="username" id="username" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                <img src="images/join.png" alt="" style="width:80%;height:100%;">
                                </div>
                            </div>

                        </form>
                    </div>
                    
                    <div class="col-md-4 m-3">
                        <h2 class="text-center">Login Here</h2>
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

<div class="popup" id="popup1">
  <h1 class="text-center"><i class="fas fa-exclamation-triangle"></i></h1>
  <p><b>A user with this name already exists!</b>.</p>
	<p>Register again using another username</p>
  <a href="#" onclick="hide('popup1')">Ok!</a>
</div>


</body>
</html>
