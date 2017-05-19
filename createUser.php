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
    <script src="js/admin.js" charset="utf-8"></script>
</head>

<h2 style="padding-left: 20px;">Add User</h2>
<form class="createUserForm" action="create.php" method="post" onSubmit="return verifyInput();">
    <table style="padding-left: 20px;">
        <tr>
            <td>Username: </td>
            <td><input type="text" name="username" placeholder="Username"></td>
        </tr>
        <tr>
            <td>Phone: </td>
            <td><input type="text" name="phone" placeholder="Phone Number"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" id="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" id="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td>Confirm Password: </td>
            <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"></td>
        </tr>
        <tr>
            <td>Group: </td>
            <td>
                <select class="" name="group">
                <?php
                    $sql = "SELECT groupID, groupName FROM user_group";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value=\"".$row["groupID"]."\">".$row["groupName"]."</option>";
                        }
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right"><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>

<?php
$conn->close();
?>
