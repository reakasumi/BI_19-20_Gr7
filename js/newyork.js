
var d=sessionStorage.getItem("guestsText");
document.getElementById("date").innerHTML = convertDateToString(sessionStorage.getItem("startDatetext"))
 +"-"+ convertDateToString(sessionStorage.getItem("endDatetext"));

 if(d==1){
document.getElementById("guests").innerHTML= d+" guest";
}
else{
document.getElementById("guests").innerHTML= d+" guests";
}