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

<head>
    <link rel="stylesheet" href="css/admin.css">
</head>

<h2 style="margin-left: 20px;">Delete User</h2>
<?php
    $sql = "SELECT user.userID, user.username FROM user JOIN user_group WHERE user.groupID=user_group.groupID";
    $result = $conn->query($sql);

    echo "<form method='post' action='delete.php'>";
    if ($result->num_rows > 0) {
        echo "<table class='vUserTable'><tr><th>Username</th><th>Edit</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["username"]."</td><td><button type='submit' name='delete' value='".$row["userID"]."'><img src='img/clear-button.png' height='20' width='20' /></button></td></tr>";
        }
        echo "</table></form>";
    }
?>

<?php
$conn->close();
?>
