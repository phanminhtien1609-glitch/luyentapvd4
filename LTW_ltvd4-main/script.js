function input(value){

let display = document.getElementById("display");
let input_display = document.getElementById("input_display");

if(display.innerText === "0"){
display.innerText = "";
}

display.innerText += value;
input_display.value = display.innerText;

}

function clearDisplay(){

document.getElementById("display").innerText = "0";
document.getElementById("input_display").value = "";

}

function deleteDigit(){

let display = document.getElementById("display");

display.innerText = display.innerText.slice(0,-1) || "0";

document.getElementById("input_display").value = display.innerText;

}