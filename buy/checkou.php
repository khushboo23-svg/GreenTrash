<?php
session_start();
require_once("connection.php");


//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM sell WHERE id='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["id"]=>array('name'=>$productByCode["product_name"], 'id'=>$productByCode["id"], 'quantity'=>$_POST["quantity"],  'image'=>$productByCode["image"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	foreach($_SESSION["cart_item"] as $p){
	$id=$_GET["pid"];

	$insertquery = "insert into buy_prod(prod_id) values('$id')";
	$res = mysqli_query($con,$insertquery);
	if  ($res){
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Message sent to green trash ✔!');
				window.location.href='checkou.php';
				</script>");
	}else{
		echo "<script>alert('Message not sent try again!');</script>";
	}
	$insert = "insert into buy(prod_id) values('$id')";
	$res = mysqli_query($con,$insert);
}

	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if( $_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
		
	break;	
}
}

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
    float:left;
	color: #d00000;
	text-decoration: none;
	border-radius: 3px;
	
}
#form{
    float:right;
}

.passage{
    color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);
    margin-bottom:30px;}

.box{
    margin-bottom:30px;
   
}
#btnEmpty {
	background-color: rgb(46,139,87);
    padding: 5px 10px;
	color: white;
	float: right;
	text-decoration: none;
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
        <div class="checkout">
			<div class="row">
            			
				<div class="col-md-4 order-md-2 mb-4" id ="cart">
                    <div>
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
						<h4 style="color:white; display:inline-block;" > Your Cart</h4>
                        <a id="btnEmpty" href="checkou.php?action=empty" >Empty Cart</a>
					</h4>
                    </div>
					<?php
            if(isset($_SESSION["cart_item"]))
            {
                $total_quantity = 0;
                
            ?>
                    <?php		
                        foreach ($_SESSION["cart_item"] as $item){
		            ?>
					<ul class="list-group mb-3">
                        	<li class="list-group-item d-flex justify-content-between lh-condensed">
                                
						        <div>
                                    <p><img src="../sell/upload/<?php echo $item['image'];?>" class="cart-item-image" width="50" alt="" /></p>
                                    <small class="text-muted"><?php echo $item["name"]; ?></small>
						        </div>
                                <div>
                                    <p><?php echo $item["quantity"];?></p>
                                    <a href="checkou.php?action=remove&code=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a>
                                </div>
						    </li>
							<li class="list-group-item d-flex justify-content-between">
                                <span>Total </span>
                                <?php $total_quantity += $item["quantity"];?>
                                <strong><?php echo $total_quantity; ?></strong>
						    </li>
					</ul>   
                <?php
                    }
                ?>
                    <br><br><br>
                <?php 
            }
                ?>

				</div>
				<div class="col-md-8 order-md-1" id="form">
					<h4 class="mb-3">Contact Details</h4>
					<form method="post" action="cartAction.php">
						<div class="row">
							<div class="col-md-6 mb-3">
							  <label for="first_name">First Name</label>
							  <input type="text" class="form-control" name="first" value="" required="">
							</div>
							<div class="col-md-6 mb-3">
							  <label for="last_name">Last Name</label>
							  <input type="text" class="form-control" name="last" value="" required="">
							</div>
						</div>
                        
                        <div class="mb-3">
                            
							<label for="id">Product</label>
							<input type="text" class="form-control" name="prod_id" value="" required="">
						</div>
						<div class="mb-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" value="" required="">
						</div>
						<div class="mb-3">
							<label for="phone">Phone</label>
							<input type="text" class="form-control" name="phone" value="" required="">
						</div>
						<div class="mb-3">
							<label for="last_name">Address</label>
							<input type="text" class="form-control" name="address" value="" required="">
						</div>
						<input type="hidden" name="action" value="placeOrder">
						<input class="btn btn-success btn-lg btn-block" type="submit" name="checkoutSubmit" value="Place Order">
					</form>
				</div>
			</div>
		</div>
    </div>					
					
        
</body>
</html>




