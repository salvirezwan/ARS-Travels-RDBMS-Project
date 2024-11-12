<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking details</title>

    <!-- Add your existing CSS and external links here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css">

    <style>
        
        body{
        margin: 0px 0px;
        padding: 0px 0px;
        border: 2px solid red;
        width: 100%;
    }


        .section {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 1557px 755px;
            text-align: center;
        }


        .section:nth-child(1n) {
            background-image: url('images/f5.avif');
        }

        .section:nth-child(2n) {
            background-image: url('images/a.jpg');
        }
        


    .box1{
        border: 2px solid red;
        width: 750px;
        height: 307px;
        margin: 40px 30px;
        padding: 70px 0px;
        display: inline-flex;
        position: relative;
        top:-20px; 
        left:-100px; 
        right:0;
        background-color: #ECF4D6;
    }


    .box2 {
        position: relative;
        width: 180px;
        height: 242px;
        border: 2px solid green;
        margin: -47px 30px;
    }

    .box2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .box3 {
        /* border: 2px solid violet; */
        width: 455px;
        height: 233px;
        margin: 40px 30px;
        padding: 20px; /* Adjust padding as needed */
        position: relative;
        top: -85px;
        left: -16px;
        display: inline-flex;
        flex-direction: column; /* Stack the text vertically */
        background-color:  #5FBDFF;
    }

    .box3 h1 {
        margin-bottom: 10px; 
        font-size: 22px; 
    }

    .box3 p {
        margin-bottom: 10px;
        font-size: 16px; 
    }

    .btn2:hover{
        background:var(--main-color);
    }

     .box4 {
        /* border: 2px solid violet; */
        width: 235px;
        height: 0px;
        margin: 74px 40px;
        padding: 20px; 
        position: absolute;
        top: 119px;
        right: 5px;
        display: inline-flex;
        text-align: center;
        flex-direction: column; 
       
    } 

    .box4 h3 {
        /* margin-bottom: 10px;  */
        font-size: 15px; 
    }

    .btn2 {
        display: inline-flex;
        background: var(--black);
        color: var(--white);
        margin: 4px 38px;
        padding: 7px 41px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border: 1px solid #ccc;
        font-size: 18px;
}

    .btn2:hover {
        background: var(--main-color);
    }



    

    </style>
</head>

<body>
    <!-- Your existing header goes here -->
    <section class="header">
        <a href="home.php" class="logo">ARS Travels</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="flight.php">Flights</a>
            <a href="hotel.php">Hotels</a>
            <a href="bus_ride.php">Buses</a>
            <a href="book.php">Book</a>
            <a href="login.php">Login</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <?php

    include 'connection.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT password FROM signin where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            // Verify the user-provided password against the hashed password from the database
            if (password_verify($password, $row['password'])){

                $sql = "select * from signin where email = '$email'";
                $result = $conn->query($sql);
                if($row = $result->fetch_assoc()){
                    $fname = $row["fname"];
                }

                $sql = "select * from hotelbookings where user = '$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Fetch the data into PHP variables
                    while ($row = $result->fetch_assoc()) {
                        $name = $row["name"];
                        $room = $row["room"];
                        $location = $row["location"];
                        $date = $row["date"];
                
                        // Now you can use these variables as needed
                        echo "<div class='section'>
                        <div class='box1'>
                            <div class='box2'>
                                <img src='images/sea_pearl.jpg' alt=''>
                            </div>
                            <div class = 'box3'>
                                <h1>Hotel Name: ".$name."</h1>
                                <p>Location: ".$location."</p>
                                <p>Room Type: ".$room."</p>
                                <p>Date: ".$date."</p>
                
                                
                            </div>
                        
                        </div>
                        </div>";
                    }
                }

                $sql = "select * from flightbookings where user = '$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Fetch the data into PHP variables
                    while ($row = $result->fetch_assoc()) {
                        $airline = $row["airline"];
                        $source = $row["source"];
                        $destination = $row["destination"];
                        $departure = $row["departure"];
                        $arrival = $row["arrival"];
                        $class = $row["class"];
                        $date = $row["date"];
                
                        // Now you can use these variables as needed
                        echo "<div class='section'>
                        <div class='box1'>
                            <div class='box2'>
                                <img src='images/etihad.jpg' alt=''>
                            </div>
                            <div class = 'box3'>
                                <h1>Airline: ".$airline."</h1>
                                <p>From: ".$source."</p>
                                <p>To: ".$destination."</p>
                                <p>Departure time: ".$departure."</p>
                                <p>Arrival time: ".$arrival."</p>
                                <p>Seat class: ".$class."</p>
                                <p>Date: ".$date."</p>
                            
                                </div>
                            </div>  
                        </div>";
                    }
                }

            }
            else {
                echo "failed";
                header("Location: signin.php");
            }
        }
        else {
            echo "Login failed. Please verify through email.";
            //header("Location: book.php");
        }
    ?>


    <!-- Add more sections as needed -->

    <!-- Your existing content goes here -->
    <div class="content">
        <!-- Add your content here -->
    </div>

    <!-- Your existing footer goes here -->
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


    <!-- Include noUiSlider JS and your additional scripts at the end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
    <script>

        const priceValues = document.getElementById('priceValues');
        const priceRange = document.getElementById('priceRange');

        noUiSlider.create(priceRange, {
            start: [0, 50000], // Initial range values
            connect: true, // Display a line between the handles
            range: {
                'min': 0,
                'max': 50000
            }
        });


        priceRange.noUiSlider.on('update', function (values) {
        const minPrice = Math.round(values[0]);
        const maxPrice = Math.round(values[1]);
        priceValues.innerText = `Selected Range: BDT ${minPrice} - ${maxPrice}`;
    });

        // // Update the price value display dynamically
        // priceRange.noUiSlider.on('update', function (values) {
        //     document.getElementById('minPriceOutput').innerText = Math.round(values[0]);
        //     document.getElementById('maxPriceOutput').innerText = Math.round(values[1]);
        // });

        function filterHotelsByPrice() {
            const [minPrice, maxPrice] = priceRange.noUiSlider.get();
            const hotels = document.querySelectorAll('.section');
            
            hotels.forEach(hotel => {
                const hotelPrice = parseInt(hotel.querySelector('.box4 h3').innerText.replace('Room price: ', '').replace(',', ''));
                
                if (hotelPrice >= minPrice && hotelPrice <= maxPrice) {
                    hotel.style.display = 'block';
                } else {
                    hotel.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>




<!-- hotel name, room type, location, date -->
<!-- airline, from, to, departure time, arrival time, class, date -->