<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "UPDATE user SET username='".$_POST["username"]."', password='".$_POST["password"]."', email='".$_POST["email"]."', phone='".$_POST["phone"]."', groupID='".$_POST["group"]."' WHERE userID=".$_POST["userID"];
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ".$conn->error;
    }

    $conn->close();
 ?>
