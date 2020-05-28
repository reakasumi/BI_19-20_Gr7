<?php


$dbhost = 'localhost:3306';
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
        
        function __destruct() {
            echo "Username i perdoruesit eshte {$this->userName}<br> ";
           // echo "Shfrytezuesi nuk mund te krijohet";
          }

        function insert_User(){

            global $id,$userName,$password,$email,$gender;


            $passRegex=preg_match('@^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$@',$password);
            //echo $passRegex;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo("$email is not a valid email address");
             }
             else{
              
             

            if($passRegex === 1){
                $insert="INSERT INTO Users(ID,UserName,Passwordi,Email,Gender) VALUES('$id','$userName', '$password', '$email', '$gender');";

                $retval = mysqli_query( $GLOBALS['conn'], $insert );

                if(! $retval ){
                    die('Te dhenat nuk mund te shtohen: ' . mysqli_connect_error());
                }
                echo "Te dhenat u regjistruan me sukses\n";
                header("Location: ../logIn.html");

            }
            else{
                header("Location: ../signUp.html");
               // $fontColor='style="color:#ff442a;"';
            }

            mysqli_close( $GLOBALS['conn']);
        
        } 
        
    }

      

    }

?>