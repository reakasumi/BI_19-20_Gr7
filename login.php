<?php
   // include_once('user.php');
    //include_once('loginController.php');
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
 
    //$login=new loginController();
   

    
   if(isset($_POST['logIn-btn'])){
       
    if(  $_POST["username"] || $_POST["password"] ) {
        $myusername= $_POST["username"];
        $mypassword= $_POST["password"];
        $sql = "SELECT ID FROM Users WHERE username = '$myusername' and passwordi = '$mypassword'";
        $retval = mysqli_query( $GLOBALS['conn'], $sql );             
        $count = mysqli_num_rows($retval);
        
            
           if($count===1){
            setcookie("type4", $myusername,  time() + (86400 * 30));
            header("Location: index.php");
           
           }
           else{
            //setcookie("type", "",time()-(86400 * 1));
            //header("Location: ../login.html");
            echo("not loged in");
        }
        mysqli_close( $GLOBALS['conn']);
       
        exit();
    }

   }
  
    
    
 

?>