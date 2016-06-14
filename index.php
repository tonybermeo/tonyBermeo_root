<!DOCTYPE  html>
<html>
	<head>
		<title>Launching Soon</title>
		<link rel="stylesheet" href="css/landingPage.css" />
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<script src="js/functions.js" type="text/javascript"></script>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name ="keywords" content="" />
		<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "18 january 2013 12:00:00",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	
	</script>
	</head>
	<body>

		<img src="images/bg.jpg" alt="" class="bg"/>

		<section id="wrapper">
			
			<div id="cont">

				<!-- Logo Header -->
				<header>
					<a href="#"><img src="images/worldLogo.png" width="130" height="110" id="logo" alt="" /></a>
					<p>We're launching soon!</p>
					<div class="clear"></div>
				</header>
				<!-- end Logo Header -->


				<section id="box">
					<div class="arrow-up"></div>
					<div id="box-top">
						<h1>The day is coming!</h1>
						<p>Put your e-mail address below and we'll let you know.</p>
						
						<!-- Signup -->
						<div id="form">
							<form action="#" method="post">
								<input type="text" id="email" value="Enter a Valid Email Here" onfocus="if(this.value=='Enter a Valid Email Here') this.value='';" onblur="if(this.value=='') this.value='Enter a Valid Email Here';">
								<input type="submit" id="submit" value="Notify Me">
								<div class="clear"></div>
							</form>
						</div>
						<!-- END Signup -->
					</div>
					<div id="box-bottom">
						<!-- TIMER -->
						<div id="countdown-container">
							<p class="launch-text">Launching in...</p>
							<div id="timer">
								<ul id="countdown">
									<li>
										<span class="days">00</span>
										<p class="timeRefDays">days</p>
									</li>
									<li>
										<span class="hours">00</span>
										<p class="timeRefHours">hours</p>
									</li>
									<li>
										<span class="minutes">00</span>
										<p class="timeRefMinutes">minutes</p>
									</li>
									<li>
										<span class="seconds">00</span>
										<p class="timeRefSeconds">seconds</p>
									</li>
								</ul>
							</div>
							<div class="clear"></div>						
						</div>
						<!-- END Timer -->
					</div>
				</section>
				
				<!-- FOOTER -->
				<div id="footer">
					<p class="note">We <img src="images/heart.png" alt=""/> your privacy.</p>
					<p class="legal"><a href="#" target="_blank" >Legal Information</a></p>
				</div>
				<!-- End Footer -->

			</div>
		</section>			
	</body>
</html>