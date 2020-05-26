<?php
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db='travelDB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    
    //$sql = 'CREATE Database travelDB';
    //$retval = mysqli_query( $conn, $sql );

    if(! $conn ){
        die('Nuk mund te lidhet databaza: ' . mysqli_connect_errno());
    }
    echo 'Lidhja e suksesshme<br>';
    
    $sql = 'CREATE TABLE user (
        Id integer, 
        UserName varchar(20),
        Pass varchar(20))';


    $retval = mysqli_query( $conn, $sql );
    if(! $retval )
    {
    die('Nuk mund te krijohet tabela' . mysqli_connect_error());
    }
    echo "Tabela u krijua me sukses!\n";
    mysqli_close($conn);
?>
