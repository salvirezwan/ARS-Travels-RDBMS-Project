
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rdbms";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    if (isset($_GET['email']) && isset($_GET['code']))
    {
        $verificationCode=$_GET['code'];
        $email=$_GET['email']; 

        $sql = "UPDATE signin SET verified = 1 WHERE code = ? AND email = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $verificationCode, $email);

        if ($stmt->execute()) {
            // Verification successful
            echo 'Email verified successfully. You can now log in.';
        } else {
            // Verification failed
            echo 'Email verification failed. Please try again or contact support.';
        }

    // Close the database connection
    $stmt->close();
    $conn->close();
    }
}

?>



