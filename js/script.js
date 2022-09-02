function validateform() {
    var usern = document.forms["loginform"]["username"].value
    if (usern == "" || usern == null) {
        document.getElementById('usererrormsg').style.color = '#ff3f34';
        document.getElementById('usererrormsg').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('username').style.borderColor = '#ff3f34';
        return false;
    }
    var pass = document.forms["loginform"]["password"].value
    if (usern == "" || usern == null) {
        document.getElementById('usererrormsg').style.color = '#ff3f34';
        document.getElementById('usererrormsg').innerHTML = '<span style="font-size:12px;">Password connot be empty</span>';
        document.getElementById('username').style.borderColor = '#ff3f34';
        return false;
    }
}
