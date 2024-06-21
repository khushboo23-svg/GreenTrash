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

<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="css/servicestyle.css" type="text/css" rel="stylesheet" />
<link href="css/buystyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Cart</title>
<link rel="icon" href="images/icon.png" type="image/icon type">
</HEAD>
<style>
	.passage{
    color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);}
	#btnEmpty {
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
}
#btnShop{
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: left;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
	
}
#btnOrder{
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
}
#shopping-cart table {
	width: 100%;
	background-color: #F0F0F0;
}

#shopping-cart table td {
	background-color: #FFFFFF;
}
.forms {
     color: white;
    box-shadow: inset 2000px 0 0 0  rgba(211, 204, 204, 0.158);
    margin-bottom:30px;
   
    margin-left:50px;
    margin-right:50px;
}
.btn{
	background-color: rgb(46,139,87);
    margin-bottom:15px;
	color:black;
}

</style>
<BODY>


<!-- Cart ---->
<div id="shopping-cart">
<div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
<div class="txt-heading"><h1><center>Shopping Cart</center></h1></div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<thead>
	
<th style="text-align:left;">Product</th>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:center;" width="5%">Remove</th>
</thead>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        //$item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="../sell/upload/<?php echo $item['image'];?>" class="cart-item-image" width="50" alt="" /></td>
				<td><?php echo $item["name"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<!---<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>-->
				<!--<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>-->
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				//$total_price += ($item["price"]*$item["quantity"]);
				$_SESSION["order_id"]=$item["id"];
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right" colspan="2"><?php echo $total_quantity; ?></td>
<!--<td align="right" colspan="2"><strong>
	<!-<?php echo "$ ".number_format($total_price, 2); ?></strong></td>-->
<td></td>
</tr>
<tr>
	<td colspan="5">
	<a id="btnOrder" href="buy.php">Place Order</a>
	</td>
</tr>

</tbody>
</table>	

  <?php
} else {
?>
<div class="no-records"><h1><center>Your Cart is Empty</center></h1></div>
<br><br><br>
<?php 
}
?>

</div>
</div>

  
</div>



</BODY>
</HTML>