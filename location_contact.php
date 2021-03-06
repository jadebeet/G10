<?php
	include 'functions.php';
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Cupcakes on a Cloud</title>
		<link rel="stylesheet" type="text/css" href="Style/base.css">
	</head>
	
	<body>
	
		<div id="wrapper">
			<!-- div header -->
			<div id="header">
				<div class="headerimg">
				<a href="index.php"><img src="Images/templogo.png"
				alt="Cupcakes on a Cloud"></a>
				</div>
				<div class="address">
				<p>1154 Robson St<br>Vancouver, BC<br>V6E 1B5<br>(778)123-4567<br><br>OPEN 10:00 - 8:00<br>CLOSED WEDNESDAYS</p>
				<?php
						if (isLoggedIn()){
							echo '<p id="loggedin">Hello, '.$_SESSION['SESS_FIRST_NAME'].' <br/> <a href="./members.php">Members</a><br/></p>';
						} 
				?>				
				</div>
			</div>

			<!-- div navigation -->
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a class="active" href="about.php">About</a>
						<ul>
							<li><a href="about.php">Our Story</a></li>
							<li><a class="active" href="location_contact.php">Location</a></li>
						</ul>
					</li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="order.php">Order</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="rewards.php">Rewards</a>
						<ul>
						<?php if (isLoggedIn()) { 
							echo '<li><a href="members.php">Member Area</a></li>';
							} else {							
							echo '<li><a href="login.php">Log In</a></li>';
							echo '<li><a href="rewards.php">Sign Up</a></li>';
						} ?>
						</ul>
					</li>
				</ul>
			</div>
				
			<!-- div content -->
			<div id="content">
				<div id="map">
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:960px;'><div id='gmap_canvas' style='height:440px;width:960px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div><div><small><a href="https://www.googlemapsgenerator.com/">generate Google Maps</a></small></div></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(49.2854184,-123.12610239999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(49.2854184,-123.12610239999998)});infowindow = new google.maps.InfoWindow({content:'<strong>Cupcakes On A Cloud</strong><br>1154 Robson Street, Vancouver BC V6E 1B5<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
				<div class="bcolumn1">
					<h1>LOCATION</h1>
					<p>1154 ROBSON STREET<br>Vancouver, BC<br>V6E 1B5</p>
					<h1>CONTACT</h1>
					<p>EMAIL: CUPCAKESONACLOUD@GMAIL.COM<br>TELEPHONE: (778) 123-4567</p>
				</div>
				<div class="bcolumn2">
				 <h1>HOURS OF OPERATION</h1>
				 <table class="hours">
					<tr>
						<td>MONDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
					<tr>
						<td>TUESDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
					<tr>
						<td>WEDNESDAY</td>
						<td>CLOSED</td>
					</tr>
					<tr>
						<td>THURSDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
					<tr>
						<td>FRIDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
					<tr>
						<td>SATURDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
					<tr>
						<td>SUNDAY</td>
						<td>10:00 - 8:00</td>
					</tr>
				</table>
				</div>
			</div>

			<!-- div footer -->
			<div id="footer">
				<p>© 2016 | Cupcakes on a Cloud | <a href="sitemap.php">Sitemap</a></p>
				
				<!-- div socialbuttons -->
				<div class="socialbuttons">
					<a href="facebook"><img src="Images/facebook.png" alt="Facebook"></a>
					<a href="twitter"><img src="Images/twitter.png" alt="Twitter"></a>
					<a href="instagram"><img src="Images/instagram.png" alt="Instagram"></a>
				</div>
			</div>
			
		</div>		
	</body>
	</html>
		
