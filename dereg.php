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

    <script>
        function DeRegForm() {
			var passValid = false;
            var deregpword = document.getElementById('deregpword');
            var confirmpword = document.getElementById('confirmpword');
            if (deregpword.value != confirmpword.value) {
                deregpword.style.borderColor = "red";
                confirmpword.style.borderColor = "red";
                document.getElementById("required").style.display = "inline";
                passValid = false;
            } else {
                deregpword.style.borderColor = "#ccc";
                confirmpword.style.borderColor = "#ccc";
                document.getElementById("required").style.display = "none";  
				passValid = true;
            }
            return passValid;
        }
     </script>
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
							echo '<p id="loggedin">Hello, '.$_SESSION['SESS_FIRST_NAME'].' <br/> <a href="./logout.php">Logout</a><br/></p>';
						} 
				?>					
				</div>
			</div>

			<!-- div navigation -->
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a>
						<ul>
							<li><a href="about.php">Our Story</a></li>
							<li><a href="location_contact.php">Location</a></li>
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
				<div class="bcolumn1" id="centering">
					<div id ="form">
					<form id="form" onsubmit="return DeRegForm()" action="delete.php" method="post">
						<h1>Are you sure you want to delete your account?<span id="required" style="display: none"><br>&nbsp;*PLEASE ENTER YOUR PASSWORD TWICE</span></h1>
							<?php
								if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
									foreach($_SESSION['ERRMSG_ARR'] as $msg) {
										echo '<p id="errmsg">',$msg,'</p>'; 
									}
									unset($_SESSION['ERRMSG_ARR']);
								}
							?>						
						<label for="password">Please enter your password:</label>
                        <br>
						<input type="password" name="deregpword" id="deregpword">
                        <br>
                        <br>
                        <label for="confirmpassword">Please confirm your password:</label>
                        <input type="password" name="confirmpword" id="confirmpword">
                        <br>
						<input id="passSubmit" type="submit" value="Submit" onclick="return DeRegForm()"/>
					</form>
					</div>
				</div>		
				<br>
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