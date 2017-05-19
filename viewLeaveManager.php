<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    echo "<head><link rel='stylesheet' href='css/manager.css'></head>";
    echo "<h2 style='margin-left: 20px'>View Leave</h2>";

    $sql = "SELECT u.username, s.title, s.reason, s.startDate, s.endDate, v.statusName";
    $sql .= " FROM user u JOIN staff_leave s JOIN staff_leave_status v ON u.userID=s.userID AND v.statusID=s.statusID ORDER BY u.username ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='vUserTable'><tr><th>Username</th><th>Title</th><th>Reason</th><th>Start Date</th><th>End Date</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $html = "<tr>";
            $html .= "<td>".$row["username"]."</td>";
            $html .= "<td>".$row["title"]."</td>";
            $html .= "<td>".$row["reason"]."</td>";
            $html .= "<td>".$row["startDate"]."</td>";
            $html .= "<td>".$row["endDate"]."</td>";
            $html .= "<td>".$row["statusName"]."</td>";
            $html .= "</tr>";
            echo $html;
        }
        echo "</table>";
    }

    $conn->close();
 ?>
