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
    <title>Product List</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
      
#button{
    background-color: rgb(46,139,87);
    margin-bottom:10px;
    margin-left:50px;
    width:160px;
    
    
}
#link{
    text-decoration:none;
    color:black;
}
.btnAddAction{
    background-color: rgb(46,139,87);

    border:rgb(46,139,87);
}
#cart{
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
}
.card{
    background: rgba(42, 143, 16, 0.685);
    margin-bottom:30px;
}
.card:hover{
    background: rgba(99, 165, 13, 0.788);
}
.passage{
    color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);
    margin-bottom:30px;}
.cart-action{
    margin-left:120px;
    margin-bottom:30px;
   

}
.box{
    margin-bottom:30px;
   
}
.product-quantity{
    border-radius: 3px;
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
                        <li><a href="index-final.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="login.html">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br><br>
  
          
    <div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
        <div class="col-md-12">
            <div class="box">
                <h1><center>Items for Sale</center></h1>
            </div>
            <div class="row">
            <?php
                $sql = "Select * from `sell`";
                $result = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result))
                {
                
            ?>
                <div class="col-md-4 col-sm-6 center responsive">
                    <div class="product">
                        <div class="card">
                            <form method="post" action="cart.php?action=add&pid=<?php echo $row["id"]; ?>">
                                <p class="my-5 text-center"><img src="../sell/upload/<?php echo $row['image'];?>" width="300" height="300" alt="" /></p>
                                <p class="text-center text-capitalize paraHeading" style="color:white;"><?php echo $row['product_name'];?></p>
                                <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <button type="button" class="btn bg-cart" id="button" ><a href="cart.php" id="link">Go to cart</a></button>

  <br><br><br>
</body>
</html>