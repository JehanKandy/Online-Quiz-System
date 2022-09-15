@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz@8..144&family=Rubik&family=Teko:wght@300&display=swap+Sharp');

/*

use font families

font-family: 'Bebas Neue', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Kdam Thmor Pro', sans-serif;
font-family: 'Roboto Flex', sans-serif;
font-family: 'Rubik', sans-serif;
font-family: 'Teko', sans-serif;
*/

.login-nav-btn {
    font-size: 15px;
    padding: 10px;
    border: 2px solid red;
    border-radius: 5px;
    background: none;
    color: red;
    transition: 0.5s;
}

.login-nav-btn:hover {
    background-color: red;
    color: white;
}

.footer {
    text-align: center;
    background-color: rgb(248, 248, 248);
    padding-bottom: 15px;
}

.footer hr {
    border-bottom: 1px solid rgb(206, 206, 206);
}

.home-body {
    text-align: center;
    padding-top: 50px;
}

.home-body .title {
    font-family: 'Roboto Flex', sans-serif;
    font-size: 45px;
}

.home-body .content {
    font-size: 30px;
}

.home-body .quiz-img {
    height: 75%;
    width: 75%;
}

.login-content {
    margin-top: 75px;
    margin-bottom: 75px;
    margin-left: 500px;
    margin-right: 500px;
    border: 1px solid rgb(214, 214, 214);
    border-radius: 5px;
    padding-top: 50px;
    padding-bottom: 40px;
    padding-left: 60px;
    padding-right: 60px;
    width: 500px;
}

.login-content .title {
    text-align: center;
    font-size: 30px;
    padding-bottom: 40px;
}

.login-content .body {
    font-family: 'Rubik', sans-serif;
    width: 100%;
}

.login-content .body form table .login-input {
    width: 380px;
    height: 50px;
    border: 1px solid rgb(204, 204, 204);
    border-radius: 2px;
}

.login-content .body form table .login-btn {
    width: 100%;
    margin-top: 15px;
    height: 50px;
    border: 1px solid rgb(40, 40, 255);
    color: rgb(40, 40, 255);
    border-radius: 2px;
    background-color: none;
    transition: 0.5s;
    cursor: pointer;
}

.login-content .body form table .login-btn:hover {
    background-color: rgb(63, 63, 243);
    color: white;
}

.reg-content {
    margin-top: 75px;
    margin-bottom: 75px;
    margin-left: 500px;
    margin-right: 500px;
    border: 1px solid rgb(214, 214, 214);
    border-radius: 5px;
    padding-top: 50px;
    padding-bottom: 40px;
    padding-left: 60px;
    padding-right: 60px;
    width: 500px;
}

.reg-content .title {
    text-align: center;
    font-size: 30px;
    padding-bottom: 40px;
}

.reg-content .body {
    font-family: 'Rubik', sans-serif;
    width: 100%;
}

.reg-content .body form table .reg-input {
    width: 380px;
    height: 50px;
    border: 1px solid rgb(204, 204, 204);
    border-radius: 2px;
}

.reg-content .body form table .reg-clear-btn {
    width: 49%;
    margin-top: 15px;
    height: 50px;
    border: 1px solid rgb(255, 0, 0);
    color: rgb(255, 0, 0);
    border-radius: 2px;
    background-color: none;
    transition: 0.5s;
    cursor: pointer;
}

.reg-content .body form table .reg-clear-btn:hover {
    background-color: rgb(255, 0, 0);
    color: white;
}

.reg-content .body form table .reg-btn {
    width: 49%;
    margin-top: 15px;
    height: 50px;
    border: 1px solid rgb(40, 40, 255);
    color: rgb(40, 40, 255);
    border-radius: 2px;
    background-color: none;
    transition: 0.5s;
    cursor: pointer;
}

.reg-content .body form table .reg-btn:hover {
    background-color: rgb(63, 63, 243);
    color: white;
}

.waiting-content {
    padding-top: 50px;
    text-align: center;
    padding-left: 100px;
    padding-right: 100px;
}

