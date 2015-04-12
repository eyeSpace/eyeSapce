<?php
include_once 'include/config.php';

//Uploading File to server php folder//
$target_path1 = "uploads/"; //Uploading to same directory as PHP file
$file = basename($_FILES['uploaded_file']['name']);
$uploadFile = $file;
$randomNumber = rand(0000, 99999); 
$newName = $target_path1 . $randomNumber . $uploadFile;

//$target_path1 = "uploads/";
/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
//$target_path1 = $target_path1 . basename( $_FILES['uploaded_file']['name']);
if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newName)) {
    echo "The first file ".  basename( $_FILES['uploaded_file']['name']).
    " has been uploaded.";
	
$filename = $randomNumber . $uploadFile;
$sql="Insert into audio (filename) values('$filename')";
$result=mysql_query($sql);	
if ($result)
{
	echo "success";
}
else
{
	echo mysql_error();
}




} 
else
{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploaded_file']['name']);
    echo "target_path: " .$target_path1;
}
?>
