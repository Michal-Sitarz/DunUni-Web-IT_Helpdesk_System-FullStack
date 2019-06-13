var currentFileName = window.location.href.split("/").slice(-1).toString();
var helpTicketStatus = document.getElementById("ticket-select-category-help-icon");
var allInputFields = document.getElementsByTagName("input");
var allTicketTextFields = document.getElementById("ticket-body").getElementsByTagName("textarea");
var allSelectFields = document.getElementsByTagName("select");


// event listeners
helpTicketStatus.addEventListener("mouseover",toggleHelpDisplay);
helpTicketStatus.addEventListener("mouseout",toggleHelpDisplay);

document.getElementById("btn-ticket-submit").addEventListener("click",submitTicket);
document.getElementById("btn-ticket-cancel").addEventListener("click",cancelTicket);


//customize the ticket according to its nature (new request, new incident, open/edit existing)
switch (currentFileName){
    case 'ticket-new-request.html':
        selectDefaultTicketType("Request");
        selectDefaultTicketStatus();
        break;
    case 'ticket-new-incident.html':
        selectDefaultTicketType("Incident");
        selectDefaultTicketStatus();
        break;
    default:
        document.getElementById("btn-ticket-note-add-new").addEventListener("click",postNewNote);
        break;
}

function selectDefaultTicketType(ticketType){
    let selectType = document.getElementById("ticket-select-type");
    selectType.value = ticketType;
    selectType.disabled = true;
}

function selectDefaultTicketStatus(){
    let selectStatus = document.getElementById("ticket-select-status");
    selectStatus.value = "Submitted";
    selectStatus.disabled = true;
}

function toggleHelpDisplay(){
    let popupBox = document.getElementById("ticket-select-category-help-popup");
    popupBox.classList.toggle("show-help-box");
}

// SUBMIT ticket functions
function submitTicket(){
    if(validateAllUserInputFields() === true){
        alert("New ticket has been raised."); // and add new ticket entry to DB
        // clear fields
        clearAllUserInputFields();

        //for prototype version only
        if(currentFileName == "ticket-example.html")
        {
            window.location = "home.html";
        }
        else if(currentFileName == "ticket-example-a.html"){
            window.location = "home-a.html";
        }
        else{
            window.location = "home.html";
        }
    }
}

function validateAllUserInputFields(){
    for(let i=0; i<allInputFields.length; i++){
        if(allInputFields[i].value == ""){
            alert("Please complete all the information - all fields are mandatory!");
            return false;
        }
    }
    for(let i=0; i<allTicketTextFields.length; i++){
        if(allTicketTextFields[i].value == ""){
            alert("Please provide description.");
            return false;
        }
    }
    for(let i=0; i<allSelectFields.length; i++){
        if(allSelectFields[i].value == "none-chosen"){
            alert("Please select one of the options provided from a dropdown menu.");
            return false;
        }
    }
    return true;
}

function clearAllUserInputFields(){
    for(let i=0; i<allInputFields.length; i++){
        allInputFields[i].value = "";
    }
    for(let i=0; i<allTicketTextFields.length; i++){
        allTicketTextFields[i].value = "";
    }
    for(let i=0; i<allSelectFields.length; i++){
        allSelectFields[i].value = "none-chosen";
    }
}

function cancelTicket(){
    //for prototype version only
    if(currentFileName == "ticket-example.html")
    {
        window.location = "home.html";
    }
    else if(currentFileName == "ticket-example-a.html"){
        window.location = "home-a.html";
    }
    else{
        window.location = "home.html";
    }
}

// POST note functions
function postNewNote(){
    let noteText = document.getElementById("note-new-text").value;    
    if(noteText == ""){
        alert("Please enter text of your note into provided field.");
        return;
    }
    let username = document.getElementById("signed-in-username").innerHTML;
    let dateTime = getCurrentTimeDate();
    let noteStamp  = username + "<br>" + dateTime;
    
    let n = document.getElementById("notes-list");
    existingHTML = n.innerHTML;
    latestNote = '<div id="note"><div id="note-stamp">'+noteStamp+'</div><div id="note-text">'+noteText+'</div></div>';
    n.innerHTML = latestNote + existingHTML;
        
    alert("New note has been posted.");
    //clear input field
    document.getElementById("note-new-text").value = "";
}

function getCurrentTimeDate(){
    var currentDate = new Date();
    var time = currentDate.getHours() + ":" 
            + currentDate.getMinutes() + ":"
            + currentDate.getSeconds();
    var date = currentDate.getDate().toString();
    if(date.length < 2){
        d = date;
        date = '0' + d;
    }
    var month = (currentDate.getMonth()+1).toString();
    if(month.length < 2){
        m = month;
        month = '0' + m;
    }
    date = date + "/" + month + "/" + currentDate.getFullYear();
    
    return time + " @ " + date;
}

