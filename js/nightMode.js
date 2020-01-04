var date = new Date();
var time = date.getHours();
//console.log(time);
// var night=document.getElementById("modes");

function changeMode() {
    //time has values 0-23
    if (time >= 20 || time<=6) {
        document.querySelector("#modes").innerHTML="Night Mode On";
        document.body.style.backgroundColor = "#F5F5DC";
    }
    else{
        document.querySelector("#modes").innerHTML="Day Mode On";
        document.body.style.backgroundColor="white";
    }
}
