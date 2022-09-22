@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz@8..144&family=Rubik&family=Teko:wght@300&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.app {
    display: flex;
    min-height: 100vh;
}

.menu-toggle {
    display: none;
    position: fixed;
    top: 2rem;
    right: 2rem;
    width: 60px;
    height: 60px;
    border-radius: 99px;
    background-color: #464646;
    cursor: pointer;
}

.hamburger {
    position: relative;
    top: calc(50% - 2px);
    left: 50%;
    transform: translate(-50%, -50%);
    width: 32px;
}

.hamburger>span,
.hamburger>span::before,
.hamburger>span::after {
    display: block;
    position: absolute;
    width: 100%;
    height: 4px;
    border-radius: 99px;
    background-color: #FFF;
    transition-duration: .25s;
}

.hamburger>span::before {
    content: '';
    top: -8px;
}

.hamburger>span::after {
    content: '';
    top: 8px;
}

.menu-toggle.is-active .hamburger>span {
    transform: rotate(45deg);
}

.menu-toggle.is-active .hamburger>span::before {
    top: 0;
    transform: rotate(0deg);
}

.menu-toggle.is-active .hamburger>span::after {
    top: 0;
    transform: rotate(90deg);
}

.sidebar {
    flex: 1 1 0;
    max-width: 300px;
    padding: 2rem 1rem;
    background-color: #313131;
    border-top: 1px solid white;
}

.sidebar h3 {
    color: #707793;
    font-size: 0.75rem;
    text-transform: uppercase;
    margin-bottom: 0.5em;
}

.sidebar .menu {
    margin: 0 -1rem;
}

.sidebar .menu .menu-item {
    display: block;
    padding-left: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #FFF;
    text-decoration: none;
    transition: 0.2s linear;
    font-size: 20px;
}

.sidebar .menu i {
    margin-right: 15px;
}

.sidebar .menu .menu-item:hover {
    background-color: white;
    color: black;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    box-shadow: 0 2px 4px 0 rgba(31, 21, 165, 0.678), 0 3px 10px 0 rgba(31, 21, 165, 0.678);
}

.sidebar .profile-img {
    width: 100px;
    height: 100px;
    border-radius: 100px;
    margin-left: 80px;
    margin-bottom: 20px;
    border: 3px solid white;
    align-items: center;
}

.sidebar .profile-name {
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    margin-left: -15%;
}

.admin-content {
    z-index: -1;
}

.content {
    flex: 1 1 0;
    padding: 2rem;
}

.content h1 {
    color: #3C3F58;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.content p {
    color: #707793;
}

.admin-content {
    margin-top: 15px
}

