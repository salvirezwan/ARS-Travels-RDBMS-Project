<?php
$conn = mysqli_connect("localhost", "root", "", "rdbms");
if($conn-> connect_error){
    die("Connection failed :". $conn-> connect_error);
}
?>