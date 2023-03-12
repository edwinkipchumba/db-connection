<?php
$host="localhost";
$username="root";
$password="";
$database="tic_15";
$con=mysqli_connect($host,$username,$password,$database);
if($con){
    // echo "connection to database successful";
} else {
    echo"connection failed" .mysqli_connect_error() ."<a href='home.php'></a>";
}
?>