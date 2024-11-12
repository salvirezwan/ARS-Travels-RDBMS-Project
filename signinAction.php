<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rdbms";


// Validate and sanitize user inputs




$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $firstName = $_GET["fname"];
    $lastName = $_GET["lname"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $password = $_GET["password"]; // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    echo "".$email."";
    // Insert user data into the database
    $sql = "insert into signin (fname, lname, email, phone, password) values ('$firstName', '$lastName', '$email', '$phone', '$hashedPassword');";
    $result = $conn-> query($sql);


}
?>