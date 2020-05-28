<?php
    include_once('user.php');
    include_once('userController.php');

    $useri=new User();
  

    if( $_POST["email"] || $_POST["username"] || $_POST["password1"] || $_POST["gender"]) {
        
            $id=$useri -> set_ID(uniqid());
            $userName=$useri -> set_name( $_POST["username"]);
            $pass=$useri -> set_password( $_POST["password1"]);
            $email=$useri -> set_email($_POST["email"]);
            $gender=$useri -> set_gender( $_POST["gender"]);

        $createUser=new userController($useri);
        $createUser->insert_User();

        exit();
    }

?>