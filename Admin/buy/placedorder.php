<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/servicestyle.css">
    <title>Order Placed</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
        .passage{
    color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);
    margin-bottom:30px;
    margin-top:30px;
    }
</style>
</head>
<body>
<div id="header" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="../logout.php">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
        <h1>
            <center>Congratulations!! Your order is placed .</center>
        </h1>
        <p>
            <center>
                Green Trash Team will contact you soon.
            </center>
        </p>
    </div>