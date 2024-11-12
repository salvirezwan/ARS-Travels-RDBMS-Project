<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- custom css file links -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header starts -->
<section class="header">
    
    <a href="home.php" class="logo">ARS Travels</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="flight.php">Flights</a>
        <a href="hotel.php">Hotels</a>
        <a href="bus_ride.php">Buses</a>
        <a href="login.php">Bookings</a>
        <a href="signin.php">Sign Up</a>
    </nav>


<div id="menu-btn" class="fas fa-bars"></div>


</section>


<!-- home starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home1.jpg) no-repeat">
                <div class="content">
                    <span>Explore, discover and travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>    
            </div>

            <div class="swiper-slide slide" style="background:url(images/home2.avif) no-repeat">
                <div class="content">
                    <span>Explore, discover and travel</span>
                    <h3>Discover new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>    
            </div>

            <div class="swiper-slide slide" style="background:url(images/home3.avif) no-repeat">
                <div class="content">
                    <span>Explore, discover and travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>    
            </div>




        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>












<!-- services starts -->
<section class = "services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">

        <div class="box">
            <img src="images/flight.png" alt="">
            <h3></h3>
            <a href="flight.php" class="btn">Flights</a>
        </div>

        <div class="box">
            <img src="images/hotel.png" alt="">
            <h3></h3>
            <a href="hotel.php" class="btn">Hotels</a>
        </div>

        <div class="box">
            <img src="images/bus.jpg" alt="">
            <h3></h3>
            <a href="bus_ride.php" class="btn">Bus Rides</a>
        </div>

</div>




</section>






<!-- home about section -->
<section class="home-about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium voluptatibus reiciendis natus, quaerat beatae error eligendi excepturi consectetur corporis! Repellat dolor hic quia iure, error impedit perferendis libero. Cumque laudantium velit ad praesentium dolorem cupiditate adipisci voluptate nisi necessitatibus, tempore nulla optio quidem ut quas?</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</section>




<!-- home packages -->

<section class="home-packages">
    <h1 class="heading-title">Our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src = "images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>


        <div class="box">
            <div class="image">
                <img src = "images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>


        <div class="box">
            <div class="image">
                <img src = "images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>


    </div>


    <div class="load-more"> <a href="package.php" class="btn">Load more</a> </div>

</section>






<!-- home offer -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod laborum odio officia reiciendis. Aperiam illum sint impedit ex quasi magnam beatae nisi nihil quia facilis velit fuga, quo repudiandae aliquam.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
















<!-- footer starts -->

<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
    </div>


    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> Ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
    </div>

    <div class="box">
        <h3>Contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +2535325325</a>
        <a href="#"><i class="fas fa-phone"></i>+474575547</a>
        <a href="#"><i class="fas fa-envelope"></i>salvirezwanislam@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Dhaka,Bangladesh</a>
    </div>


    <div class="box">
        <h3>Follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>


    </div>

     <div class="credit">created by <span>Rezwan Islam Salvi</span> | all rights reserved!</div>

</section>

<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src = "js/script.js"></script>
    
</body>
</html>