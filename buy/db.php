<?php
session_start();
include('connection.php');
   $q1=mysqli_query($con,"select * from product order by id desc limit 1");
  
   while($row=mysqli_fetch_array($q1))
				{
                    $q=mysqli_query($con,"select * from product order by id desc limit 1");
                    while($row1=mysqli_fetch_array($q)){
                        if($row1["id"]==$row["id"]){
                            $_SESSION["order_id"]=$row["prod_id"];
                        }
                    }
				}
    echo ($_SESSION["order_id"]);
    
?>