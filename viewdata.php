<?php
require "connection.php";
$view_all = "SELECT * FROM students_records";
$check = mysqli_query($con, $view_all);
if (mysqli_num_rows($check) > 0) {
    echo "<center>";
    echo "<table cellpadding='6' cellspacing='4' style='color:cyon' border='2'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>SERVICE NO</th>";
    echo "<th>RANK</th>";
    echo "<th>NAME</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($check)) {
        echo "<tr>";
        echo "<td>" . $row["id"]."</td>";
        echo "<td>" . $row["service_no"]."</td>";
        echo "<td>" . $row["rank"]."</td>";
        echo "<td>" . $row["lname"]."</td>";
    }
    echo "</table>";
    echo "</center>";
}
?>