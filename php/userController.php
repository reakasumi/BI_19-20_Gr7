<?php

include ("user.php");
$dbhost = 'localhost:3316';
	$dbuser = 'root';
	$dbpass = '';
    $db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    class userController{
        
        function __construct(){

        }
        $user=new User();

        $id=$user -> get_ID();
        $userName=$user -> get_username();
        $pass=$user -> get_password();
        $email=$user -> get_email();
        $gender=$user -> get_gender();

        

        function insert_User(){
            $insert='INSERT INTO Users(ID,UserName,Passwordi,Email,Gender) VALUES('$id','$userName','$pass','$email','$gender');'
        }

    }

?>