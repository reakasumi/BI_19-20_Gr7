<?php
    $dbhost = 'localhost:3316';
    $dbuser = 'root';
    $dbpass = '';
    $db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    


    class setData{
        private $apartment_name;
        private $location;
        private $cost;
        private $image;
        private $desc;
        private $guests;

        function search(){

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
                        $desc=$row[4];
                        $guests=$row[5];

                        header("Location: ../places.php");
                        //echo "$apartment_name";
                    }

                }
                //echo $city." ".$dateStart." ".$dateEnd." ".$guests;
            }
        }

        function get_guests(){
            global $guests;
            return $this->$guests;
        }
    }


    
?>