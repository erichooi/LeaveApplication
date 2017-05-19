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

<h2 style="margin-left: 20px;">Edit Profile</h2>
<?php
    $userID = $_COOKIE["userID"];
    $sql = "SELECT * from user WHERE userID='".$userID."'";
    $sql_result = $conn->query($sql);

    if ($sql_result->num_rows > 0) {
        echo "<form method='post' action='update.php'><table style='margin-left: 20px'>";
        while ($row = $sql_result->fetch_assoc()) {
            $html = "<tr><td></td><td><input type='hidden' name='userID' value='".$userID."'></td></tr>";
            $html .= "<tr><td></td><td><input type='hidden' name='group' value='".$row["groupID"]."'></td></tr>";
            $html .= "<tr><td>Username: </td><td><input type='text' name='username' value='".$row["username"]."' /></td></tr>";
            $html .= "<tr><td>Phone: </td><td><input type='text' name='phone' value='".$row["phone"]."' /></td></tr>";
            $html .= "<tr><td>Email: </td><td><input type='text' name='email' value='".$row["email"]."' /></td></tr>";
            $html .= "<tr><td>Password: </td><td><input type='text' name='password' value='".$row["password"]."' /></td></tr>";
            $html .= "<tr><td></td><td style='text-align: right'><input type='submit' value='submit'></td>";
            echo $html;
        }
        echo "</table></form>";
    }
 ?>

 <?php
 $conn->close();
 ?>
