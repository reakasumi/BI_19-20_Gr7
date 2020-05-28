<?php
   // include_once('user.php');
    include_once('loginController.php');
    include_once('logout.php');
    session_start();
    $login=new loginController();
    $logout=new logoutController();
    
    if(isset($_COOKIE["type"]))
    {
      header("location:../index.php");
      echo("cookie login");
    }
   // else{ 
    if(  $_POST["username"] || $_POST["password"] ) {
             
        $login->checkUserDB($_POST["username"],$_POST["password"] );

        exit();
    }
    else{
        $logout->logout();
     }
    
    //}
 

?>