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
const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function() {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function() {
    sidebar.classList.toggle('hide');
})
