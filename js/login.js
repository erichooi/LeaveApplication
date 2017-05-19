function verifyPassword() {
    var password = document.getElementById("password").value;
    var password1 = document.getElementById("confirm_password").value;
    if (password === password1) {
        return true;
    } else {
        alert("Password is not the same");
        return false;
    }
}
