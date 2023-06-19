<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "greentrash";


$con = mysqli_connect($server,$username,$password,$database);

if($con){
    //  echo "connection successful";

}else{
    // echo "no connection";
    die("not connected" . mysqli_conect_error());
}
?>