
var d=sessionStorage.getItem("guestsText");
try{
document.getElementById("date").innerHTML = convertDateToString(sessionStorage.getItem("startDatetext"))
 +"-"+ convertDateToString(sessionStorage.getItem("endDatetext"));

 if(d==1){
document.getElementById("guests").innerHTML= d+" guest";
}
else{
document.getElementById("guests").innerHTML= d+" guests";
}

document.getElementById("place").innerHTML= sessionStorage.getItem("placeText").toUpperCase();}catch{
     console.log("Error value undefined or null.")
 }


 var image1;
 var image2;
 var image3;
 var image4;
 var temp=0;
 var cost=[50,100,210,30,450,230,60];
 var d=sessionStorage.getItem("numdays");

 try{
 var days=d.toString();


 // register button listener and get the img elements
 function start(){

 	// var button = document.getElementById( "rollButton" );
  //   button.addEventListener( "click", rollDice, false );
    image1 = document.getElementById( "img1" );
    image2 = document.getElementById( "img2" );
    image3 = document.getElementById( "img3" );
    cost_1 = document.getElementById( "cost1" );
    cost_2 = document.getElementById( "cost2" );
    cost_3 = document.getElementById( "cost3" );
    totalcost_1 = document.getElementById( "total_cost1" );
    totalcost_2 = document.getElementById( "total_cost2" );
    totalcost_3 = document.getElementById( "total_cost3" );
    

    setImage( image1, cost1, totalcost_1 );
    setImage( image2, cost2, totalcost_2 );
    setImage( image3, cost3, totalcost_3 );
   
 }
 }catch(e){
     console.log("Value undefined or null!")
 }

 function setImage( apImg, costDoc, totcos )
{

	var value =Math.floor( 1 + Math.random() * 6 );
	
    while(temp==value){
	value = Math.floor( 1 + Math.random() * 6 );

    }
    temp=value;
	apImg.setAttribute( "src", "images/apartment" + value + ".jpg" );
    apImg.setAttribute( "alt","die image with " + value + " spot(s)" );
    costDoc.innerHTML=cost[value]+" \u20ac  /night";
    totcos.innerHTML="The total cost for "+ days + " is " + (cost[value]*days)+" \u20ac";

  
    
}
window.addEventListener( "load", start, false );



