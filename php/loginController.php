<?php 
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db='travelDB';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
class loginController{
       
    
    function __construct(){
 
    } 
     function checkUserDB($myusername, $mypassword){
            $sql = "SELECT ID FROM Users WHERE username = '$myusername' and passwordi = '$mypassword'";
            $retval = mysqli_query( $GLOBALS['conn'], $sql );             
            $count = mysqli_num_rows($retval);
            
                
               if($count===1){
                   header("Location: ../index.html");
                   
               }
               else{
                header("Location: ../login.html");
               
            }
            mysqli_close( $GLOBALS['conn']);
        }

    }

?>