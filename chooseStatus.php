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

    $leaveID = $_POST["leaveID"];

    $getStatus = "SELECT * FROM staff_leave_status";
    $getStatusResult = $conn->query($getStatus);

    $getLeaveStatus = "SELECT statusID FROM staff_leave WHERE leaveID=".$leaveID;
    $getLeaveStatusResult = $conn->query($getLeaveStatus);

    $statusID = $getLeaveStatusResult->fetch_assoc()["statusID"];

    $status = array();
    if ($getStatusResult->num_rows > 0) {
        while ($data = $getStatusResult->fetch_assoc()) {
            $status[$data["statusID"]] = $data["statusName"];
        }
    }

    echo "<form method='post' action='updateStatus.php'>";
    foreach ($status as $sID => $sName) {
        if ($sID == $statusID) {
            echo "<input type='radio' name='statusID' value='".$sID."' checked>".$sName."<br>";
        } else {
            echo "<input type='radio' name='statusID' value='".$sID."'>".$sName."<br>";
        }
    }
    echo "<input type='hidden' name='leaveID' value='".$leaveID."'>";
    echo "<br><input type='submit' value='submit'></form>";

    $conn->close();
 ?>
