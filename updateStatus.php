<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $statusID = $_POST["statusID"];
    $leaveID = $_POST["leaveID"];

    $sql = "UPDATE staff_leave SET statusID=".$statusID." WHERE leaveID=".$leaveID;
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ".$conn->error;
    }

    $conn->close();
 ?>
