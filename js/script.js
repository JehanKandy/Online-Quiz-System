function loginvalidate() {
    var loginuser = document.forms['loginform']['username'].value
    if (loginuser == "" || loginuser == null) {
        document.getElementById('usererrormsg').style.color = '#ff3f34';
        document.getElementById('usererrormsg').innerHTML('Username Cannot Be empty');
        return false;
    }
}
