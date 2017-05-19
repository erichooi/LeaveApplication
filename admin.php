<?php
    session_start();
    if ($_SESSION["Group"] != "admin") {
        header("Location: login.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/admin.js" charset="utf-8"></script>
    <title>Admin</title>
</head>
<body>
    <div class="header">
        <h1 style="text-align: center">Admin Page</h1>
    </div>
    <div class="content">
        <div class="cleft">
            <table style="width: 100%; text-align: center">
                <tr>
                    <td><button type="button" onclick="getCreateUser()">Add User</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="getViewUser()">View User</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="getEditUser()">Edit User</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="getDeleteUser()">Delete User</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="logout()">Logout</button></td>
                </tr>
            </table>
        </div>
        <div class="cright" id="cright">
            <object style="height: 100%; width: 100%;" type="text/html" data="createUser.php"></object>
        </div>
    </div>
    <div class="footer"></div>
</body>
</html>
