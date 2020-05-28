<?php
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["uploadedfile"]["name"]);
//echo $target_file;
// $uploadOk = 1;
// $inputFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $newFile = "../files/". basename($_FILES["uploadedfile"]["name"]);
    move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],  'data.txt');
    //$uploadedfile=$_FILES['file']['name'];
    //echo 'hello';
    $myfile = fopen($newFile, "r+") or die("Unable to open file!");

    try{
            $fileData=fread($myfile,filesize($newFile));

            $txt = " \n Favorite places of user!\n";
            fwrite($myfile, $txt);


        
            $result = preg_replace_callback('/( ([a-z]{1}))/',function ($matches) {
                                        return strtoupper($matches[0]);
                                        } , $fileData);
                                    // echo $result;



            $arr= (explode(", ",$result));

            sort($arr);

            echo "<div style='margin:50px 650px;'>";
            echo "<h3 style='color:darkblue;'>Data given from file:</h3>";

            echo "<ul>";
            for($i=0; $i<sizeof($arr); $i++){
                echo "<li>".$arr[$i]."</li>";  
            }
            echo "</ul><button style='background-color: #814989;
            border: none;
            border-radius: 7px;
            color: #E7FFFD;
            font-size: 0.7em;
            text-decoration: none;
            cursor: pointer;
            width: 150px;
            height: 35px;
            '><a href='../places.php' style='color:white;font-weight:bold;text-decoration:none;'>Go Back!</a> </button></div>";

            fclose($myfile);
        }
    catch(Exception $e){
        echo "Couldn't read given file";
    }
}


?>