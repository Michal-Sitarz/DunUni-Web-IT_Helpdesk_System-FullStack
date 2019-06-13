var inputSearchBarTICKET = document.getElementById("search-bar-ticket");
var inputSearchBarUSER = document.getElementById("search-bar-user");
var inputSearchBarDEVICE = document.getElementById("search-bar-device");


// search bar event handlers
if(inputSearchBarTICKET != null){
    inputSearchBarTICKET.addEventListener("focus",enterInputSearchBarTICKET);
    inputSearchBarTICKET.addEventListener("focusout",checkInputSearchBarTICKET);
    setInputSearchBarToDefault(inputSearchBarTICKET, "Search for... TICKET");
    
    let inputSearchButtonTICKET = document.getElementById("search-bar-ticket").nextElementSibling;
        inputSearchButtonTICKET.addEventListener("click",searchForTICKET);
}
if(inputSearchBarUSER != null){
    inputSearchBarUSER.addEventListener("focus",enterInputSearchBarUSER);
    inputSearchBarUSER.addEventListener("focusout",checkInputSearchBarUSER);
    setInputSearchBarToDefault(inputSearchBarUSER, "Search for... USER");
    
    let inputSearchButtonUSER = document.getElementById("search-bar-user").nextElementSibling;
        inputSearchButtonUSER.addEventListener("click",searchForUSER);
}
if(inputSearchBarDEVICE != null){
    inputSearchBarDEVICE.addEventListener("focus",enterInputSearchBarDEVICE);
    inputSearchBarDEVICE.addEventListener("focusout",checkInputSearchBarDEVICE);
    setInputSearchBarToDefault(inputSearchBarDEVICE, "Search for... DEVICE");
    
    let inputSearchButtonDEVICE = document.getElementById("search-bar-device").nextElementSibling;
        inputSearchButtonDEVICE.addEventListener("click",searchForDEVICE);
}



// search bar fields functionality
function setInputSearchBarToDefault(element, defaultText){
    element.value = defaultText;
    element.style.color = "gray";
}

/*
function enterInputSearchBar(element){
    if(element.value === "Search for... TICKET"){
        element.value = "";
        element.style.color = "black";
    }
}
*/
function enterInputSearchBarTICKET(){
    if(inputSearchBarTICKET.value === "Search for... TICKET"){
        inputSearchBarTICKET.value = "";
        inputSearchBarTICKET.style.color = "black";
    }
}
function enterInputSearchBarUSER(){
    if(inputSearchBarUSER.value === "Search for... USER"){
        inputSearchBarUSER.value = "";
        inputSearchBarUSER.style.color = "black";
    }
}
function enterInputSearchBarDEVICE(){
    if(inputSearchBarDEVICE.value === "Search for... DEVICE"){
        inputSearchBarDEVICE.value = "";
        inputSearchBarDEVICE.style.color = "black";
    }
}

function checkInputSearchBarTICKET(){
    if(inputSearchBarTICKET.value === "")
    {
        setInputSearchBarToDefault(inputSearchBarTICKET, "Search for... TICKET");
    }
}
function checkInputSearchBarUSER(){
    if(inputSearchBarUSER.value === "")
    {
        setInputSearchBarToDefault(inputSearchBarUSER, "Search for... USER");
    }
}
function checkInputSearchBarDEVICE(){
    if(inputSearchBarDEVICE.value === "")
    {
        setInputSearchBarToDefault(inputSearchBarDEVICE, "Search for... DEVICE");
    }
}

function validateSearchInput(input){
    if(input.length <= 0 || input.includes("Search for...")){
        alert("Please enter text to search.");
        return false;
    }
    else{
        return true;
    }
}

function searchForTICKET(){
    if(validateSearchInput(inputSearchBarTICKET.value) === true){
        //perform search query
        alert("Entry not found");
    }
}
function searchForUSER(){
    if(validateSearchInput(inputSearchBarUSER.value) === true){
        //perform search query
        alert("Entry not found");
        //window.location = "manage-users.html";
    }
}
function searchForDEVICE(){
    if(validateSearchInput(inputSearchBarDEVICE.value) === true){
        //perform search query
        alert("Entry not found");
        //window.location = "manage-devices.html";
    }
}