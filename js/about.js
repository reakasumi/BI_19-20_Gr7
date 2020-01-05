 function total() {
    var table = document.getElementById("trips");

    //sum the cols
    var i = 1;
    var sum = 0;
    while (i !== 5) {
        for (var j = 0; j < 10; j++) 
            sum +=this.parseInt(table.rows[j + 1].cells[i].innerHTML);
        
        document.getElementById("total").cells[i].innerHTML = sum.toExponential();
        sum = 0;

        i++;
    }

}

function maxMonth(){
    //sum rows per month
    var table = document.getElementById("trips");

    var k=0;
    var add=0;
    var months = new this.Array(11);
    console.log(months[0]);
    if(months[0]==undefined)//check for not defined values of the array
        months[0]=0;
    while (k !== 10) {
        for (var j = 1; j < 5; j++) 
            add +=this.parseInt(table.rows[k + 1].cells[j].innerHTML);
        
        months[k+1]=add;
        add = 0;

        k++;
    }
    var maxMonth=Math.max.apply(null,months);
    var index=months.indexOf(maxMonth);
    document.getElementById("max").innerHTML=table.rows[index].cells[0].innerHTML;
}

function avgRate(){
    var stars=document.querySelectorAll(".prog");
    var sum=0;
    var avg=0;
    var count=5;
    for(var i=0; i<stars.length;i++){
        sum += parseInt(stars[i].innerHTML);
        avg += parseInt(stars[i].innerHTML)*count;
        count--;
    }
    console.log(sum);
    const average=(avg/sum).toFixed(2);
    document.getElementById("average").innerHTML="Average based on reviews: "+average;
}

window.onload=function(){
    total();
    maxMonth();
    avgRate();
}

