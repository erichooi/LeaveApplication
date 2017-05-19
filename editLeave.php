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
    echo "<h2 style='margin-left: 20px;'>Manage Leave</h2>";

    $sql = "SELECT user.username, staff_leave.statusID, staff_leave.leaveID FROM user JOIN staff_leave ON user.userID=staff_leave.userID";
    $result = $conn->query($sql);

    $getStatus = "SELECT * FROM staff_leave_status";
    $getStatusResult = $conn->query($getStatus);

    $status = array();
    if ($getStatusResult->num_rows > 0) {
        while ($data = $getStatusResult->fetch_assoc()) {
            $status[$data["statusID"]] = $data["statusName"];
        }
    }

    echo "<form method='post' action='chooseStatus.php'>";
    if ($result->num_rows > 0) {
        echo "<table class='vUserTable'><tr><th>Staff Name</th><th>Status</th><th>Edit</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $html = "<tr>";
            $html .= "<td>".$row["username"]."</td>";
            foreach ($status as $statusID => $statusName) {
                if ($statusID == $row["statusID"]) {
                    $html .= "<td>".$statusName."</td>";
                }
            }
            $html .= "<td><button class='editClass' name='leaveID' value='".$row["leaveID"]."'></button></td>";
            echo $html;
        }
        echo "</table></form>";
    }

    $conn->close();
 ?>
