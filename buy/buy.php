<?php
    session_start();
  include('connection.php');
 
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/servicestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/buystyle.css">
    <title>Buy</title>
    <style>
        @import url('http://fonts.cdnfonts.com/css/florentia');
body{
    background: url('images/baner.jpg') no-repeat 0 0;
    background-size: cover;
}
.forms {
     color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);
    margin-bottom:30px;
    margin-top:30px;
    margin-left:50px;
    margin-right:50px;
}
.btn{
    margin-bottom:15px;
}
    </style>
</head>
<body>
    <!-- Navigation Bar  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Form section -->
    <div class="forms ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="in.php" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-start mb-3">
                            <div class="col-md-4 mt-2">
                                <label for="exampleInputEmail1" class="form-label text-capitalize">first name</label>
                                <input type="text" aria-label="First name" name="first" class="form-control" placeholder="Enter your first name" >
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="exampleInputEmail1" class="form-label text-capitalize">last name</label>
                                <input type="text" aria-label="First name" name="last" class="form-control" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="mb-3">
                        <?php
                $order_id=$_SESSION["order_id"];
              ?>
                          <label for="address" class="form-label">Product_Id</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="productid" value="<?php echo $order_id ;?>" readonly >
                        </div>
                        <div class="">
                        <?php
                $user_id=$_SESSION['username'];
              ?>
                          <label for="address" class="form-label"></label>
                          <input type="hidden" class="form-control" id="exampleInputPassword1" name="userid" value="<?php echo $user_id ;?>" readonly >
                        </div>

                        <div class="mb-3">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Enter your yown/city">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                        </div>
                       
                        <div class="mb-3">
                          <label for="phone" class="form-label">Phone Number</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Enter your phone number">
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-outline-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset ($_POST['submit'])){

    
$first = $_POST['first'];
$last = $_POST['last'];
$prod_id=$_POST['prod_id'];
$email = $_POST['email'];
$address =$_POST['address'];
$phone =  $_POST['phone'];


$insertquery = "insert into order_detail(first, last, prod_id, email, address,phone) values('$first', '$last','$prod_id',$email', '$address','$phone')";

$res = mysqli_query($con,$insertquery);

if  ($res){
echo ("<script LANGUAGE='JavaScript'>
        window.alert('Message sent to green trash ✔!');
        window.location.href='placedorder.php';
        </script>");
}else{
echo "<script>alert('Message not sent try again!');</script>";
}

}
/*$res=mysqli_query($con,"select * from product order by id desc limit 1");
				while($row=mysqli_fetch_array($res))
				{
                    $q=mysqli_query($q,"select * from buy order by id desc limit 1");
                    while($row1=mysqli_fetch_array($q)){
                        if($row1["id"]==$row["id"]){
                            $_SESSION["order_id"]=$row["prod_id"];
                        }
                    }
					$_SESSION["order_id"]=$row["prod_id"];
                   
				}*/

?>


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