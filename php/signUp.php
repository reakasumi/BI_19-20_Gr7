<?php
    include_once('user.php');
    include_once('userController.php');

    $useri=new Perdoruesi();
  

    if( $_POST["email"] || $_POST["username"] || $_POST["password1"] || $_POST["gender"]) {
        
            $id=$useri -> set_ID(uniqid());
            echo("hsagdhsga");
            $userName=$useri -> set_name( $_POST["username"]);
            echo($useri -> get_name());
            $pass=$useri -> set_password( $_POST["password1"]);
            $email=$useri -> set_email($_POST["email"]);
            $gender=$useri -> set_gender( $_POST["gender"]);

        //   echo "You are ". $_POST["gender"]. " years old.";

        $createUser=new userController($useri);
        $createUser->insert_User();

        exit();
    }

?>