function clearCright() {
    document.getElementById('cright').innerHTML = '';
}

function getEditStaff() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="editStaff.php"</object>';
}

function getApplyLeave() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="applyLeave.php"</object>';
}

function viewLeave() {
    clearCright();
    document.getElementById('cright').innerHTML = '<object style="height: 100%; width: 100%;" type="text/html" data="viewLeave.php"</object>';
}

function logout() {
    var a = confirm("Do you really want to logout?");
    if (a) {
        window.location.href = "logout.php";
    }
}
