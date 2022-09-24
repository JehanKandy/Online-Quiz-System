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
    var email = document.forms["regform"]["email"].value
    if (email == "" || email == null) {
        document.getElementById('regemailerr').style.color = '#ff3f34';
        document.getElementById('regemailerr').innerHTML = '<span style="font-size:12px;">Email connot be empty</span>';
        document.getElementById('email').style.borderColor = '#ff3f34';
        return false;
    }
    var pass = document.forms["regform"]["password"].value
    if (pass == "" || pass == null) {
        document.getElementById('regpasserr').style.color = '#ff3f34';
        document.getElementById('regpasserr').innerHTML = '<span style="font-size:12px;">Password connot be empty</span>';
        document.getElementById('password').style.borderColor = '#ff3f34';
        return false;
    }
    var passlength = pass.length;
    if (passlength < 6) {
        document.getElementById('regpasserr').style.color = '#ff3f34';
        document.getElementById('regpasserr').innerHTML = '<span style="font-size:12px;">Password at least 6 characters</span>';
        document.getElementById('password').style.borderColor = '#ff3f34';
        return false;
    }
    var cpass = document.forms["regform"]["cpassword"].value
    if (cpass == "" || cpass == null) {
        document.getElementById('regcpasserr').style.color = '#ff3f34';
        document.getElementById('regcpasserr').innerHTML = '<span style="font-size:12px;">Confirm Password connot be empty</span>';
        document.getElementById('cpassword').style.borderColor = '#ff3f34';
        return false;
    }
    if (pass != cpass) {
        document.getElementById('regcpasserr').style.color = '#ff3f34';
        document.getElementById('regpasserr').style.color = '#ff3f34';
        document.getElementById('password').style.borderColor = '#ff3f34';
        document.getElementById('cpassword').style.borderColor = '#ff3f34';
        document.getElementById('regpasserr').innerHTML = '<span style="font-size:12px;">Password Does not Match</span>';
        document.getElementById('regcpasserr').innerHTML = '<span style="font-size:12px;">Password Does not Match</span>';
        return false;
    }
}
const menu_toggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');

menu_toggle.addEventListener('click', () => {
    menu_toggle.classList.toggle('is-active');
    sidebar.classList.toggle('is-active');
});

$(document).ready(function() {
    $('#myTable').DataTable();
});

function togglemenu() {
    document.getElementById('sidebar').classList.toggle('active');
}

function passnew() {
    var newpassemail = document.forms["new_pass_edit"]["passnewemail"].value
    if (newpassemail == "" || newpassemail == null) {
        document.getElementById('emailerror').style.color = '#ff3f34';
        document.getElementById('emailerror').innerHTML = '<span style="font-size:12px;">Email Connot be empty...!</span>';
        document.getElementById('passnewemail').style.borderColor = '#ff3f34';
        return false;
    }

    var newpass = document.forms["new_pass_edit"]["newpass"].value
}
