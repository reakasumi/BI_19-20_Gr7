//check if a required filled is empty
function isEmpty(inputField) {
    if (inputField == "") {// || inputField == null
        return true;
    }
    return false;
}

//clean error messages
function clean(element) {
    element.classList.remove("error");
}

//load HTML page before moving a DOM object
window.addEventListener("load", function () {

    var requiredFields = document.querySelectorAll(".required");
        for (var i = 0; i < requiredFields.length; i++) {
                requiredFields[i].addEventListener("change", function(e) {
                clean(e.target);
            });
        }
    

    //atfer submitting, check for empty fields
    var myForm = document.getElementById("myForm");
    myForm.addEventListener("sumbit", function (e) {
        var requiredFields = document.querySelectorAll(".required");
        for (var i = 0; i < requiredFields.length; i++) {
            if (isEmpty(requiredFields[i])) {
                e.preventDefault();
                requiredFields[i].classList.add("error");
            }
            else {
                clean(requiredFields[i]);
            }
        }
    })

});

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

