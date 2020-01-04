var table=document.getElementById("trips").title;//something's not OK
// var x=table.rows.length;
console.log(table);

var i=0;
var sum=0;
while(i!==5){
    for(var j=0;j<10;j++){
        sum += table.rows[j+1].cells[i].innerHTML;
    }
    document.getElementById("total").cells[i].innerHTML=sum;
    sum=0;
    
    i++;
}
