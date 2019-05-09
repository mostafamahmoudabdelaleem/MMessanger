window.onload = function(){
    var login_intro = document.getElementById("login");
    var login_signup = document.getElementById("login-signup");
    var signup_intro = document.getElementById("signup");
    var signup_login = document.getElementById("signup-login");

    var intro_class = document.getElementById("intro-class");
    var signup_class = document.getElementById("signup-class");
    var login_class = document.getElementById("login-class");

    login_intro.onclick = function(){
        intro_class.setAttribute("class", "hidden");
        signup_class.setAttribute("class", "hidden");
        login_class.setAttribute("class", "");
    };

    login_signup.onclick = function(){
        signup_class.setAttribute("class", "hidden");
        login_class.setAttribute("class", "");
    };

    signup_intro.onclick = function(){
        intro_class.setAttribute("class", "hidden");
        login_class.setAttribute("class", "hidden");
        signup_class.setAttribute("class", "");
    };

    signup_login.onclick = function(){
        login_class.setAttribute("class", "hidden");
        signup_class.setAttribute("class", "");
    };
};
