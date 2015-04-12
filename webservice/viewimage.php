<?php
include_once('include/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NASA Space App</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="js/jquery.core.js"></script>
<script type="text/javascript" src="js/jquery.superfish.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.scripts.js"></script>

<script>
window.setInterval(function() {
$('#blinkText').toggle();
}, 1000);
</script>
</head>

<body>
<div id="wrap">
    <div class="top_corner"></div>
    <div id="main_container">
    
        <div id="header">
            <div id="logo"><a href="index.php"><img src="images/logo.png" alt="" title="" border="0" /></a></div>           
        
        </div>
          
        <div class="center_content_pages">
		
            <div class="block_wide">
                <h2>Photographs From the Space : Date || <?php echo $date = date('Y-M-d-h:i:s'); ?> || The NASA APPS CHALLENGE 2015</h2>
                
			<div class="space_image">
			<?php
			$id=$_GET['source'];
			$result = mysql_query("SELECT * FROM spacedata WHERE id='$id' ORDER BY id DESC") or die(mysql_error());  
			 WHILE($row = mysql_fetch_array($result)){
			 $filename = $row['filename'];
			 $date = $row['date'];
			?>			
			<div class="image1"><img src="uploads/<?php echo $filename; ?>" class="space"/>&nbsp;&nbsp;&nbsp;Received @ : <?php echo $date; ?></div>
			<?php } ?>
			</div>
			</div>
            
            </div>
                
        <div class="clear"></div>
        </div>
        
        <div class="footer">
        	<div class="copyright"><a href="#" target="_blank">Design by MMU TEAM NASA</a> | <a href="#" target="_blank">Thanks to MMU TEAM NASA</a></div>
        
        	<div class="footer_links">
                <a class="current" href="index.php" title="">The Next Big Innovation for the Space</a>            
            </div>
        </div>
      
      
    
    </div>

</body>
</html>
