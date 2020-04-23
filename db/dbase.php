<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbase = "school";


$conn = mysqli_connect($servername,$username,$password,$dbase);

if($conn) 
        return $conn;
        die("Error:" . mysqli_connect_error());