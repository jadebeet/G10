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

        function LoginForm() {
            var useremail = document.getElementById('useremail');
            var useremailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            var pword = document.getElementById('pword');
            var pwordRegex = /^(?=.*\d)(?=.*[a-zA-Z]).{4,8}$/;
            if (useremail.value == "") {
                useremail.style.borderColor = "red";
                document.getElementById("required").style.display = "inline";
                return false;
            } else {
                useremail.style.borderColor = "#ccc";
                document.getElementById("required").style.display = "none";
            }
            if (!useremail.value.match(useremailRegex)) {
                useremail.style.borderColor = "red";
                document.getElementById("required").style.display = "inline";
                document.getElementById("emailInvalid").style.display = "inline";
                return false;
            } else {
                useremail.style.borderColor = "#ccc";
                document.getElementById("required").style.display = "none";
                document.getElementById("emailInvalid").style.display = "none";
            }
            if (pword.value == "") {
                pword.style.borderColor = "red";
                document.getElementById("required").style.display = "inline";
                document.getElementById("invalid1").style.display = "inline";
                return false;
            } else {
                pword.style.borderColor = "#ccc";
                document.getElementById("required").style.display = "none";
            }
            if (!pword.value.match(pwordRegex)) {
                pword.style.borderColor = "red";
                document.getElementById("required").style.display = "inline";
                document.getElementById("invalid1").style.display = "inline";
                return false;
            } else {
                pword.style.borderColor = "#ccc";
                document.getElementById("required").style.display = "none";
                document.getElementById("invalid1").style.display = "none";
            }
            return true;
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
					<li><a class="active" href="rewards.php">Rewards</a>
						<ul>
							<li><a href="login.php">Log In</a></li>
							<li><a href="rewards.php">Sign Up</a></li>
						</ul>
					</li>
				</ul>
			</div>
				
			<!-- div content -->
         <div>
			<div id="content">
				<div class="bcolumn1" id="centering">
					<form id="form" onsubmit="return LoginForm()" action="auth.php" method="post">
						<h1>LOG IN<span id="required" style="display: none">&nbsp;*Please fill in the highlighted field</span></h1>
						<?php
							if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
								foreach($_SESSION['ERRMSG_ARR'] as $msg) {
									echo '<p id="errmsg">',$msg,'</p>'; 
								}
								unset($_SESSION['ERRMSG_ARR']);
							}
						?>							
						
						<label for="useremail">EMAIL<span id="emailInvalid" style="display: none">&nbsp;Please enter a valid email login</span></label>
						<input type="text" name="useremail" id="useremail">
                        <label for="pword">PASSWORD<span id="invalid1" style="display: none">&nbsp;<br>Please enter your password</span></label>
                        <br>
                        <input type="password" name="pword" id="pword">
						<br>
						<input type="Submit">					
					</form>
				</div>
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
		
