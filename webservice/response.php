<?php
include_once 'include/config.php';
$result = mysql_query("SELECT * FROM spacedata ORDER BY id DESC") or die(mysql_error());  
echo mysql_num_rows($result);
?>
		