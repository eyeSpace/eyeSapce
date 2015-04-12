<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>eyeSpace Nasa App Challange</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							eyeSpace
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body"></a></li>
                        <li><a href="#features"></a></li>

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div  class="item active" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">eye<span> Space</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/nasa</span> spaceAppChallenge</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">MMU Team 1</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Category<span> Robotics</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/innovation</span> is Limitless</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">MMU team 1</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
  
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="works" class="works clearfix">
			<div class="container">
			<div class="row"><br/>
			<label>Start Choose Date <input style="width:200px;border-radius:4px;height:30px;" type="date" Placeholder="Start Date" id="start"/></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Choose End Date <input style="border-radius:4px;height:30px;width:200px;" type="date" Placeholder="End Date" id="end"/></label>
			<button id="sort">Sort</button>
			</div>
				<div class="row">
				<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
				<br/>
					<div class="col-md-9" style="border-bottom:1px dotted silver;padding-bottom:5px;">
					<h3 style="width:72%;float:left;">Photos By eyeSpace</h3>
					
					 </div>
					
					<div class="col-md-3" style="border-bottom:1px dotted silver;padding-bottom:5px;">
					<h3>Audio by eyeSpace</h3>
				
					
					</div>
					
					</div>
				
				</div>
			</div>
			<div class="row">
			<div class="col-md-9" style="border-right:1px dotted silver;">
			
			<div class="row" id="search">

						
					
				

	
	<?php
			include_once 'include/config.php';
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
?>
	
	</div>
			</div>
			
			<div class="col-md-3">
			<?php

			$result = mysql_query("SELECT * FROM audio ORDER BY id DESC") or die(mysql_error());  
			 $num=mysql_num_rows($result);
			 WHILE($row = mysql_fetch_array($result)){
			 $filename = $row['filename'];
			 $date = $row['date'];
			?>	
			
			<div style="float:left;width:100%;border-bottom:1px dotted grey;">
			
			<h4><a href="uploads/<?php echo $filename; ?>"><?php echo $filename; ?></a></h4>
			<audio controls="controls">
			<source src="uploads/<?php echo $filename; ?>"></source>
			</audio>			
			<h4>Received @ : <?php echo $date; ?></h4>
						
			</div>
					
			
			<?php 

} 
?>
	</div>		
		
</div>
		</section>
		
        <!--
        End Our Works
        ==================================== -->
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Meet Our Team</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="uploads/space2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>John Filmr Doe</h4>
						<span>Managing Director</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="uploads/space2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Martin Matrone</h4>
						<span>Lead Developer</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="uploads/space2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Steve Flaulkin</h4>
						<span>Sr. UI Designer</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="uploads/space2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>John Filmr Doe</h4>
						<span>Managing Director</span>
					</figure>
					<!-- end single member -->
					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
	
			
		<footer id="footer" class="footer">
			Team One Nasa SpaceApp Challenge Robotics Category
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="js/jquery.form.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <!--  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
		<script type="text/javascript">
$(function(){
	$("#sort").click(function(){
       alert("sds");
		var start=$("#start").val();
		var end=$("#end").val();
		
		$.post("search.php",{start:start,end:end},function(data){
			$("#search").html(data);
			});
		});
});
		</script>
		
    </body>
</html>
