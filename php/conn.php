<?php
	$dbhost = 'localhost:3316';
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

    // $sql = 'CREATE TABLE user (
    //     Id integer, 
    //     UserName varchar(20),
    //     Pass varchar(20))';

   // $retval = mysqli_query( $conn, $sql );
    // if(! $retval )
    // {
    // die('Nuk mund te krijohet tabela' . mysqli_connect_error());
    // }
    // echo "Tabela u krijua me sukses!\n";

   // $sql1 = 'insert into user values(1,"filan","iamugly");';
    //$retval = mysqli_query( $conn, $sql1 );
    // if(! $retval )
    // {
    // die('Te dhenat nuk mund te shtohen' . mysqli_connect_error());
    // }
    // echo "Te dhenat u shtuan!\n";

    $select = 'SELECT ID,UserName,Pass FROM user';
    $retval = mysqli_query( $conn,$select);
    
    if(! $retval ) {
       die('Could not get data: ' . mysqli_error());
    }
    
    while($row = mysqli_fetch_array($retval, MYSQLI_NUM)) {
       echo "ID :{$row[0]}  <br> ".
          "userName : {$row[1]} <br> ".
          "pass : {$row[2]} <br> ".
          "--------------------------------<br>";
    }

    mysqli_close($conn);
?>
