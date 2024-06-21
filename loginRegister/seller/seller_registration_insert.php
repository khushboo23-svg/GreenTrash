<?php
session_start();
header('location:../register.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'greentrash');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$s = "select * from sellertable where username = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 
 
if($num > 0){
    header('location:../popup.php');
    
}
else{
    $reg = " insert into sellertable(first,last,email,username,password ) values ('$first_name', '$last_name','$email','$username','$password')";
    mysqli_query($con, $reg);
    // echo "Registration Successfull";
}
?>