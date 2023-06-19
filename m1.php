<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/finalindex.css">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <style>    
    </style>
</head>
<body>
    <!-- Navigation Bar  -->
    <div id="header" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2">
                    <h1 id="logo"><i class="fa fa-recycle" style="color: whitesmoke;"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About/about.php">About Us</a></li>
                        <li><a href="service/services.php">Services</a></li>
                        <li><div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Login/SignUp
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="login.php">User Login</a></li>
                              <li><a class="dropdown-item" href="Admin/login.php">Admin Login</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    

<!-- carousel images -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/front.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block first pt-lg-5n">
                    <h5> 
                        <h1 class="title text-capitalize"><i class="fas fa-quote-left"></i> an attempt towards zero
                            waste and green environment with recycling!
                    </h5>
                    <p>
                        India generates 62 million tonnes of waste every year, of which less than 60% is collected and
                        around 15% processed.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/baner(2).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block ">

                    <h1>Recycle it all , No matter how small !</h1>
                    <h2>Reduce | Reuse | Recycle</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/baner(3).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h1>Think before you trash it!</h1>
                    <h2>Recycle it Instead.</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Our Mission Section -->
    <div class="container section my-5 ">
        <div class="row" style="text-align: center;">
            <div class="col-md-12">
                <h2 class="section-head mb-5">Our Mission</h2>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="fas fa-recycle"></i>
                    <h3>Recycle Products</h3>
                    <p>When you put the whole picture together, recycling is the right thing to do.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="fab fa-pagelines"></i>
                    <h3>Responsible Production</h3>
                    <p>Being green is more than just buying "eco". It is an unshakable commitment to a sustainable
                        lifestyle.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box ">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Increase Recycling Rate</h3>
                    <p>High recycling rates are essential for cities to minimise waste disposal costs, environmental and
                        climate impacts, and to work towards zero waste.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials section -->
    <div id="testimonials">
        <div class="container section mb-5 mt-3">
            <div class="col-md-12">
                <h2 class="section-head mb-5 text-center">Testimonials</h2>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-3 reviews mx-1 p-5 text-center">
                    <i class="fas fa-user-circle fa-4x mb-3" style="color:#053008d3;"></i>
                    <p><i class="fas fa-quote-left"></i> Thankyou for the amazing services! We are happy with the
                        results. <i class="fas fa-quote-right"></i></p>
                    <p class=" fw-bold text-dark text-center"> ~Raman Sharma</p>
                </div>
                <div class="col-md-3 reviews mx-1 p-5 text-center">
                    <i class="fas fa-user-circle fa-4x mb-3" style="color:#053008d3;"></i>
                    <p><i class="fas fa-quote-left"></i> Green Trash is the best solution to recycle waste in the most
                        accurate and convenient way. <i class="fas fa-quote-right"></i></p>
                    <p class=" fw-bold text-dark"> ~Jessica Sinha</p>
                </div>
                <div class="col-md-3 reviews mx-1 p-5 text-center">
                    <i class="fas fa-user-circle fa-4x mb-3" style="color:#053008d3;"></i>
                    <p><i class="fas fa-quote-left"></i> Green Trash is very simple to use. This work is great. <i
                            class="fas fa-quote-right"></i></p>
                    <p class=" fw-bold text-dark"> ~Ravi</p>
                </div>
            </div>
        </div>
    </div>
    <!-- News section -->
    <div id="news" class="container section mb-4">
        <div class="row" style="text-align: center;">
            <div class="col-md-12">
                <h2 class="section-head py-4">Recent News</h2>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-4 col-lg-3">
                    <div class="news-post">
                        <img src="images/waste1.jpg" alt="">
                        <h3>Electronic Waste</h3>
                        <p>When electronics are mishandled during disposal, these chemicals end up in our soil, water,
                            and air.</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="news-post">
                        <img src="images/waste2.jpg" alt="">
                        <h3>Plastic Waste</h3>
                        <p>The most visible and disturbing impacts of marine plastics are the ingestion, suffocation and
                            entanglement of hundreds of marine species.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="news-post">
                        <img src="images/waste3.jpg" alt="">
                        <h3>Paper Waste</h3>
                        <p> When paper rots, it emits methane gas which is 25 times more toxic than CO2.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="news-post">
                        <img src="images/foodwaste.jpeg" alt="">
                        <h3>Food Waste</h3>
                        <p>throwing away one burger wastes the same amount of water as a 90 minute shower. Food waste
                            produces eight per cent of global greenhouse gas emissions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->
    <div id="footer-sidebar">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4>About This Approach</h4>
                        <p>The approach of this web app is to automate and extend the rate of recycling procedure with
                            tech-support and to establish a connection among the people and organizations dealing in
                            waste-to-product conversion. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4> Read More</h4>
                        <ul class="latest-news">
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Read more about us</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Sell recycleable products</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Buy recycleable products</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i> Learn more about recycling</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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