<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sell.css">
    <title>Sell Waste</title> 
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>
        button{
          
            margin-top:3%;
           
        }
        .form-group > button{
            margin-bottom:4%;
        }
        button:hover{
            background-color: rgb(40, 206, 82);
        }
        #material{
          background-color:rgba(0, 0, 0, 0.747);
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
          opacity: 0.5;
        }
    </style>
    
</head>

<body>
    <!-- Navigation Bar  -->
    <div id="header" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="../logout.php">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br><br>


 
    <div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
        <!-- form -->
         <center><b><h1>Sell Waste</h1></b></center>
        <div class="container">
            <div class="row">
            <div class="col-md-6 forms">
                <form class="p-3" action="insert.php" method="post" enctype="multipart/form-data">
                    <h2>Enter your product information</h2>
                    
                    <div class="col-md-10 m-2">
                        <label for="material-type" >Select Recyclable Material Type:</label>
                        <br>
                         <select class="inp w-100 p-3" id="material" name="type"required>
                           <option value=""class="inp w-100 p-3">--Please choose an option--</option>
                           <option value="Plastic">Plastic</option>
                           <option value="Glass">Glass</option>
                           <option value="Paper">Paper</option>
                           <option value="Electronic Devices">Electronic Waste</option>
                           <option value="Wood">Wood</option>
                           <option value="Cardboard">Cardboard</option>
                           <option value="Metals">Metal</option>
                           <option value="Tyres">Tyres</option>
                           <option value="Batteries">Batteries</option>
                           <option value="Textile & Clothes">Textile & Clothes</option>
                         </select>        
                                         
                    </div>
                    
                      <div class="col-md-10 m-2">
                        <label for="text">Name of Product</label>
                        <input type="text" class="inp w-100 p-3" placeholder="Name of Production" name="product_name" id="text" required>
                      </div>
                      <div class="col-md-10 m-2">
                        <label for="text">Product Quantity</label>
                        <input type="text" class="inp w-100 p-3" placeholder="Quantity in kg" id="text" name="quantity" required>
                      </div>
                      
                      
                     <p class="col-md-10 m-2">Upload Product Image</p>
                       <div class="col-md-10 m-2"> 
                         <input type="file" id="image" name="image" class="inp w-100 p-3" accept="image/*">
                       </div>
                     <script>
                     // Add the following code if you want the name of the file appear on select
                     $(".custom-file-input").on("change", function() {
                       var fileName = $(this).val().split("\\").pop();
                       $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                     });
                     </script>
           
                     <br><br>
                   <h2>Pickup Date</h2>  
           
                     <div class="col-md-10 m-2">
                       <label for="date">Select Date</label>
                       <input type="date" class="inp w-100 p-3" placeholder="26-03-2015" id="date" name="date" required>
                    </div>
                   <div class="col-md-10 m-2">
                       <label for="time">Select Time</label>
                       <input type="time" class="inp w-100 p-3" placeholder="" id="time" name="time" required>
                   </div>
           
                   <h2>Pickup Location</h2>    
                       <div class="col-md-10 m-2">
                       <label for="text">Area, Street, Village</label>
                       <input type="text" class="inp w-100 p-3" placeholder="Area, Street, Village" id="text" name="addressline1" required>
                   </div>
           
                   <div class="col-md-10 m-2">
                       <label for="text">Town/City</label>
                       <input type="text" class="inp w-100 p-3" placeholder="Town/City" id="text" name="addressline2" required>
                   </div>
                   <div class="col-md-10 m-2">
                       <label for="pincode">Pincode</label>
                       <input type="number" id="number" placeholder="Enter pincode" class="inp w-100 p-3" name="pin" required>
                   </div>
           
                  
                   <button class="btn btn-success w-45" type="submit" name="submit" id="submit">SUBMIT</button>
                </form> 
                    </div>
                       <div class="col-md-6 text-center">
                        <img src="images/order.svg" alt="" srcset="" class="aboutImg" >
                    </div>                
            </div>
        </div>
    </div>

    <br><br>
    



    <!-- Footer -->
    <div id="footer" class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="font-size: 15px;">@copyright greentrash.com</div>
                <div class="col-md-6">
                    <ul id="icons" class="float-md-end">
                        <li><a href="" class="fab fa-facebook-square"></a></li>
                        <li><a href="" class="fab fa-twitter-square"></a></li>
                        <li><a href="" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>