<?php
    session_start();
    if ($_SESSION["Group"] != "staff") {
        header("Location: login.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/staff.css">
    <script src="js/staff.js" charset="utf-8"></script>
    <title>Staff</title>
</head>
<body>
    <div class="header">
        <h1 style="text-align: center;">Staff Page</h1>
    </div>
    <div class="content">
        <div class="cleft">
            <table style="width: 100%; text-align: center">
                <tr>
                    <td><button type="button" onclick="getEditStaff()">Edit Profile</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="getApplyLeave()">Apply Leave</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="viewLeave()">View Leave Status</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="logout()">Logout</button></td>
                </tr>
            </table>
        </div>
        <div class="cright" id="cright">
            <object style="height: 100%; width: 100%;" type="text/html" data="editStaff.php"></object>
        </div>
    </div>
    <div class="footer"></div>
</body>
</html>
