
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

document.getElementById("place").innerHTML= sessionStorage.getItem("placeText").toUpperCase();
    }
catch{
     console.log("Error value undefined or null!")
 }


 var image1;
 var image2;
 var image3;
 var image4;
 var temp=0;

 var d=sessionStorage.getItem("numdays");

function Hotel(fotoH, cost1, name, desc) {
  this.fotoHotel = fotoH;
  this.costVal = cost1;
  this.nameVal = name;
  this.descVal = desc;
}

var obj1 = new Hotel("images/apartment1.jpg", 50, "Hilton", "Sea view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");
var obj2 = new Hotel("images/apartment2.jpg", 100, "The Tipton", "Mountain view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");
var obj3 = new Hotel("images/apartment3.jpg", 210, "Sheraton", "City view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");
var obj4 = new Hotel("images/apartment4.jpg", 300, "Diamond", "No view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");
var obj5 = new Hotel("images/apartment5.jpg", 230, "Plaza", "City view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");
var obj6 = new Hotel("images/apartment6.jpg", 400, "Emerald", "Village view lorem ipsum lorem ipsum lorem ipsum lorem ipsum");

Hotel.prototype.neighborhood = "Sunny Hill";
Hotel.prototype.nationality = "English";




var ele=[obj1,obj2, obj3, obj4, obj5, obj6];

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
    desc_1 = document.getElementById( "desc1" );
    desc_2 = document.getElementById( "desc2" );
    desc_3 = document.getElementById( "desc3" );
    

    

    setImage( image1, cost1, totalcost_1, desc_1 );
    setImage( image2, cost2, totalcost_2, desc_2 );
    setImage( image3, cost3, totalcost_3, desc_3 );
   
    }
 }catch(e){
     console.log("Error value undefined or null!")
 }

 function setImage( apImg, costDoc, totcos, descDoc )
{

	var value =Math.floor( 1 + Math.random() * 6 );
	
    while(temp==value){
	value = Math.floor( 1 + Math.random() * 6 );

    }
    temp=value;
	apImg.setAttribute("src",ele[value-1].fotoHotel)
    apImg.setAttribute( "alt","die image with " + value + " spot(s)" );
    costDoc.innerHTML=ele[value-1].costVal+" \u20ac  /night";
    totcos.innerHTML="The total cost for "+ days + " days is " + (ele[value-1].costVal*days)+" \u20ac";
    descDoc.innerHTML=ele[value-1].descVal;
  
    
}
window.addEventListener( "load", start, false );



