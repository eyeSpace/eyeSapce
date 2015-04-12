<?php
define('DB_HOST', 'mysql2.000webhost.com');
define('DB_USER', 'a1799424_nasa');
define('DB_PASS', 'nasaspace2015');
define('DB_NAME', 'a1799424_nasa');

$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());	
?>
<?php
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
$sql="Insert into spacedata (filename) values('$filename')";
$result=mysql_query($sql);	
if ($result)
{
	$id=mysql_insert_id();
	
	header("location:http://pictonetkenya.com/twitter.php?id=".$id."&media=".$filename);
}
else
{
	echo mysql_error();
}




} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploaded_file']['name']);
    echo "target_path: " .$target_path1;
}
?>
