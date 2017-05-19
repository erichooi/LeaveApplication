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
    $userID = $_POST["delete"];
    $sql = "DELETE FROM user WHERE userID=".$userID;

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: ".$conn->error;
    }
?>

<?php
$conn->close();
?>
