var inputUsername = document.getElementById("input-username");
var inputPassword = document.getElementById("input-password");
var username = "";
var password = "";

setInputUsernameToDefault();
setInputPasswordToDefault();

// event listeners
//document.getElementById("btn-login").addEventListener("click", validate_login_input); <- this is triggered by form onsubmit function
document.getElementsByTagName("a")[0].addEventListener("click", forgetPassword);
inputUsername.addEventListener("keydown", checkForEnterKey);
inputPassword.addEventListener("keydown", checkForEnterKey);
inputUsername.addEventListener("focus", enterInput_Username);
inputPassword.addEventListener("focus", enterInput_Password);
inputUsername.addEventListener("focusout", checkInput_Username);
inputPassword.addEventListener("focusout", checkInput_Password);

if(window.location.hash=="#successful"){
    alert("User account has been created successfully.\nYou can now use your credentials to login.");
}

function checkForEnterKey(e) {
    if (e.key === 'Enter') {
        checkInput_Username();
        checkInput_Password();
        login();
    }
}

function setInputUsernameToDefault() {
    inputUsername.value = "Username";
    inputUsername.style.color = "gray";
}

function setInputPasswordToDefault() {
    inputPassword.value = "Password";
    inputPassword.style.color = "gray";
    inputPassword.type = "text";
}


function enterInput_Username() {
    if (inputUsername.value === "Username") {
        inputUsername.value = "";
        inputUsername.style.color = "black";
    }
}

function enterInput_Password() {
    if (inputPassword.value === "Password") {
        inputPassword.value = "";
        inputPassword.style.color = "black";
        inputPassword.type = "password";
    }
}

function checkInput_Username() {
    if (inputUsername.value === "" || inputUsername.value === "Username")
    {
        setInputUsernameToDefault();
    } else {
        username = inputUsername.value;
    }
}

function checkInput_Password() {
    if (inputPassword.value === "" || inputPassword.value === "Password")
    {
        setInputPasswordToDefault();
    } else {
        password = inputPassword.value;
    }
}

function validate_login_input() {
    username = inputUsername.value;
    password = inputPassword.value;
    
    /*
    // login input fields validation
    if (username === "" ||
            password === "" ||
            username === "Username" ||
            password === "Password" ||
            username.length < 2 ||
            username.length > 50 ||
            !isNaN(username) ||
            !username.includes("@") ||
            !username.includes(".") ||
            username.includes(" ")) // sanitize "white spaces" for database security
    {
        alert("Login details incorrect. \nPlease enter correct credentials (username and password).");
        return false;
    } else {
        return true;
    }
    */
   return true;
}

function forgetPassword() {
    alert("Contact your local IT Support team to reset your password.");
}