.waiting-title {
    font-size: 35px;
    font-family: 'Rubik', sans-serif;
}

.waiting-body {
    font-size: 20px;
    font-family: 'Roboto Flex', sans-serif;
}

.logout-btn-nav {
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    color: red;
    background: none;
    border: 1px solid red;
    transition: 0.5;
    border-radius: 5px;
}

.logout-btn-nav:hover {
    background-color: red;
    color: white;
}

.pending {
    font-size: 12px;
    padding: 2px;
    background-color: red;
}

.home-img {
    background-image: url("../images/675928.png");
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}

.home-title {
    padding-top: 50px;
    text-align: center;
    font-family: 'Rubik', sans-serif;
    font-size: 30px;
}

.home-grid {
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(350px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d" "e f g h";
    padding: 45 45 45 45;
}

.grid-item1 {
    background-image: url("../images/outside.jpg");
    transition: 0.5s;
}

.grid-item2 {
    background-image: url("../images/engine.jpg");
    transition: 0.5s;
}

.grid-item3 {
    background-image: url("../images/maths.jpg");
    transition: 0.5s;
}

.grid-item4 {
    background-image: url("../images/robot.jpg");
    transition: 0.5s;
}

.grid-item5 {
    background-image: url("../images/sport.jpg");
    transition: 0.5s;
}

.grid-item6 {
    background-image: url("../images/poliution.jpg");
    transition: 0.5s;
}

.grid-item7 {
    background-image: url("../images/mind.jpg");
    transition: 0.5s;
}

.grid-item8 {
    background-image: url("../images/it.jpg");
    transition: 0.5s;
}

.grid-item1:hover {
    text-align: center;
    padding-top: 40%;
    color: rgb(0, 0, 0);
    font-size: 35px;
    font-weight: bolder;
    cursor: pointer;
}

.grid-item2:hover {
    text-align: center;
    padding-top: 40%;
    color: white;
    font-size: 35px;
    font-weight: bolder;
    cursor: pointer;
}

.grid-item3:hover {
    text-align: center;
    padding-top: 40%;
    color: white;
    font-size: 35px;
    font-weight: bolder;
    cursor: pointer;
}

.grid-item4:hover {
    text-align: center;
    padding-top: 40%;
    color: white;
    font-size: 35px;
    font-weight: bolder;
    cursor: pointer;
}

.grid-item1,
.grid-item2,
.grid-item3,
.grid-item4,
.grid-item5,
.grid-item6,
.grid-item7,
.grid-item8 {
    background-position: center;
    background-size: cover;
    border-radius: 15px;
}


/*

*   laptop Screen size

*/

@media only screen and (max-width: 1400px) {
    .login-content {
        margin-left: 350px;
        margin-right: 350px;
    }
}


/*

*   ipad - portrait

*/

@media screen and (max-width: 768px) {
    .login-content {
        margin-left: 120px;
        margin-right: 120px;
    }
    .home-grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(350px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" "e f" "g h";
        padding: 45 45 45 45;
    }
}


/*

*   ipad - landscape 

*/

@media screen and (min-width: 1023px) and (max-width: 1024px) {
    .login-content {
        margin-left: 250px;
        margin-right: 250px;
    }
}


/*

*   iphone X - portrait 

*/

@media screen and (max-width: 375px) {
    .login-content {
        margin-top: 75px;
        margin-bottom: 75px;
        margin-left: 10px;
        margin-right: 10px;
        border: 1px solid rgb(214, 214, 214);
        border-radius: 5px;
        padding-top: 50px;
        padding-bottom: 40px;
        padding-left: 10px;
        padding-right: 10px;
        width: 350px;
    }
    .login-content .body form table .login-input {
        width: 320px;
        height: 50px;
        border: 1px solid rgb(204, 204, 204);
        border-radius: 2px;
    }
    .home-grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(350px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d" "e" "f" "g" "h";
        padding: 45 45 45 45;
    }
}


/*

*   iphone X - landscape 

*/

@media screen and (min-width: 811px) and (max-width: 812px) {
    .login-content {
        margin-left: 150px;
        margin-right: 150px;
    }
}
