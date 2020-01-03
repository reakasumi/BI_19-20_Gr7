//check if a required filled is empty
// function isEmpty(inputField) {
//     if (inputField == "") {// || inputField == null
//         return true;
//     }
//     return false;
// }

//clean error messages
// function clean(element) {
//     element.classList.remove("error");
// }

// //load HTML page before moving a DOM object
// window.addEventListener("load", function () {

//     var requiredFields = document.querySelectorAll(".required");
//         for (var i = 0; i < requiredFields.length; i++) {
//                 requiredFields[i].addEventListener("change", function(e) {
//                 clean(e.target);
//             });
//         }


//     //atfer submitting, check for empty fields
//     var myForm = document.getElementById("myForm");
//     myForm.addEventListener("sumbit", function (e) {
//         var requiredFields = document.querySelectorAll(".required");
//         for (var i = 0; i < requiredFields.length; i++) {
//             if (isEmpty(requiredFields[i])) {
//                 e.preventDefault();
//                 requiredFields[i].classList.add("error");
//             }
//             else {
//                 clean(requiredFields[i]);
//             }
//         }
//     })

// });

//basically this is not working............................................................

//jQUERY fa-eye icon for password visibility
// $(".toggle-password").click(function () {
//     $(this).toggleClass("fa-eye fa-eye-slash");
//     var input = $($(this).attr("toggle"));
//     if (input.attr("type") == "password") {
//         input.attr("type", "text");
//     } else {
//         input.attr("type", "password");
//     }
// });

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




// drag and drop the android 
function drag(e) {
    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setData("text", e.target.getAttribute('id'));
    e.dataTransfer.setDragImage(e.target, 0, 0);
    return true;
}

function dragEnter(e) {
    e.preventDefault();
}

function moveAndroid(e) {
    return false;
}

function drop(e) {
    // e.preventDefault();
    var data = e.dataTransfer.getData("text");
    e.target.appendChild(document.getElementById(data));
    e.stopPropagation();
    return false;
}

