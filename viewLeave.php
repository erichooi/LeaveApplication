<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    echo "<head><link rel='stylesheet' href='css/staff.css'></head>";
    echo "<h2 style='margin-left: 20px;'>View Leave Status</h2>";

    $userID = $_COOKIE["userID"];
    $sql = "SELECT l.title, l.reason, s.statusName FROM staff_leave l JOIN staff_leave_status s ON l.statusID=s.statusID WHERE l.userID='".$userID."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='vUserTable'><tr><th>Title</th><th>Reason</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["title"]."</td><td>".$row["reason"]."</td><td>".$row["statusName"]."</td></tr>";
        }
        echo "</table>";
    }

    $conn->close();
 ?>
