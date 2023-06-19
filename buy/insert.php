<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    $first= $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $town= $_POST['town'];
    $area= $_POST['area'];
    $phone = $_POST['phone'];

    $insertquery = "insert into buy(first, last, email, town,area,phone) values('$first', '$last', '$email', '$town','$area','$phone')";

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