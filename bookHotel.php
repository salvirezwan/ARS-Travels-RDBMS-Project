<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "rdbms";   
    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{    
        $email =  $_POST["email"];
        $password = $_POST["password"];

        $name = $_GET["name"];
        $location = $_GET["location"];
        $date = $_GET["date"];
        $room = $_GET["room"];
        $available = $_GET["available"];
        $available = $available;


        $sql = "SELECT password FROM signin where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            // Verify the user-provided password against the hashed password from the database
            if (password_verify($password, $row['password'])){
                
                $sql = "UPDATE hotel SET available = '$available' where name = '$name' and location = '$location' and room = '$room' and `date` ='$date'";
                $result = $conn-> query($sql);
                $sql = "insert into hotelbookings values ('$email', '$name', '$room', '$location', '$date')";
                $result = $conn-> query($sql);
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

    }
?>