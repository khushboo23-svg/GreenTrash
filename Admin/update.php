<?php
include('connection.php');
$id=$_GET['updateid'];
$sql = "Select * from `admintable` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$username = $row['username'];
$password = $row['password'];
$contact = $row['contact'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username =$_POST['username']; 
    $password =$_POST['password']; 
    $contact = $_POST['contact'];

    $sql = "update `usertable` set id=$id,name='$name',username='$username',password='$password',contact='$contact' where id='$id'";
    $result = mysqli_query($con,$sql);
    header('location:display.php');
    

    if($result){
       echo("Inserted Properly")
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

    <title>CRUD</title>
</head>
<body>
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
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

 
</body>
</html>