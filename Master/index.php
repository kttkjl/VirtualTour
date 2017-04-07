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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					$("nav").click(function(){
						//$(this).css("background-color", "#922B21");
						//$(".userControl").css("background-color", "#922B21");
						$(this).toggleClass("navColor");
						$("div.userControl").toggleClass("userControlColor");
					});
				});
			</script>
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
			<img src="images/panorama2.jpg" alt="British Columbia" width="1752" height="500" id="bannerBG">
			</div> <!-- end of bannerPic div-->
			<div class="userControl userControlColor"> <!-- Div for the second nav bar (the one with user controls -->
			<h2>Logged in as : Group A</h2>
			<ul>
				<li> <a href="account.html">User controls</a></li>
				<li id="In" class=""><a href="login.html">Sign in</a></li>
				<li id="Out" class="signOut"><a href="startRun.php">Sign out</a></li>
				<li> <a href="registration.html">Register</a></li>
			</ul>
			</div> <!--End of userControl -->
		<div id="mainContent">  <!-- Insert your part of the website here. -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue tempus augue non lobortis. Pellentesque mollis est mauris, id sodales dolor interdum nec. Aliquam quis mauris sed enim porta porttitor vel ac sapien. Aliquam erat volutpat. Maecenas egestas ante justo. Praesent auctor vitae libero ut condimentum. Pellentesque nisl urna, lobortis sit amet laoreet sed, fermentum eu metus.<br></p>
			
			<p>Aliquam interdum sagittis fringilla. Sed elementum interdum tempus. Fusce non gravida dui, id aliquam magna. Vestibulum dui tellus, consectetur a metus nec, vulputate interdum augue. Mauris gravida nisi maximus sapien vehicula, ut accumsan nisi consectetur. In laoreet imperdiet ligula ut fermentum. Curabitur eu urna suscipit, iaculis urna consequat, pretium lorem. Vivamus at felis purus. Vestibulum scelerisque tortor sapien, quis semper tellus ultricies ac. Donec a finibus nibh. Pellentesque vehicula dapibus mi, at accumsan felis vulputate eget. Fusce sollicitudin magna vel sagittis vestibulum. Nullam ornare orci et porttitor tincidunt.<br></p>

			<p>In vitae mattis elit. Etiam pretium et ante at viverra. Fusce bibendum molestie odio eu tempus. Curabitur ipsum tortor, condimentum non tristique et, suscipit interdum metus. Nunc dignissim nibh eu arcu ullamcorper condimentum. Sed non condimentum libero. Aliquam in orci dapibus, blandit quam vitae, posuere mi. Pellentesque felis lorem, sagittis quis posuere nec, feugiat quis risus. Etiam ut lectus eu risus rhoncus consequat volutpat eget tortor. Morbi pellentesque nisi in nulla aliquet, fermentum porta diam porttitor. Nunc elementum arcu nec volutpat congue. Cras eu ipsum ac quam elementum pretium non at lectus. Mauris sit amet enim et justo pulvinar vestibulum a ac lorem. Sed aliquam ex ac diam lobortis consequat a id ante. Mauris nec justo at diam eleifend dignissim quis a nulla.<br></p>
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