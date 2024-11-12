<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

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
        <a href="book.php">Book</a>
        <a href="signin.php">Sign Up</a>
    </nav>


<div id="menu-btn" class="fas fa-bars"></div>


</section>


<!-- booking section starts -->


<section class="booking">

    <h1 class = "heading-title">Book your hotel!</h1>
    <form action = "hoteldisplay.php" method = "get" class="book-form">

        <div class="flex">

            <div class="inputBox">
                <span>To :</span>
                <input type="text" placeholder = "enter your destination" name="location">
            </div>
            <div class="inputBox">
                <span>number of travelers :</span>
                <input type="number" placeholder = "number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrival date :</span>
                <input type="date" name="arrivals">
            </div>
        </div>

        <div class="submit"><input type="submit" value="Search" class="btn" name="send"></div>
        

    </form>

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