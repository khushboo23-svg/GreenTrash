<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/finalindex.css">
    <link rel="stylesheet" href="css/info.css">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/waste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Green Trash</title>
</head> 
<body>
     <!-- Navigation Bar  -->
     <div id="header" class=" fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--banner-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1>Recycle Waste!</h1>      
          <p>Sell recyclable materials and contribute to environmental sustainablitily.</p>
       </div>
     </div>

   <!--form-->
      <h2>Please enter your product information</h2>
   
       <form>
          <div class="form-group">
            <label for="material-type">Select Recyclable Material Type:</label>
             <select class="form-control"id="material-type" required>
               <option value="">--Please choose an option--</option>
               <option value="Plastic">Plastic</option>
               <option value="Glass">Glass</option>
               <option value="Paper">Paper</option>
               <option value="Electronic Devices">Electronic Waste</option>
               <option value="Wood">Wood</option>
               <option value="Cardboard">Cardboard</option>
               <option value="Metals">Metal</option>
               <option value="Tires">Tires</option>
               <option value="Batteries">Batteries</option>
               <option value="Textile & Clothes">Textile & Clothes</option>
             </select>
            
          </div>
          <div class="form-group">
            <label for="text">Name of Product</label>
            <input type="text" class="form-control" placeholder="Name of Production" id="text" required>
          </div>
          <div class="form-group">
            <label for="number">Product Quantity</label>
            <input type="number" class="form-control" placeholder="Quantity in kg" id="number" required>
          </div>
          
         <p class="form-group">Upload Product Image</p>
           <div class="custom-file">
             <input type="file" class="custom-file-input" id="customFile" required>
             <label class="custom-file-label" for="customFile">Choose file</label>
           </div>
         <script>
         // Add the following code if you want the name of the file appear on select
         $(".custom-file-input").on("change", function() {
           var fileName = $(this).val().split("\\").pop();
           $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
         });
         </script>
         
          <button class="form-group"type="submit">
           <a type="button" href="sell.html" >Help me Recycle!</a>
           </button>
       </form>
    
   <!--footer-->
    <div id="footer">
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
 