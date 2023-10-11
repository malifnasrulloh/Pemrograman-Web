addButton = document.getElementById("addButton");
resetButton = document.getElementById("resetButton");


function getResult(){
    var firstNum=document.getElementById("firstNum");
    var secNum=document.getElementById("secNum");
    if(isNaN(parseInt(firstNum.value)) || isNaN(parseInt(secNum.value))){
        alert("harap input angka");
    }else{
        alert('Hasil penjumlahan = '+(parseInt(firstNum.value)+parseInt(secNum.value)));
    }
}

function reset(){
    document.getElementById("firstNum").value="";
    document.getElementById("secNum").value="";
}
// -------------------------------------------------------------

