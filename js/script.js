function validateform() {
    var usern = document.forms["loginform"]["username"].value
    if (usern == "" || usern == null) {
        document.getElementById('usererrormsg').style.color = '#ff3f34';
        document.getElementById('usererrormsg').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('username').style.borderColor = '#ff3f34';
        return false;
    }
    var pass = document.forms["loginform"]["password"].value
    if (pass == "" || pass == null) {
        document.getElementById('passerrormsg').style.color = '#ff3f34';
        document.getElementById('passerrormsg').innerHTML = '<span style="font-size:12px;">Password connot be empty</span>';
        document.getElementById('password').style.borderColor = '#ff3f34';
        return false;
    }
}

function validateform_reg() {
    var usern = document.forms["regform"]["username"].value
    if (usern == "" || usern == null) {
        document.getElementById('regusererr').style.color = '#ff3f34';
        document.getElementById('regusererr').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('username').style.borderColor = '#ff3f34';
        return false;
    }
    var usern = document.forms["regform"]["email"].value
    if (usern == "" || usern == null) {
        document.getElementById('regemailerr').style.color = '#ff3f34';
        document.getElementById('regemailerr').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('email').style.borderColor = '#ff3f34';
        return false;
    }
    var usern = document.forms["regform"]["email"].value
    if (usern == "" || usern == null) {
        document.getElementById('regemailerr').style.color = '#ff3f34';
        document.getElementById('regemailerr').innerHTML = '<span style="font-size:12px;">Username connot be empty</span>';
        document.getElementById('email').style.borderColor = '#ff3f34';
        return false;
    }
}
