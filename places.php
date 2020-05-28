<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/places.css">
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="stylesheet" href="css/newyork.css">

    <script src="js/nightMode.js"></script>
    <script src="js/geolocation.js"></script>
    <title>Places</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="navigation">
            <nav>
                <div class="header-text">
                    <span class="composition-text">
                        Travel
                    </span>

                    <span class="left-text">
                        Dare to live outside your box!
                    </span>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>
                    <li class="dropdown">
                        <a href="#">PLACES</a>
                        <div class="dropdown-content">

                            <div class="row">
                                <div class="column">
                                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                                        <p>
                                            <label class="just-text">Where do you want to go?</label>
                                            <br>
                                            <input list="browsers" class="inputStyle_1" name="browser"
                                                placeholder="Search.." id="myInput"
                                                style=" background-image: url('images/search.png');">
                                            <datalist id="browsers">
                                                <option value="New York">
                                                <option value="Berlin">
                                                <option value="Paris">
                                                <option value="London">
                                            </datalist>
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check in</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate1" name="dateStart">
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check out</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate2" name="dateEnd">
                                        </p>
                                        <p>
                                            <label class="just-text">Guests</label><br>
                                            <input type="number" class="inputStyle_1" placeholder="How many.." min="1"
                                                max="30" step="1" id="myInput2" name="guests">
                                        </p>

                                        <input type="submit" name="search" id="button1" value="SEARCH">

                                    </form>


                                </div>



                            </div>

                    </li>

                    <li><a href="logIn.html" target="_self">LOG IN</a></li>

                </ul>
            </nav>
            <!-- <button id="modes" type="button" onclick="changeMode()">Change Background Color</button> -->
        </div>
    </header>
    <!-- //HEADER -->





    <?php

        //session_start();

        define('dbhost','localhost:3316');
        define('dbuser','root');
        define('dbpass','');
        define('db','travelDB');
        // $dbhost = 'localhost:3316';
        // $dbuser = 'root';
        // $dbpass = '';
        // $db='travelDB';
        $conn = mysqli_connect(dbhost, dbuser, dbpass, db);



        // class setData{
            $apartment_name;
            $location;
            $cost;
            $image;
            $desc;
            $guestsNumber;
            $dateFrom;
            $dateTo;
            //$_SESSION['guestsNumber'];

                if( isset($_GET['search'])) {
                    $city=trim($_GET['browser']);
                    $dateStart=$_GET['dateStart'];
                    $dateEnd=$_GET['dateEnd'];
                    $guests=$_GET['guests'];

                    $searchCity="SELECT name FROM cities;";
                    $eval = mysqli_query( $GLOBALS['conn'], $searchCity );
                    if (!$eval) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    else{
                        $k=$city;
                        while($row = mysqli_fetch_array($eval, MYSQLI_NUM)) {
                            $cityName['name']=$row[0]; 

                            $numOfChars=strlen($cityName['name']);
                            $similarity=similar_text($k,$cityName['name'],$percent);

                            if(($numOfChars-2)==$similarity || $percent>=45){
                                $city=$cityName['name'];
                            break;
                            }
                            else{
                                $city=str_replace($k,"StringNotApplicable",$k);
                            }
                        }   
                    }
                   

                try{
                    $sql="SELECT apartment_name,location,price,image,description,numOfGuests,dateFrom,dateTo FROM rent_apartments WHERE location='$city' AND dateFrom<='$dateStart' AND dateTo>='$dateEnd' AND numOfGuests>='$guests'";
                    $retval = mysqli_query( $GLOBALS['conn'], $sql );
                    $count = mysqli_num_rows($retval);
                    
                    $apartments=array();

                    if (!$retval) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    elseif($count===0){
                        echo "Nuk ka ndonje apartament te lire me kushtet e cekura!";
                    }
                    else{
                        
                        while($row = mysqli_fetch_array($retval, MYSQLI_NUM)) { 
                            global $apartment_name, $location, $cost, $image, $desc, $guestsNumber;

                            $_SESSION['apartment_name']=$row[0];
                            $_SESSION['location']=$row[1];
                            $_SESSION['cost']=$row[2];
                            $_SESSION['image']=$row[3];
                            $_SESSION['desc']=$row[4];
                            $_SESSION['guestsNumber']=$row[5];
                            $_SESSION['dateFrom']=$row[6];
                            $_SESSION['dateTo']=$row[7];

                            $c=mysqli_num_rows($retval)-$count;
                            $apartments[$c]=array($_SESSION['dateFrom'],$_SESSION['dateTo'],$_SESSION['guestsNumber'],$_SESSION['location'],
                                                         $_SESSION['image'],$_SESSION['apartment_name'],$_SESSION['cost'],$_SESSION['desc']);
                             
                            $count--;
                            //header("Location: ../places.php?guests=);
                        }
                        ?>


                        <h4 id="place" class="redbox" style="padding-top: 4px;margin-top:54px;" name="place">

                                    <?php
                                        if(isset($_SESSION['location'])){
                                            echo $apartments[0][3];
                                        }
                                        else{
                                            echo "PLACE";
                                        }
                                    
                                    ?>
                                 </h4>
                    <?php
                        for ($i = 0; $i < mysqli_num_rows($retval); $i++) {
                           // for ($j = 0; $j < 3; $j++) { ?>
                        <div class="place-content" style="text-align:center;">
                                 <div class="place-row" style="margin-right:700px;"> 

                                    <p id="date">Date available:</p> <?php echo "<p>".$apartments[$i][0]."</p>";?>
                                    <?php echo "<p>".$apartments[$i][1]."</p>"; ?>
                                    <p id="guests" name="guests">Guests:</p>
                                    <?php
                                        echo "<p>".$apartments[$i][2]."</p>";
                                    ?>
                                </div>
                            <section class="content">
                                <div class="hotels" name="apartment">
                                    <a href="https://www.airbnb.co.in/?logo=1" target="_blank">
                                        <img id="img1" alt="icon"
                                            <?php 
                                                if(isset($_SESSION['image'])){
                                                    echo " src='".$apartments[$i][4]."' ";
                                                }
                                                else{
                                                    echo " alt='there is nothing to show' ";
                                                }
                                                
                                            ?>
                                            width="300" height="200" name="img">
                                    </a>
                                    <p id="title" style="color:darkblue;font-size:23px;font-style:italic;">
                                    <?php
                                            if(isset($_SESSION['apartment_name'])){
                                                echo $apartments[$i][5];
                                            }
                                            else{
                                                echo "there is nothing to show";
                                            }
                                        ?>

                                     </p>
                                    <p id="cost1" name="cost">
                                        <?php
                                            if(isset($_SESSION['cost'])){
                                                echo $apartments[$i][6]." € / night";
                                            }
                                            else{
                                                echo "there is nothing to show";
                                            }
                                        ?>
                                    </p>
                            
                                    <p id="desc1" name="desc" style="text-align:left;">
                                        <?php
                                            if(isset($_SESSION['desc'])){
                                                echo $apartments[$i][7];
                                            }
                                            else{
                                                echo "there is nothing to show";
                                            }
                                        ?>
                                 </p>

                                </div>
                            </section>


                        </div>


            <?php 
                                        //}
                                    }

                                }
                            }

            catch(Exeption $e){
                echo "Couldn't run query properly or other error is occuring";
            }
            }
           
            
            ?>




    <!-- CONTENT -->