.admin-content .grid {
    display: grid;
    min-width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(50px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d" "e f g h";
}

.admin-item1 {
    grid-area: a;
    height: 200px;
    border: none;
    border-radius: 5px;
    background: none;
    border: 1px solid rgb(29, 152, 235);
    font-size: 25px;
    color: rgb(29, 152, 235);
    font-family: 'Bebas Neue', cursive;
}

.std-hr {
    border-top: 1px solid rgb(29, 152, 235);
}

.admin-item2 {
    grid-area: b;
    height: 200px;
    border: none;
    border-radius: 5px;
    background: none;
    border: 1px solid #50be50;
    font-size: 25px;
    color: #50be50;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.tea-hr {
    border-top: 1px solid #50be50;
}

.admin-item3 {
    grid-area: c;
    height: 200px;
    border: none;
    border-radius: 5px;
    background: none;
    border: 1px solid #f09712;
    font-size: 25px;
    color: #f09712;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.admin-hr {
    border-top: 1px solid #f09712;
}

.admin-item4 {
    grid-area: d;
    height: 200px;
    border: none;
    border-radius: 5px;
    background: none;
    border: 1px solid #50be50;
    font-size: 25px;
    color: #50be50;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.qui-hr {
    border-top: 1px solid #50be50;
}

.admin-title {
    padding-top: 20px;
    padding-left: 30px;
}

.admin-body {
    text-align: center;
    padding-top: 25px;
    font-size: 30px;
}

.last-user {
    width: 100%;
}

.last-user thead {
    background-color: black;
    color: white;
    height: 40px;
}

.last-title {
    padding-bottom: 5px;
    font-size: 25px;
}

.lastuser-tbl {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
}

.lastuser-tbl tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.lastuser-tbl thead {
    background-color: rgb(29, 152, 235);
    color: white;
}

.lastuser-tbl thead tr {
    background-color: rgb(0, 128, 202);
    color: white;
    text-align: left;
    font-weight: bold;
    height: 40px;
}

.lastuser-tbl th,
td {
    padding: 12px 15px;
}

.lastuser-tbl tbody tr {
    border-bottom: 1px solid #dddddd;
}

.admin-comment .title {
    font-size: 30px;
}

.admin-comment-grid {
    display: grid;
    margin-top: 25px;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(100%, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c";
}

.comment1,
.comment2,
.comment3 {
    width: 100%;
    height: 100%;
    background: none;
    padding-top: 15px;
    padding-bottom: 25px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 5px;
}

.comment1 {
    border: 1px solid rgb(29, 152, 235);
}

.comment2 {
    border: 1px solid #50be50;
}

.comment3 {
    border: 1px solid #f09712;
}

.usern {
    font-size: 20px;
    font-weight: bold;
}

.user-roll {
    font-size: 13px;
}

.commet-body {
    padding-top: 10px;
}

.admin-msg {
    padding-top: 40px;
    padding-bottom: 40px;
}

.admin-msg .title {
    font-size: 30px;
}

.msg-grid {
    display: grid;
    margin-top: 25px;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(100%, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c";
}

.msg-item1,
.msg-item2,
.msg-item3 {
    width: 100%;
    height: 100%;
    background: none;
    padding-top: 15px;
    padding-bottom: 25px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 5px;
}

.msg-item1 {
    border: 1px solid red;
}

.msg-item2 {
    border: 1px solid red;
}

.msg-item3 {
    border: 1px solid red;
}

.msg-user {
    font-size: 20px;
    font-weight: bold;
}

.msg-roll {
    font-size: 13px;
}

.msg-body {
    padding-top: 10px;
}

.student-tbl {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    overflow: auto;
    white-space: nowrap;
    border-collapse: collapse;
}

.tbl-scorll {
    overflow-x: auto;
}

.student-tbl thead {
    background-color: #f09712;
    color: white;
}

.student-tbl thead tr {
    background-color: #f09712;
    color: white;
    text-align: left;
    font-weight: bold;
    height: 50px;
}

.student-tbl tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.student-tbl th,
td {
    padding: 12px 15px;
}

.student-tbl tbody tr {
    border-bottom: 1px solid #dddddd;
    height: 55px;
}

.active {
    background-color: #50be50;
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.deactive {
    background-color: red;
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.pending-tea {
    background-color: rgb(29, 152, 235);
    color: white;
    padding: 5px;
    border-radius: 5px;
}

.infor-btn {
    width: 50%;
    border: 1px solid rgb(29, 152, 235);
    height: 30px;
    border-radius: 5px;
    background: none;
    color: rgb(29, 152, 235);
    transition: 0.5s;
}

.infor-btn:hover {
    background-color: rgb(29, 152, 235);
    color: white;
    cursor: pointer;
}

.profile-img-data {
    width: 200px;
    height: 200px;
    border-radius: 15px;
    margin-bottom: 15px;
}

.teacher_data {
    width: 500px;
}

.proflie_update {
    width: 100%;
    height: 35px;
    border-radius: 5px;
    border: 1px solid rgb(214, 214, 214);
}

.address_user {
    width: 100%;
    height: 100px;
    resize: none;
    border: 1px solid rgb(214, 214, 214);
}

.pass-reset-btn {
    width: 100%;
    height: 40px;
    border: 1px solid red;
    border-radius: 5px;
    background: none;
    transition: 0.5s;
    color: red;
}

.pass-reset-btn:hover {
    background-color: red;
    color: white;
    cursor: pointer;
}

.account-update-btn {
    width: 100%;
    height: 40px;
    border: 1px solid blue;
    border-radius: 5px;
    background: none;
    transition: 0.5s;
    color: blue;
}

.account-update-btn:hover {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.update-user-data {
    padding: 30px;
}

::-webkit-file-upload-button {
    border: none;
    padding: 5px;
    background-color: rgb(0, 110, 255);
    border-radius: 5px;
    color: white;
    cursor: pointer;
}

@media only screen and (max-width: 1400px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
}

@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
    .admin-content .grid {
        display: grid;
        min-width: 80%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" "e f" "g h";
    }
    .admin-item1,
    .admin-item2,
    .admin-item3,
    .admin-item4,
    .admin-item5,
    .admin-item6,
    .admin-item7,
    .admin-item8 {
        width: 300px;
    }
    .admin-comment-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(100px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .lastuser-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .msg-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .student-tbl {
        min-width: 700px;
    }
    .student-tbl thead {
        display: none;
    }
    .student-tbl,
    .student-tbl tbody .student-tbl tbody tr,
    .student-tbl tbody td {
        display: block;
        width: 700px;
    }
    .lastuser-tbl {
        min-width: 700px;
    }
    .lastuser-tbl thead {
        display: none;
    }
    .lastuser-tbl,
    .lastuser-tbl tbody .lastuser-tbl tbody tr,
    .lastuser-tbl tbody td {
        display: block;
        width: 700px;
    }
}

@media screen and (max-width: 375px) {
    .menu-toggle {
        display: block;
    }
    .content {
        padding-top: 8rem;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        height: 100%;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
    }
    .sidebar.is-active {
        left: 0;
    }
    .admin-content .grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e" "f" "g" "h";
    }
    .admin-item1,
    .admin-item2,
    .admin-item3,
    .admin-item4,
    .admin-item5,
    .admin-item6,
    .admin-item7,
    .admin-item8 {
        width: 300px;
    }
    .admin-comment-grid {
        display: grid;
        margin-top: 25px;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(40px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .lastuser-tbl {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
    }
    .lastuser-tbl th,
    td {
        padding: 6px 5px;
    }
    .msg-grid {
        display: grid;
        margin-top: 25px;
        min-width: 50%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(50px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c";
    }
    .student-tbl {
        min-width: 300px;
    }
    .student-tbl thead {
        display: none;
    }
    .student-tbl,
    .student-tbl tbody .student-tbl tbody tr,
    .student-tbl tbody td {
        display: block;
        width: 300px;
    }
    .lastuser-tbl {
        min-width: 300px;
    }
    .lastuser-tbl thead {
        display: none;
    }
    .lastuser-tbl,
    .lastuser-tbl tbody .lastuser-tbl tbody tr,
    .lastuser-tbl tbody td {
        display: block;
        width: 300px;
    }
    .teacher_data {
        width: 300px;
    }
}
