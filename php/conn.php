<?php
	$dbhost = 'localhost:3316';
	$dbuser = 'root';
	$dbpass = '';
	$db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
    if(! $conn ){
        die('Nuk mund te lidhet databaza: ' . mysqli_connect_error());
    }
    echo 'Lidhja e suksesshme';
    mysqli_close($conn);
?>
