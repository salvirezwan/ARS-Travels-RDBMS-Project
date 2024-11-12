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

        $seats = $_GET["seats"];
        $guests = $_GET["guests"];
        $airline = $_GET["airline"];
        $from = $_GET["from"];
        $to = $_GET["to"];
        $departure = $_GET["departure"];
        $arrival = $_GET["arrival"];
        $date = $_GET["date"];
        $class = $_GET["class"];


        $sql = "SELECT password FROM signin where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            // Verify the user-provided password against the hashed password from the database
            if (password_verify($password, $row['password'])){
                
                $sql = "UPDATE flight SET seats = '$seats' where airline = '$airline' and source = '$from' and destination = '$to' and departure = '$departure' and arrival = '$arrival' and `date` = '$date' and class = '$class'";
                $result = $conn-> query($sql);
                $sql = "insert into flightbookings values ('$email', '$airline', '$from', '$to', '$departure', '$arrival', '$class', '$date', '$guests')";
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