<!-- //content -->
<div >
<form action="php/uploadFile.php" enctype="multipart/form-data" method="post" style="margin:20px 430px ;">
<label>Upload a file with your preferences:</label>


    <input type="file" name="uploadedfile"  />
    <!-- <input type="submit" value="Edit" name="editFile" style="background-color: #10498f;
    border: none;
    border-radius: 7px;
    color: #E7FFFD;
    font-size: 0.7em;
    text-decoration: none;
    cursor: pointer;
    width: 70px;
    height: 35px;
   " /> -->
    <input type="submit" name="submit" style="background-color: #E2494C;
    border: none;
    border-radius: 7px;
    color: #E7FFFD;
    font-size: 0.7em;
    text-decoration: none;
    cursor: pointer;
    width: 100px;
    height: 35px;
   " />

</form>

            </div>

    <div id="map" style="height:400px; width: 700px; margin: auto; "></div>

    <!-- <div class="earth3dmap-com"><iframe id="iframemap"
            src="https://maps.google.com/maps?q=kosovo&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="75%"
            height="500" frameborder="0" scrolling="no"
            style="margin:0 0 20% 10em ; position: relative; top: 140px;"></iframe>

    </div> -->
    <!-- <img src="images/map.png" alt="" id="myMap" style="height:400px; width: 700px; margin: auto;"> -->

    <!-- //CONTENT -->

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section blog">
                    <h2>Latest From The Blog</h2>
                    <a href="blog.html" target="_blank">
                        <img src="images/cities/Thailand-Wat-Arun-Buddhist-temple-in-Bangkok-Yai-district-of-Bangkok-Wallpaper-Hd-For-Desktop-Mobile-And-Tablet-3840x2400-915x515.jpg"
                            alt="Thailand landscape" width="110px" height="110px">
                        <h4>Thailand - the most visited country</h4>
                        <p><span style="overflow-x: auto;">Due to researches made by statistical results Bangkok,
                                Thailand is one of the most visited cities of 2019. People chose to go there because
                                of
                                its beautiful...</span></p>
                    </a>

                    <a href="blog.html" style="float: left; margin-top: 25px;" target="_blank">
                        <img src="images/vanGogh/Vincent_van_Gogh_-_Self-portrait_with_grey_felt_hat_-_Google_Art_Project.jpg"
                            alt="Van Gogh" width="110px" height="110px">

                        <h4>The art of Vincent van Gogh</h4>
                        <p><span style="overflow-x: auto;">Vincent Willem van Gogh the Dutch post-impressionist
                                painter
                                who is among the most famous and influential figures in the history of Western art.
                                The
                                Starry Night by him is one of the most known picture...</span></p>
                    </a>
                </div>

                <div class="footer-section details">
                    <h2>Company Details</h2>
                    <ul>
                        <li>Travel</li>
                        <li>
                            <address>N&#xeb;n&#xeb; Tereza, 105</address>
                        </li>
                        <li>Prishtin&#xeb;</li>
                        <li>10000</li>
                        <br>
                        <li>Tel:+383 44 129512</li>
                        <li>Fax: 029 3458487617</li>
                        <li>Email: <a href="mailto:contact@mydomain.com">travel@tr-pr.com</a></li>
                        <br>
                        <li>Office hours</li>
                        <li>Monday 08:00~16:00</li>
                        <li>Saturday 10:00~16:00</li>
                    </ul>
                </div>

                <div class="footer-section contact-form">
                    <h2>Contact Us</h2>
                    <form action="" method="post" id="contact">
                        <input type="text" placeholder="Name" name="inputType1"><br>
                        <input type="email" placeholder="Email" name="inputType1" required><br>
                        <textarea placeholder="Message"></textarea><br>
                        <input type="submit" form="contact" value="SUBMIT">
                    </form>
                </div>
            </div>
            <!-- <hr> -->
            <div class="footer-bottom">
                <p id="copy">Copyright &copy; 2019 - All rights reserved</p>
                <p id="template">Travel Company</p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- geolocation api key -->
    <!-- <script async defer
            src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyC5HCZFVPWj1nCHPozjCRngscz5bUK0jew">
            </script>  AIzaSyCihavCG28BbfqP3saRymM8W55RZKtuANg-->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBxeeraroriooA1NxYn6QW6NLlYlvQvn4&callback=initMap">

        </script>

    <!-- <script src="js/header.js"></script>
    <script src="js/newyork.js"></script> -->

</body>

</html>