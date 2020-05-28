<?php
//$target_dir = "files/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// echo $target_file;
// $uploadOk = 1;
// $inputFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   //$check =  ($_FILES["fileToUpload"]["tmp_name"]);
//   $check = $inputFileType['extension'];
//   if($check == 'txt') {
//     echo "File is aa text - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not text file.";
//     $uploadOk = 0;
//   }
// }

if(isset($_POST["submit"])) {
$info = pathinfo($_FILES['fileToUpload']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "file.".$ext; 

$target = '../files/'.$newname;
move_uploaded_file( $_FILES['filetoUpload']['tmp_name'], $target);
 //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 'contents/' . $_FILE['name']);
  //$uploadedfile=$_FILES['file']['name'];

 // $myfile = fopen($target_file, "r+") or die("Unable to open file!");
 // echo fread($myfile,filesize($target_file));
 // fclose($myfile);

}

?>