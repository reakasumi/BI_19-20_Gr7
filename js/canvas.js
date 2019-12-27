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
    ctx.arc(58,93,2,0,2*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(70,97,2,0,2*Math.PI);
    ctx.stroke();
    // ctx.beginPath();
    // ctx.arc(40,110,2,0,2*Math.PI);
    // ctx.stroke();
    // ctx.beginPath();
    // ctx.arc(50,100,2,0,2*Math.PI);
    // ctx.stroke();
    // ctx.beginPath();
    // ctx.arc(40,110,2,0,2*Math.PI);
    // ctx.stroke();
    // ctx.beginPath();
    // ctx.arc(50,100,2,0,2*Math.PI);
    // ctx.stroke();

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

});