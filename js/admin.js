function clearCright() {
    document.getElementById('cright').innerHTML = '';
}

function getCreateUser() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="createUser.php"></object>';
}

function getViewUser() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="viewUser.php"</object>';
}

function getEditUser() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="editUser.php"</object>';
}

function getDeleteUser() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="deleteUser.php"</object>';
}

function verifyInput() {
    var password = document.getElementById("password").value;
    var password1 = document.getElementById("confirm_password").value;

    var email = document.getElementById("email").value;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(email)) {
        alert("Email format incorrect!");
        return false;
    }

    if (password === password1) {
        return true;
    } else {
        alert("Password does not match!");
        return false;
    }
}

function logout() {
    var a = confirm("Do you really want to logout?");
    if (a) {
        window.location.href = "logout.php";
    }
}
