window.addEventListener("load", () => {
    const canvas=document.querySelector("#canvas");
    const ctx=canvas.getContext("2d");

    //draw the dotes(circles)
    ctx.beginPath();
    ctx.arc(40,110,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(48,102,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(58,95,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(70,97,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(82,104,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(95,111,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(107,120,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(122,124,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(130,115,2,0,2*Math.PI);
    ctx.stroke();

    //draw the plane
    ctx.beginPath();
    ctx.moveTo(270,30);
    ctx.lineTo(200,110);
    ctx.lineTo(160,80);
    ctx.lineTo(270,30);
    ctx.lineTo(100,60);
    ctx.lineTo(140,75);
    ctx.lineTo(270,30);
    ctx.moveTo(140,75);
    ctx.lineTo(145,115);
    ctx.lineTo(160,80);
    ctx.moveTo(145,115);
    ctx.lineTo(180,95);
    ctx.stroke();


    var gradient=ctx.createLinearGradient(0,25,0,0);
    gradient.addColorStop(0,"black");
    gradient.addColorStop(1,"white");

    ctx.fillStyle=gradient;
    
    ctx.font = "18px Arial";
    ctx.fillText("Since 1903", 40, 20);  

    var img=document.getElementById("canImg");
    var img2=document.getElementById("canImg2");
    ctx.drawImage(img,300,20);
    ctx.drawImage(img2,0,20);
});