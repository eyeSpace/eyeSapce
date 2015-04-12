<?php
include_once 'include/config.php';

if ($_POST['start']!="" && $_POST['end']!="")
{
$start=$_POST['start'];
$end=$_POST['end'];


	$result = mysql_query("SELECT * FROM spacedata WHERE date<='$end' AND date>='$start' ORDER BY id DESC") or die(mysql_error());
	$num=mysql_num_rows($result);
	WHILE($row = mysql_fetch_array($result)){
		$filename = $row['filename'];
		$date = $row['date'];
		?>
				
					
				
						<!-- single member -->
						<figure class="team-member col-md-4" style="padding:6px;" data-wow-duration="500ms">
							<div class="member-thumb" style="width:100%;">
								<img style="height:249px;border-radius:5px;width:100%;" src="uploads/<?php echo $filename; ?>" alt="Team Member" class="img-responsive">
								<figcaption class="overlay">
									<h5>Received @ : <?php echo $date; ?> </h5>
									<p>Posted by eyeSpace</p>
								</figcaption>
							</div>
							
						</figure>
						<!-- end single member -->
						
				
				<?php 
		}
	
	
}
else
{

	$result = mysql_query("SELECT * FROM spacedata ORDER BY id DESC") or die(mysql_error());
	$num=mysql_num_rows($result);
	WHILE($row = mysql_fetch_array($result)){
		$filename = $row['filename'];
		$date = $row['date'];
		?>
				
					
				
						<!-- single member -->
						<figure class="team-member col-md-4" style="padding:6px;" data-wow-duration="500ms">
							<div class="member-thumb" style="width:100%;">
								<img style="height:249px;border-radius:5px;width:100%;" src="uploads/<?php echo $filename; ?>" alt="Team Member" class="img-responsive">
								<figcaption class="overlay">
									<h5>Received @ : <?php echo $date; ?> </h5>
									<p>Posted by eyeSpace</p>
								</figcaption>
							</div>
							
						</figure>
						<!-- end single member -->
						
				
				<?php 
	
	} 
	
}
?>