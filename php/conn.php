<?php
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db='traveldb';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
    if(! $conn ){
        die('Nuk mund te lidhet databaza: ' . mysqli_connect_errno());
    }
    echo 'Lidhja e suksesshme';
    mysqli_close($conn);
?>
