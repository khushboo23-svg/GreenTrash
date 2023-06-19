<?php
include('connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username =$_POST['username']; 
    $password =$_POST['password']; 
    $contact = $_POST['contact'];

    $sql = "insert into `admintable` (name,username,password,contact) values('$name','$username','$password','$contact')";
    $result = mysqli_query($con,$sql);
    header('location:display.php');

    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Insert in Admin</title>
    <style>
        body{
            background-color: #fbfbfb;
        }
        #main-navbar{
            background-color: rgb(1, 26, 1);
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
            color:white;
            background-color: rgb(19, 116, 19);
        }
    </style>
</head>
<body>
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
    <br><br><br><br>
    <center><b><h1>Add New admin</h1></b></center>
    <hr>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="contact" class="form-control" id="contact" name="contact" placeholder="Enter your contact">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

 
</body>
</html>