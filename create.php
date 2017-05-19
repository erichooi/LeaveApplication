<?php
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
 ?>

<?php
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $groupID = $_POST["group"];
    $sql = "INSERT INTO user (username, phone, email, password, groupID) VALUES ('".$username."', '".$phone."', '".$email."', '".$password."', ".$groupID.")";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ".$conn->error;
    }
 ?>

<?php
$conn->close();
 ?>
