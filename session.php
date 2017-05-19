<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "thisismba";
    $dbname = "db_eric";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "SELECT userID, username, password, groupID FROM user";
    $result = $conn->query($sql);
    $exist = False;
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($username == $row["username"] && $password == $row["password"]) {
                $userID = $row["userID"];
                $exist = True;
                $group = $row["groupID"];
            }
        }
    }

    $expire = time()+60*60*24*30;

    if ($exist) {
        setcookie("userID", $userID, $expire);
        switch ($group) {
            case 1:
                $_SESSION["Group"] = "admin";
                header("Location: admin.php");
                break;
            case 2:
                $_SESSION["Group"] = "staff";
                header("Location: staff.php");
                break;
            case 3:
                $_SESSION["Group"] = "manager";
                header("Location: manager.php");
                break;
        }
    } else {
        echo "<h1>Username or Password incorrect</h1>";
        echo "<p><a href='login.php'>Link to login page</a></p>";
    }


    $conn->close();
 ?>
