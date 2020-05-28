<?php


  $dbhost = 'localhost:3306';

    $dbuser = 'root';
    $dbpass = '';
    $db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);



    echo "hello";
    // class setData{
         $apartment_name;
         $location;
         $cost;
         $image;
         $desc;
         $guestsNumber;
        


        // function __construct(){
        // }

       // function search(){
            
    echo "hello";


            if( isset($_GET['search'])) {
                $city=$_GET['browser'];
                $dateStart=$_GET['dateStart'];
                $dateEnd=$_GET['dateEnd'];
                $guests=$_GET['guests'];



                $sql="SELECT apartment_name,location,price,image,description,numOfGuests FROM rent_apartments WHERE location='$city' AND dateFrom<='$dateStart' AND dateTo>='$dateEnd' AND numOfGuests>='$guests'";
                $retval = mysqli_query( $GLOBALS['conn'], $sql );
                $count = mysqli_num_rows($retval);
                if (!$retval) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
                elseif($count===0){
                    echo "Nuk ka ndonje apartament te lire me kushtet e cekura!";
                }
                else{
                    while($row = mysqli_fetch_array($retval, MYSQLI_NUM)) { 
                    global $apartment_name, $location, $cost, $image, $desc, $guests;
                    
                        $apartment_name=$row[0];
                        $location=$row[1];
                        $cost=$row[2];
                        $image=$row[3];
                        $guestsNumber=$row[5];
                        //$_SESSION['guestsNumber']=$row[5];

                        echo "na lodheee";
                        echo "<p>".htmlspecialchars($guestsNumber)."</p>"; 

                        header("Location: ../places.php?guests=);
                      //echo "$apartment_name";

                    }

                }
                //echo $city." ".$dateStart." ".$dateEnd." ".$guests;
            }
        // }

        // function get_guests(){
        //     //global $guests;
        //     return $this->$guests;
        // }
    // }

$f = new setData();
$f->search();
    
?>