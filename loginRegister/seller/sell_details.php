<?php
session_start();
include('connect1.php');
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/finalindex.css">
    <link rel="stylesheet" href="../css/dashboard.css">
  
    <title>Dashboard</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
        .container{
           
        }
        #button{
    background-color: rgb(46,139,87);
    width:260px;}
#button:hover{
    color:black;
}
#link{
    text-decoration:none;
    color:white;
}
#link:hover{
    color:black;
    cursor:hand;
}
    </style>
    
</head>
<body>
    <div id="header" class="">
        <div class="container1">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="seller_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 mb-2 user">
    <h1>Welcome <?php echo  $_SESSION['username']; $user=$_SESSION['username'];  ?> <i class="fas fa-user-check"></i></h1>
        <p>
        <?php
                $sql = "SELECT * FROM sell WHERE username='$user'";
                $result = mysqli_query($con,$sql);
                if($result){
                    $rowcount=mysqli_num_rows($result);
                }
                echo "<h4>Total Orders: $rowcount</h4>"
                                    
            ?>
        </p>
        
           
       
    </div>
    
    <div>
    <div class="container pt-4">
    <h1 style="margin-bottom:30px;"><center>Order Details</center></h1>
        <table class="table">
        <thead>
                <tr>
                    
                    <th scope="col">Product </th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Pickup Adress </th>
                    <th scope="col">Quantity</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM sell WHERE username='$user'";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_array($result)){
                      ?>
                      <tr>
                          
                          <td>
                              <?php
                                $query="select image from sell where id='$row[id]'";
                                $res=mysqli_query($con,$query);
                                $img=mysqli_fetch_array($res);
                              ?>
                              <img  src="../../sell/upload/<?php echo $img['image']?>" width="100" height="100" alt="loading image..." /> 
                          </td>
                          <td>
                            <p><?php echo $row['id']; $_SESSION['product']=$row['id'];?></p>
                          </td>
                          <td>
                              <p><?php echo $row['product_name']; ?></p>
                          </td>
                         
                          <td>
                              <?php echo $row['area']; ?>
                          </td>
                          <td>
                              <p><?php echo $row['quantity']; ?></p>
                          </td>
                          
                          
                    <?php        
                    }
                }
                
             ?> 
              
                      
                      
          
                      
          
                
            </tbody>
        </table>
    </div>