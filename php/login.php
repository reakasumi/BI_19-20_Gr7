<?php
   // include_once('user.php');
    include_once('loginController.php');

    $login=new loginController();
  

    if(  $_POST["username"] || $_POST["password"] ) {
             
        $login->checkUserDB($_POST["username"],$_POST["password"] );

        exit();
    }

?>