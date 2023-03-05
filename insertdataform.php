<?php
require "connection.php";
$svc_no = $_POST["service_no"];
$rank = $_POST["rank"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$check = "SELECT * FROM students_records WHERE service_no='$svc_no'";
$confirm = mysqli_query($con, $check);
if (mysqli_num_rows($confirm) > 0) {
    while ($row = mysqli_fetch_assoc($confirm)) {
        echo "Record already exists <a href='index.html'> Try Again</a>";
    }
} 
else {
    $insert = "INSERT INTO students_records(service_no,rank,fname,lname)VALUES('$svc_no','$rank','$fname','$lname')";
    mysqli_query($con, $insert);
    echo"successfully added <a href='index.html'> add new student</a>";
}
?>