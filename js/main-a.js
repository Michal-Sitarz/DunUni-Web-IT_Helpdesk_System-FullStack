
// main buttons event listeners
if(document.getElementById("btn-helpdesk-guide") != null){
    document.getElementById("btn-helpdesk-guide").addEventListener("click",loadPage_HelpdeskGuide);
}
if(document.getElementById("btn-analytics") != null){
    document.getElementById("btn-analytics").addEventListener("click",loadPage_Analytics);
}
if(document.getElementById("btn-tickets-history") != null){
    document.getElementById("btn-tickets-history").addEventListener("click",loadPage_TicketsHistory);
}
if(document.getElementById("btn-manage-users") != null){
    document.getElementById("btn-manage-users").addEventListener("click",loadPage_ManageUsers);
}
if(document.getElementById("btn-manage-devices") != null){
    document.getElementById("btn-manage-devices").addEventListener("click",loadPage_ManageDevices);
}
if(document.getElementById("btn-add-new-user") != null){
    document.getElementById("btn-add-new-user").addEventListener("click",loadPage_AddNewUSER);
}
if(document.getElementById("btn-add-new-device") != null){
    document.getElementById("btn-add-new-device").addEventListener("click",loadPage_AddNewDEVICE);
}
if(document.getElementById("btn-notifications-close") != null){
    document.getElementById("btn-notifications-close").addEventListener("click",close_Notifications);
}


// load page functions
function loadPage_HelpdeskGuide(){
    window.location = "helpdesk-guide-a.php";
}

function loadPage_Analytics(){
    window.location = "analytics.php";
}

function loadPage_TicketsHistory(){
    window.location = "historical-tickets-a.php";
}

function loadPage_ManageUsers(){
    window.location = "manage-users.php";
}

function loadPage_ManageDevices(){
    window.location = "manage-devices.php";
}

function loadPage_AddNewUSER(){
    window.location = "manage-users-add-new.php";
}

function loadPage_AddNewDEVICE(){
    window.location = "manage-devices-add-new.php";
}

function close_Notifications(){
    document.getElementById("notifications-container").style.display = "none";
}