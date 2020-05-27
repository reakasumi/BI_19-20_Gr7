<?php


$dbhost = 'localhost:3316';
	$dbuser = 'root';
	$dbpass = '';
    $db='travelDB';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    class userController{
        private $id;
        private $userName;
        private $password;
        private $email;
        private $gender;


        function __construct($user){
            global $id,$userName,$password,$email,$gender;
            $id=$user -> get_ID();
            $userName=$user -> get_name();
            $password=$user -> get_password();
            $email=$user -> get_email();
            $gender=$user -> get_gender();
        } 


        function insert_User(){

            global $id,$userName,$password,$email,$gender;

            $insert="INSERT INTO Users(ID,UserName,Passwordi,Email,Gender) VALUES('$id','$userName', '$password', '$email', '$gender');";

            $retval = mysqli_query( $GLOBALS['conn'], $insert );

            if(! $retval ){
                die('Could not enter data: ' . mysqli_connect_error());
            }
            echo "Te dhenat u regjistruan me sukses\n";
            
            mysqli_close( $GLOBALS['conn']);
        
        } 
        
}



?>