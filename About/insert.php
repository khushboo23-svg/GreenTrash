<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email_id = $_POST['email_id'];
    $message = $_POST['message'];

    $insertquery = "insert into contactus(First_name, Last_name, email_id, message) values('$First_name', '$Last_name', '$email_id', '$message')";

  $res = mysqli_query($con,$insertquery);

  if  ($res){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Message sent to green trash ✔!');
            window.location.href='about.php';
            </script>");
}else{
    echo "<script>alert('Message not sent try again!');</script>";
}
}
?>