// event listeners
document.getElementById("btn-helpdesk-guide").addEventListener("click",loadPage_HelpdeskGuide);
document.getElementById("btn-report-incident").addEventListener("click",loadPage_ReportIncident);
document.getElementById("btn-new-request").addEventListener("click",loadPage_NewRequest);
document.getElementById("btn-tickets-history").addEventListener("click",loadPage_TicketsHistory);

document.getElementById("btn-notifications-close").addEventListener("click",close_Notifications);


function loadPage_HelpdeskGuide(){
    window.location = "helpdesk-guide.html";
}

function loadPage_ReportIncident(){
    window.location = "ticket-new-incident.html";
}

function loadPage_NewRequest(){
    window.location = "ticket-new-request.html";
}

function loadPage_TicketsHistory(){
    window.location = "historical-tickets.html";
}

function close_Notifications(){
    document.getElementById("notifications-container").style.display = "none";
}
