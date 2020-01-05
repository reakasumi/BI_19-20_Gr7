var date = new Date();
var time = date.getHours();
//console.log(time);
// var night=document.getElementById("modes");

var clicks=0;

function changeMode() {
    clicks++;

    //time has values 0-23
    if (clicks>1) {
        window.alert("You already changed the color");
        
    }
    else if(time>6 || time<20){
        document.querySelector("#modes").innerHTML="Day Mode On";
        document.body.style.backgroundColor="#F0F8FF";
    }
    else if(time >= 20 || time<=6){
        document.querySelector("#modes").innerHTML="Night Mode On";
        document.body.style.backgroundColor = "#F5F5DC";
    }
    
}
