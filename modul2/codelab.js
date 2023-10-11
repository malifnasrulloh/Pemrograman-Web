addButton = document.getElementById("addButton");
resetButton = document.getElementById("resetButton");

document.getElementById("firstNum");
document.getElementById("secNum");

function getResult(){
    return parseInt(document.getElementById("firstNum").value)+parseInt(document.getElementById("secNum").value);
}

function reset(){
    document.getElementById("firstNum").value="";
    document.getElementById("secNum").value="";
}
// -------------------------------------------------------------

