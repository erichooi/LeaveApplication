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

<h2 style="margin-left: 20px;">View User</h2>
<?php
    $sql = "SELECT user.userID, user.username, user.phone, user.email, user_group.groupName FROM user JOIN user_group WHERE user.groupID=user_group.groupID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='vUserTable'><tr><th>Username</th><th>Phone</th><th>Email</th><th>Group</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["username"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["groupName"]."</td></tr>";
        }
        echo "</table>";
    }
?>

<?php
$conn->close();
?>
