<?php

$con = new mysqli('localhost', 'root', '', 'greentrash');

if($con){
     echo "connection successful";

}else{
    // echo "no connection";
    die("not connected" . mysqli_conect_error());
}


?>