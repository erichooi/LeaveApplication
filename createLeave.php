<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $userID = $_COOKIE["userID"];
    $title = $_POST["title"];
    $reason = $_POST["reason"];
    $startDate = $_POST["start"];
    $endDate = $_POST["end"];

    $sql = "INSERT INTO staff_leave (leaveID, userID, title, reason, startDate, endDate) VALUES ";
    $sql .= "(NULL, ".$userID.", '".$title."', '".$reason."', '".$startDate."', '".$endDate."')";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ".$conn->error;
    }

    $conn->close();
 ?>
