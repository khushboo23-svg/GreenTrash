<?php
session_start();
header('location:../register.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'greentrash');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from sellertable where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:seller_dashboard.php');
}
else{
     header('location:../popup2.php');
} 
?>