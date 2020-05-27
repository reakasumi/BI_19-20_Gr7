<?php


$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
    $db='travelDB';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    class userController{
        
        
       // $user=new User();

        private $id;
        private $userName;
        private $password;
        private $email;
        private $gender;


        function __construct($user){
            $id=$user -> get_ID();
          
            $userName=$user -> get_name();
            echo($userName."hjsagdjashdgja");
            $password=$user -> get_password();
            $email=$user -> get_email();
            $gender=$user -> get_gender();

        }
        function insert_User(){

            $insert="INSERT INTO Users(ID,UserName,Passwordi,Email,Gender) VALUES('$id','$userName', '$password', '$email', '$gender');";
            // $stmt = $pdo->prepare($insert);
            // $stmt->execute([$id, $userName, $password, $email, $gender]);

            // $stmt = $mysqli->prepare($insert);
            // $stmt->bind_param("ss",$id, $userName, $password, $email, $gender );
            // $stmt->execute();
            echo("HElloo");
            $retval = mysqli_query( $conn, $insert );
		if(! $retval )
		{
		  die('Could not enter data: ' . mysqli_connect_error());
		}
		echo "Te dhenat u regjistruan me sukses\n";
		mysqli_close($conn);


            //$retval = mysqli_query( $conn, $insert );
        } //$insert='INSERT INTO Users(ID,UserName,Passwordi,Email,Gender) VALUES(:$id,:$userName,:$pass,:$email,:$gender);'
        }



?>