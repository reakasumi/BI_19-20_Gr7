//drag and drop android
function dragStart(ev) {
    ev.dataTransfer.effectAllowed = 'move';
    ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
    ev.dataTransfer.setDragImage(ev.target, 0, 0);
    return true;
}
function dragEnter(ev) {
    event.preventDefault();
    return true;
}
function dragOver(ev) {
    return false;
}
function dragDrop(ev) {
    var src = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(src));
    ev.stopPropagation();
    return false;
}


function checkMatching(form) {
    var password1 = form.password1.value;
    var password2 = form.password2.value;

    // If password not entered 
    if (password1 == '')
        alert("Please enter Password");

    // If confirm password not entered 
    else if (password2 == '')
        alert("Please enter confirm password");

    // If Not same return False.     
    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...");
        return false;
    }

    // If same return True. 
    else {

        //check for robots
        if($('#notRobot').find('#android').length != 1)
        {
            alert("Please prove that you are not a robot!");
            return false;
        } 
        
        //check for terms and conditions
        var check = document.getElementById("terms").checked;
        if (!check) {
            alert('You must agree to the terms first.');
            return false;
        }
        //after check return true
        alert("Welcome!");
        window.location.href = 'index.html';

        return true;
    }

}




