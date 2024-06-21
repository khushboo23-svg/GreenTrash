<<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    
$first = $_POST['first'];
$last = $_POST['last'];
$productid=$_POST['productid'];
$email = $_POST['email'];
$address =$_POST['address'];
$phone =  $_POST['phone'];


//$insertquery = "insert into order_detail(first, last, prod_id, email, address,phone)
					// values('$first', '$last','$prod_id','$email', '$address','$phone')";
$insertquery="INSERT INTO `buy`( `prod_id`,'username', `first`, `last`, `email`, `address`, `phone`) VALUES ('$productid','$username','$first','$last','$email','$address','$phone')";
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
?>