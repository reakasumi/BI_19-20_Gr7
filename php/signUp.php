<?php
    include('user.php');
    include('userController.php');

    $useri=new Useri();
    $createUser=new userController($useri);

    if( $_POST["email"] && $_POST["username"] && $_POST["password1"] && $_POST["gender"]) {
        
            $id=$useri -> set_ID(uniqid());
            $userName=$useri -> set_username( $_POST["username"]);
            $pass=$useri -> set_password( $_POST["password1"]);
            $email=$useri -> set_email($_POST["email"]);
            $gender=$useri -> set_gender( $_POST["gender"]);

        //   echo "You are ". $_POST["gender"]. " years old.";


        $createUser->insert_User();

        exit();
    }

?>