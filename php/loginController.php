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
                // session_register("username");
               // header("Location: ../index.php");
              // echo("log out ");

                setcookie("type2", $myusername,  time() + (86400 * 2));
                header("Location: ../index.php");
               
                
                //echo("<script> alert('Welcome '".$_COOKIE["type"].");</script>"); 
               }
               else{
                //setcookie("type", "",time()-(86400 * 1));
                //header("Location: ../login.html");
                echo("not loged in");
            }
            mysqli_close( $GLOBALS['conn']);
        }

    }

?>