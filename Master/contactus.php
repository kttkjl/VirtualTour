<?php
require_once('PDO_conn.php');

/*if($user->is_loggedin()){
	$haveSignedIn = true;
} else {
	$haveSignedIn = false;
}*/
$haveSignedIn = $user->is_loggedin();
?>


<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="css/theme.css">
			<link rel="stylesheet" href="css/contact.css">
			<script type="text/javascript" src="css/contact.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="css/mapWidget.js"></script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEI3ykIDITnjeg0qCAAzYBQzWALRffmGM&callback=initMap"></script>
			<title>Layout B</title>
		</head>
			<body>
					<nav>
					<h1><a href="index.html">Virtual Tour</a></h1>
					<ul>
						<div id="acc"><li><a href="account.html">My Account</a></li></div>
						<div id="conus"><li><a href="contactus.html">Contact Us</a></li></div>
						<div id="gloss"><li><a href="glossary.html">Glossary</a></li></div>
						<div id="abuild"><li class="dropdown"><a href="allbuild.html" class="dropbtn">Buildings</a>
						<div class="dropdown-content"> <!--Div for the part that actually drops down. -->
							<a href="eachbuild.html">Link 1 </a>
							<a href="eachbuild.html">Link 2 </a>
							<a href="eachbuild.html">Link 3 </a>
							<a href="eachbuild.html">Link 4 </a>
							<a href="eachbuild.html">Link 5 </a>
						</div> <!-- End of Div "dropdown-content"-->
						</li></div>
						<div id="hom"><li><a href="index.html">Home</a></li></div>
					</ul>
				</nav>
		<main>
			<div id ="bannerPic"> <!--Div for the banner image.-->
			<img src="images/panorama1.jpg" alt="British Columbia" width="1752" height="300" id="bannerBG">
			</div> <!-- end of bannerPic div-->
			<div class="userControl"> <!-- Div for the second nav bar (the one with user controls -->
			<h2>Logged in as : Group A</h2>
			<ul>
				<li> <a href="account.html">User controls</a></li>
				<li id="In" class=""><a href="login.html">Sign in</a></li>
				<li id="Out" class="signOut"><a href="startRun.php">Sign out</a></li>
				<li> <a href="registration.html">Register</a></li>
			</ul>
			</div> <!--End of userControl -->
		<div id="mainContent">  <!-- Insert your part of the website here. -->
			<div class="Body_Area">
			<h2> Contact Us </h2>
			<p> This is the contact us page. You can reach us here. (more to come)</p>
			<div class="secondBody">
				<div id="leftColumn">
				<form action="http://webdevbasics.net/scripts/demo.php" id="contact_us" onsubmit="return contact_Validate()">
					<table class="contact_table">
						<tr>
							<th></th> <!---for making 4 columns-->
							<th></th>
							<th></th>
							<th></th>
						</tr>
					<tr>
						<td colspan=4>							
							<label for="username" class="required">Username</label>
							<input type="text" id="username" name="username" required>
						</td>
					</tr>
					<tr>
						<td colspan=4>							
							<label for="email" class="required">E-mail</label>
							<input type="text" id="email" name="email" required>
						</td>
					</tr>
					<tr>
						<td colspan=4>							
							<label for="subject" class="required">Subject</label>
							<input type="text" id="subject" name="subject" required>
						</td>
					</tr>
					<tr>
						<td colspan=4>	
						<label for="textarea">Comment Input:</label>
						<textarea name="textarea" id="contact_Input" rows="10" form="contact_us" placeholder="Enter Comments" required></textarea>
						</td>
					</tr>
					<tr>
						<td></td><td></td><td></td>
						<td colspan=2>
							<input id="submit" type="submit">
						</td>	
					</tr>
					</table>
				</form>
				</div>
				<div id="rightColumn">
					<div id="map" onload="iniMap()"></div>
				</div>
			</div>
			</div>
		</div>  <!--End of mainContent-->
		</main>
		<footer>
		<div class="footer_wrapper">
			<div class="footer_table">
				<table class="table_outer">
					<tr> 
						<th> NE
							<table class="table_col">
								<tr>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
							</table>
						</th>
						<th> NW
							<table class="table_col">
								<tr>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
							</table>
						</th>
						<th> SE
							<table class="table_col">
								<tr>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
							</table>
						</th>
						<th> SW
							<table class="table_col">
								<tr>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
							</table>
						</th>
						<th> Others
							<table class="table_col">
								<tr>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
								<tr><td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td>
									<td><a href ="index.html">blah</a></td></tr>
							</table>
						</th>
					</tr>
				</table>
				<p class="footer_copy"> COPYRIGHT AND CONTACT US. || 2017</p>
				<h2 class="footer_media"> FB twitter </h2>
			</div>
		</div>
	</footer>
	</html>
	
	<script>
	var php_var = "<?php echo $haveSignedIn; ?>";
	if(php_var){
		document.getElementById("In").className = "signIn";
		document.getElementById("Out").className = "";
	} else {
		alert("not signed in");
		document.getElementById("In").className = "";
		document.getElementById("Out").className = "signOut";
	}
</script>