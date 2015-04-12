<?php
define('DB_HOST', 'mysql2.000webhost.com');
define('DB_USER', 'a1799424_nasa');
define('DB_PASS', 'nasaspace2015');
define('DB_NAME', 'a1799424_nasa');

$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());
	
//$mysql_host = "mysql2.000webhost.com";
//$mysql_database = "a1799424_nasa";
//$mysql_user = "a1799424_nasa";
//$mysql_password = "nasaspace2015";
  //$host='localhost';
  //Change the user,password and database variables as desired
  //$user='root';
  //$pass='';
  //$dbname='varsity';
  //$con=mysql_connect($host,$user,$pass) or die(mysql_error());
  //$db=mysql_select_db($dbname) or die(mysql_error());
  
  //Account nasaspacechallenge.net76.net with username a1799424 and password nasaspace2015 has been created!
?>


 