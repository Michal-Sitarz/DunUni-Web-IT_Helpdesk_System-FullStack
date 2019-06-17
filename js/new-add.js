var addNewUser_CreateAccountItself = document.getElementById("btn-create-account-submit");
var addNewUser = document.getElementById("btn-add-new-user-submit");
var addNewDevice = document.getElementById("btn-add-new-device-submit");
var allInputFields = document.getElementsByClassName("input-add-new");

// EVENT listeners
if(addNewUser_CreateAccountItself != null){
    addNewUser_CreateAccountItself.addEventListener("click",submitNewUser);
    document.getElementById("btn-create-account-cancel").addEventListener("click",loadpage_Login);
}

if(addNewUser != null){
    addNewUser.addEventListener("click",submitNewUser);
    
}
if(addNewDevice != null){
    addNewDevice.addEventListener("click",submitNewDevice);
}

if(document.getElementById("btn-device-save") != null){
    document.getElementById("btn-device-save").addEventListener("click",updateDeviceDetails);
    document.getElementById("btn-device-cancel").addEventListener("click",loadPage_ManageDevices);
    document.getElementById("btn-device-remove").addEventListener("click",removeDevice);
}

if(document.getElementById("btn-user-account-update") != null){
    document.getElementById("btn-user-account-reset-password").addEventListener("click",resetUserPassword);
    document.getElementById("btn-user-account-update").addEventListener("click",updateUserAccount);
    document.getElementById("btn-user-account-cancel").addEventListener("click",loadPage_ManageUsers);
    document.getElementById("btn-user-account-delete").addEventListener("click",deleteUserAccount);
}

function loadPage_ManageDevices(){
    window.location = "manage-devices.html";
}

function loadPage_ManageUsers(){
    window.location = "manage-users.html";
}

function loadpage_Login(){
    window.location = "login.html";
}

function validateInputFields(){
    for(let i=0; i<allInputFields.length; i++){
        if(allInputFields[i].value == ""){
            return false;
        }
    }
    return true;
}

function clearInputFields(){
    for(let i=0; i<allInputFields.length; i++){
        allInputFields[i].value = "";
    }
}

function submitNewDevice(){
    if(validateInputFields()){
        alert("New Device: "
                +document.getElementById("add-new-device-hostname").value
                +" ("
                +document.getElementById("add-new-device-type").value
                +") has been added to the database.");
        
        //assign values to Device object and update a database
        clearInputFields();
    }
    else{
        alert("Please fill in all the fields (all fields are mandatory!).");
    }
}

function submitNewUser(){
    if(validateInputFields()){
        alert("New User: "
                +document.getElementById("add-new-user-first-name").value
                +" "
                +document.getElementById("add-new-user-last-name").value
                +" has been added to the database.");
        //assign values to User object and update a database
        clearInputFields();
        if(addNewUser_CreateAccountItself != null){
            alert("You can now login using your new account's details.");
            window.location = "login.html";
        }
    }
    else{
        alert("Please fill in all the fields (all fields are mandatory!).");
    }
}

function updateDeviceDetails(){
    if(validateInputFields()){
        // validate with database if the value actually changed and if there's a need to "update" value in the database
        alert("Device's owner has been updated.");
        loadPage_ManageDevices();
    }else{
        alert('Please assign user to the device.\nIf device is/goes back to IT stock, please use "IT stock" as owner name.');
    }
}

function removeDevice(){
    alert("Device has been removed from the database.");
    clearInputFields();
    loadPage_ManageDevices();
}

function updateUserAccount(){
    if(validateInputFields()){
        alert("User Account has been updated.");
        loadPage_ManageUsers();
    }
    else{
        alert("Please fill in all the fields (all fields are mandatory!).");
    }
}

function deleteUserAccount(){
    alert("User Account has been deleted!");
    clearInputFields();
    loadPage_ManageUsers();
}

function resetUserPassword(){
    alert("User's Password has been reset to default:\n\nPassword-01\n\nUser should change it during first sign in.");
}