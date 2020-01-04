window.onload = function () {
    var table = document.getElementById("trips");

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
