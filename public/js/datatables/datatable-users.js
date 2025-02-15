window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    //administrateur/usersList.view.php

    const datatablesSimple = document.getElementById('dataTableUsers');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }



});


if(document.querySelector("#utilisateur").innerText === "utilisateur") {

    document.querySelector("#utilisateur").classList.add("badge");
    document.querySelector("#utilisateur").classList.add("bg-info");

} 

if(document.querySelector("#administrateur").innerText === "administrateur") {

    document.querySelector("#administrateur").classList.add("badge");
    document.querySelector("#administrateur").classList.add("bg-primary");

}

if(document.getElementsByClassName("validite").innerText === "désactivé") {

    document.getElementsByClassName("validite").classList.add("bg-warning");
    document.querySelectorAll(".validite").classList.add("bg-warning");
}

var elements = document.getElementsByClassName("validite");

for(var i = elements.length - 1; i >= 0; --i)
{
    // PERFORM STUFF ON THE ELEMENT
    elements[i].classList.add("badge");
    elements[i].classList.add("bg-warning");


    // elements[i] no longer exists past this point, in most browsers
}