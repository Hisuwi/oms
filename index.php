<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitol University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-start">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-logo d-flex" href="#">
                <img src="img/logo1.png" alt="Logo">
            </a>

            <!-- Title -->
            <span class="navbar-title">Fodella</span>



            <!-- Search Icon and Bar -->
        <div class="d-flex justify-content-end w-100 mt-1">
            <div class="input-group search-container">
                <span class="input-group-text bg-white border-0">
                    <i class="bi bi-search search-icon"></i>
                </span>
                    <input type="text" class="search-bar form-control border-0" placeholder="Search...">
            </div>
        </div>


        <!-- Navbar Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Order Now</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Our Service</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><a class="dropdown-item" href="#">Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</div>

<div id="img-slider">
    <div class="container d-flex justify-content-center w-50 w-md-75 w-sm-100 mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slideshow-img-2.png" class="rounded img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slideshow-img-3.png" class="rounded img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slideshow-img-4.png" class="rounded img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slideshow-img-5.png" class="rounded img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div id="offer">
    <div class="container d-flex justify-content-center w-lg-20 w-md-25 w-sm-100">
        <div class="container-offer d-flex justify-content-center flex-wrap">
            <h1 class="offer-title">What we offer?</h1>
            <div>
                <img src="img/offer-1.png" alt="Offer 1">
                <p>Ensures quality of delivery <br>and packaging</p>
            </div>
            <div>
                <img src="img/offer-2.png" alt="Offer 2">
                <p>Real-time GPS tracking</p>
            </div>
            <div>
                <img src="img/offer-3.png" alt="Offer 3">
                <p>Multiple payment methods<br> available</p>
            </div>
            <div>
                <img src="img/offer-4.png" alt="Offer 4">
                <p>Less Delivery fee cost</p>
            </div>
            <div>
                <img src="img/offer-5.png" alt="Offer 5">
                <p>Earn promos and discounts</p>
            </div>
        </div>
    </div>
</div>
<br>

<div id="review">
    <div class="container d-flex justify-content-center w-lg-20 w-md-25 w-sm-100">
        <div class="container-review d-flex justify-content-center flex-wrap">
            <h1 class="review-title">What our Top Clients Say?</h1>
            <div>
                <img src="img/review-img-1.png" alt="Offer 1">
                <img src="img/review-star.png">
                <p>The website is user-friendly,<br> and placing orders is quick and<br>  seamless. The delivery is always on time,<br>  and the food arrives hot and fresh.<br>  Plus, there are so many<br>  options to choose from! Highly <br> recommend this platform to<br>  anyone looking for a reliable food<br>  delivery service.</p>
                
            </div>
            <div>
                <img src="img/review-img-2.png" alt="Offer 2">
                <img src="img/review-star.png">
                <p>The variety of restaurants<br>  is fantastic,  and the tracking <br> feature keeps me updated<br>  on my order. My food always<br>  arrives fresh,  and the <br> customer support team<br>  is responsive and helpful. <br> Definitely  my go-to for quick meals!</p>
            </div>
            <div>
                <img src="img/review-img-3.png" alt="Offer 3">
                <img src="img/review-star.png">
                <p>The menu filters help me <br> find exactly what I am craving, <br> and the reviews are reliable.<br>  My orders arrive faster than expected, <br> and the packaging is <br> eco-friendly. Great job, team!</p>
            </div>
        </div>
    </div>
</div>
<br>
<div id="video">
    <div class="container d-flex justify-content-center">
        <div class="container-video d-flex justify-content-center flex-wrap">
            <h1 class="video-title">Youtube Videos</h1>
            <div class="video-container">
                <iframe class="video-iframe" src="https://www.youtube.com/embed/OZzoAw9QHXY?si=YLKcyMRDP7Hxs8hH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe class="video-iframe" src="https://www.youtube.com/embed/NI8MX4TbqRo?si=ZYfPZza025icfmRf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<br>
<div id="map">
    <div class="container d-flex justify-content-center">
        <div class="container-map d-flex justify-content-center flex-wrap">
            <h1 class="map-title">Our Location</h1>
            <div class="map-container">
                <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9385.462675254426!2d124.65620841330313!3d8.489564112720931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fff2e7ff6d2ec9%3A0x180566d5585d5301!2sCapitol%20University!5e0!3m2!1sen!2sph!4v1732840888296!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<br><br>

<div id="footer">
    <div class="container">
        <div class="row text-center text-lg-start">
            <!-- About Us Section -->
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <h2 class="fw-bold text-center">About Us</h2>
                <p class="text-justify">
                    "At Foodella, we believe the best dishes are the ones that remind you of childhood.
                    A portion of great food should make you feel like you are wrapped in a warm blanket.
                    At our location in Cagayan de Oro City or online, you will find the best dishes you 
                    didn't know you craved: extra-creamy mac and cheese, hot chicken casserole, fried dumplings 
                    like your mama makes, and many more. Forget about the daily stress and come relax with us. 
                    After tasting any of our menu items, you will never want to leave!"
                </p>
            </div>

            <!-- Contact Us Section -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="fw-bold text-center">Contact Us</h2>
                <ul class="list-unstyled text-center">
                    <li class="mb-2"><i class="fas fa-map-marker-alt"></i> Capitol University, Osmena Street, Cagayan de Oro City</li>
                    <li class="mb-2"><i class="fas fa-envelope"></i> foodella@gmail.com</li>
                    <li class="mb-2"><i class="fas fa-phone"></i> +630021737483</li>
                    <li><i class="far fa-clock"></i> Mon-Sat 8AM - 5PM | Sunday 8AM - 12PM</li>
                </ul>

                <!-- Social Media Icons (Centered on Mobile) -->
                <div class="d-flex justify-content-center">
                    <a href="#" class="me-3 text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>