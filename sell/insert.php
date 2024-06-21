<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    $type = $_POST['type'];
    $product_name = $_POST['product_name'];
    $user_name=$_POST['user_name'];
    $quantity = $_POST['quantity'];
    $file = $_FILES['image'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $addressline1 = $_POST['addressline1'];
    $addressline2 = $_POST['addressline2'];
    $pincode = $_POST['pin'];

    //for storing image
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    
    if($fileerror == 0){
      $destfile = 'upload/'.$filename;
      move_uploaded_file($filepath,$destfile);
      $insertquery = "insert into sell(type, product_name,username, quantity, image, date, time, area, city, pincode) VALUES ('$type', '$product_name','$user_name', '$quantity', '$filename', '$date', '$time', '$addressline1', '$addressline2', '$pincode')";
      $res = mysqli_query($con,$insertquery);
    }
    

  if  ($res){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data sent to green trash ✔!');
            window.location.href='sell.php';
            </script>");
}else{
    echo "<script>alert('request not sent try again!');</script>";
}
}
?>
