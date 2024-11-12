<?php

include 'connection.php';



$sql = 	"CREATE TABLE `flight` (
    `Airline` varchar(55) NOT NULL,
    `Source` varchar(55) NOT NULL,
    `Destination` varchar(55) NOT NULL,
    `Departure` varchar(10) NOT NULL,
    `Arrival` varchar(10) NOT NULL,
    `Class` varchar(55) NOT NULL,
    `seats` int(11) NOT NULL,
    `Description` varchar(266) NOT NULL,
    `Image` longblob NOT NULL,
    `Price` double NOT NULL,
    `Date` date NOT NULL,
    PRIMARY KEY (`Airline`,`Source`,`Destination`,`Departure`,`Arrival`,`Class`,`Date`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$result = $conn-> query($sql);

$sql = "CREATE TABLE `flightbookings` (
    `user` varchar(55) NOT NULL,
    `airline` varchar(55) NOT NULL,
    `source` varchar(55) NOT NULL,
    `destination` varchar(55) NOT NULL,
    `departure` varchar(55) NOT NULL,
    `arrival` varchar(55) NOT NULL,
    `class` varchar(55) NOT NULL,
    `date` date NOT NULL,
    `reserved` int(11) NOT NULL,
    PRIMARY KEY (`user`,`airline`,`source`,`destination`,`departure`,`arrival`,`class`,`date`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$result = $conn-> query($sql);

$sql = "CREATE TABLE `hotel` (
    `name` varchar(55) NOT NULL,
    `room` varchar(55) NOT NULL,
    `capacity` int(11) NOT NULL,
    `available` int(11) NOT NULL,
    `price` float NOT NULL,
    `date` date NOT NULL,
    `image` longblob NOT NULL,
    `location` varchar(55) NOT NULL,
    `description` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`name`,`room`,`date`,`location`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$result = $conn-> query($sql);

$sql = "CREATE TABLE `hotelbookings` (
    `user` varchar(55) NOT NULL,
    `name` varchar(55) NOT NULL,
    `room` varchar(55) NOT NULL,
    `location` varchar(55) NOT NULL,
    `date` date NOT NULL,
    PRIMARY KEY (`user`,`name`,`room`,`location`,`date`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$result = $conn-> query($sql);

$sql = "CREATE TABLE `signin` (
    `fname` varchar(55) NOT NULL,
    `lname` varchar(55) NOT NULL,
    `email` varchar(55) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`email`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$result = $conn-> query($sql);
?>