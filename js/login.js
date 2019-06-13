var inputUsername = document.getElementById("input-username");
var inputPassword = document.getElementById("input-password");
var username = "";
var password = "";

setInputUsernameToDefault();
setInputPasswordToDefault();

// event listeners
document.getElementById("btn-login").addEventListener("click",login);
document.getElementsByTagName("a")[0].addEventListener("click",forgetPassword);
inputUsername.addEventListener("keydown",checkForEnterKey);
inputPassword.addEventListener("keydown",checkForEnterKey);
inputUsername.addEventListener("focus",enterInput_Username);
inputPassword.addEventListener("focus",enterInput_Password);
inputUsername.addEventListener("focusout",checkInput_Username);
inputPassword.addEventListener("focusout",checkInput_Password);

function checkForEnterKey(e){
    if(e.key === 'Enter'){
        checkInput_Username();
        checkInput_Password();
        login();
    }
}

function setInputUsernameToDefault(){
    inputUsername.value = "Username";
    inputUsername.style.color = "gray";
}

function setInputPasswordToDefault(){
    inputPassword.value = "Password";
    inputPassword.style.color = "gray";
    inputPassword.type = "text";
}


function enterInput_Username(){
    if(inputUsername.value === "Username"){
        inputUsername.value = "";
        inputUsername.style.color = "black";
    }
}

function enterInput_Password(){
    if(inputPassword.value === "Password"){
        inputPassword.value = "";
        inputPassword.style.color = "black";
        inputPassword.type = "password";
    }
}

function checkInput_Username(){
    if(inputUsername.value === "")
    {
        setInputUsernameToDefault();
    }
    else{
        username = inputUsername.value;
    }
}

function checkInput_Password(){
    if(inputPassword.value === "")
    {
        setInputPasswordToDefault();
    }
    else{
        password = inputPassword.value;
    }
}

function login(){
    // login input fields validation
    /*
    if (username === "" || password === "" || username === "Username" || password === "Password" || username.length < 2 || !isNaN(username) || !username.includes("@")) {
        alert("Please enter your credentials: both username and password");
        return;
    }
    */
    // login validation with DB
    /*
     * none for now  
     */
      
    // user type deduction
    if(username.substr(0,2)=="a-"){
        window.location = "home-a.html";
    }
    else
    {
        window.location = "home.html";
    }
    
}

function forgetPassword(){
    alert("Contact your local IT Support team to reset your password.");
}
