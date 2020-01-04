 function total() {
    var table = document.getElementById("trips");

    //sum the cols
    var i = 1;
    var sum = 0;
    while (i !== 5) {
        for (var j = 0; j < 10; j++) 
            sum +=this.parseInt(table.rows[j + 1].cells[i].innerHTML);
        
        document.getElementById("total").cells[i].innerHTML = sum;
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
    // console.log(index);
    document.getElementById("max").innerHTML=table.rows[index].cells[0].innerHTML;
}

window.onload=function(){
    total();
    maxMonth();
}

