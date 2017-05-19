<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js" charset="utf-8"></script>
    <title>Login</title>
</head>
<body>
    <div class="header"></div>
    <div class="content">
        <form class="loginForm" action="session.php" method="post" onSubmit="return verifyPassword();">
            <h1>Login</h1>
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" id="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td>Confirm password: </td>
                    <td><input type="password" name="confirm_password" id="confirm_password" placeholder="confirm password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;"><input type="submit" name="loginButton" value="Login"></td>
                </tr>
            </table>
        <!-- </form> -->
    </div>
    <div class="footer"></div>
</body>
</html>
