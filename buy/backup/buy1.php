<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/buystyle.css">
    <title>Buy</title>
</head>
<body>
    <!-- Navigation Bar  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Header images -->
    <div class="types">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-3 trashimg col-sm-6">
                    <div class="trash">
                        <img src="images/trash5.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-3 trashimg col-sm-6">
                    <div class="trash">
                        <img src="images/trash1.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-3 trashimg col-sm-6">
                    <div class="trash">
                        <img src="images/trash4.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-3 trashimg col-sm-6">
                    <div class="trash">
                        <img src="images/trash3.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Buy Heading -->
    <div class="buy my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center text-capitalize">want to buy recycleable products?</h1>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-center fw-bold">Almost everyone can be less wasteful, by throwing less stuff away while it's still useful - and even by buying less to. Susan Meredith, Why Should I Recycle?&Just as we cannot blame others for destroying the environment, so we cannot look to others to protect the environment. Responsibility for both begins at home."</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Form section -->
    <div class="forms my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="row justify-content-start mb-3">
                            <div class="col-md-4 mt-2">
                                <label for="exampleInputEmail1" class="form-label text-capitalize">first name</label>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Enter your first name">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="exampleInputEmail1" class="form-label text-capitalize">last name</label>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Town/City</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your yown/city">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Area, HouseNo.</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your area, house number">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-5">
                            <label for="waste type" class="form-label">Select recycleable prduct type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose product type from this drop-down menu</option>
                                <option value="1">Plastic</option>
                                <option value="2">Glass</option>
                                <option value="3">Paper</option>
                                <option value="4">Electronic Waste</option>
                                <option value="5">Wood</option>
                                <option value="6">Other</option>
                              </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  


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