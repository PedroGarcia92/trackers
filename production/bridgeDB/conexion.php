<?php

$servername="localhost";
$username="root";
$password="mexcal18";
$dbname="jetgpsdb";

/*
$servername="mysqlcluster15";
$username="jetgps";
$password="Mexcal18";
$dbname="jetgpsdb";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>				
