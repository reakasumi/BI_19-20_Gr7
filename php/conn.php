<?php
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
    //$sql = 'CREATE Database travelDB2';
//$retval = mysqli_query( $conn, $sql );
    if(! $conn ){
        die('Nuk mund te lidhet databaza: ' . mysqli_connect_errno());
    }
    echo 'Lidhja e suksesshme';
    mysqli_close($conn);
?>
