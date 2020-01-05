
var d = sessionStorage.getItem("guestsText");
try {
    document.getElementById("date").innerHTML = convertDateToString(sessionStorage.getItem("startDatetext"))
        + " " + convertDateToString(sessionStorage.getItem("endDatetext"));

    if (d == 1) {
        document.getElementById("guests").innerHTML = d + " guest";
    }
    else {
        document.getElementById("guests").innerHTML = d + " guests";
    }

    document.getElementById("place").innerHTML = sessionStorage.getItem("placeText").toUpperCase();
}
catch{
    console.log("Error value undefined or null!")
}


var image1;
var image2;
var image3;
var image4;
var temp = 0;

var d = sessionStorage.getItem("numdays");

function Hotel(fotoH, cost1, name, desc) {
    this.fotoHotel = fotoH;
    this.costVal = cost1;
    this.nameVal = name;
    this.descVal = desc;
}

var obj1 = new Hotel("images/apartment1.jpg", 50, "Hilton", "Great for entertaining: spacious, updated 2 bedroom, 1 bathroom apartment available. Close to nightlife with private backyard. The building is pet friendly with heat included. This property is managed by a responsible landlord using Avail landlord software. Applicants are required to complete a rental application.Call John at 312 345 6798.");
var obj2 = new Hotel("images/apartment2.jpg", 100, "The Tipton", "The apartment is a great spot for your next vacation. You’ll enjoy space, flexibility, and comfort of a home, with the fun and adventure of being on vacation. Spacious accommodations can easily fit your entire group.");
var obj3 = new Hotel("images/apartment3.jpg", 210, "Austin", "A  beautiful hilltop home just 15 minutes from Downtown Austin. Perfect for getting together with family and friends.");
var obj4 = new Hotel("images/apartment4.jpg", 300, "Diamond", "Welcome to our apartment with personal interior charactar, located close to the city centrum, in a private apartment building with all shopping possibilites next door and perfect public connection, as the basis for your stay.");
var obj5 = new Hotel("images/apartment5.jpg", 230, "Plaza", "Tadino flat,is located just in the center of the city,a few steps from Lima metro station.The flat is an open space with comfortable bed area,table where you can eat and full accessories kitchen where you can prepare your meal.The flat has shower.");
var obj6 = new Hotel("images/apartment6.jpg", 400, "Emerald", "Sit back in a private plunge pool and enjoy an uninterrupted vista of Table Mountain, the city skyline, and the ocean beyond. The views are just as good from inside this chic and modern penthouse, where sunlight pours in through walls of windows.");

Hotel.prototype.neighborhood = "Sunny Hill";
Hotel.prototype.nationality = "English";




var ele = [obj1, obj2, obj3, obj4, obj5, obj6];

try {
    var days = d.toString();


    // register button listener and get the img elements
    function start() {

        // var button = document.getElementById( "rollButton" );
        //   button.addEventListener( "click", rollDice, false );
        image1 = document.getElementById("img1");
        image2 = document.getElementById("img2");
        image3 = document.getElementById("img3");
        cost_1 = document.getElementById("cost1");
        cost_2 = document.getElementById("cost2");
        cost_3 = document.getElementById("cost3");
        totalcost_1 = document.getElementById("total_cost1");
        totalcost_2 = document.getElementById("total_cost2");
        totalcost_3 = document.getElementById("total_cost3");
        desc_1 = document.getElementById("desc1");
        desc_2 = document.getElementById("desc2");
        desc_3 = document.getElementById("desc3");




        setImage(image1, cost1, totalcost_1, desc_1);
        setImage(image2, cost2, totalcost_2, desc_2);
        setImage(image3, cost3, totalcost_3, desc_3);

    }
} catch (e) {
    console.log("Error value undefined or null!")
}

function setImage(apImg, costDoc, totcos, descDoc) {

    var value = Math.floor(1 + Math.random() * 6);

    while (temp == value) {
        value = Math.floor(1 + Math.random() * 6);

    }
    temp = value;
    apImg.setAttribute("src", ele[value-1].fotoHotel)
    apImg.setAttribute("alt", "die image with " + value + " spot(s)");
    costDoc.innerHTML = ele[value-1].costVal + " \u20ac  /night";
    totcos.innerHTML = "The total cost for " + days + " days is " + (ele[value-1].costVal * days) + " \u20ac";
    descDoc.innerHTML = ele[value-1].descVal;


}
window.addEventListener("load", start, false);



