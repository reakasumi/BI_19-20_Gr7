<?php

class logoutController{


function logout(){
    setcookie("type", "",time()-(86400 * 1));
    header("Location: ../login.html");
}
}
?>