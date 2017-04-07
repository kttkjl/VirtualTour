<?php
//link to PDO_conn.php
//put this file in htdocs along with the htmls
//define ('__ROOT__', dirname(dirname(__FILE__)));
require_once('PDO_conn.php');

if($user->is_loggedin()){
	$user->redirect('glossary.php');
}

//if name='login' on login.html is set (not NULL)
if(isset($_POST['login']))
{
	//Setting variables
	$FormUsername = $_POST['UserOrEmail'];
	$FormEmail = $_POST['UserOrEmail'];
	$FormPassword = $_POST['password'];

	//if the doLogin function returns true.
	if($user->doLogin($FormUsername, $FormEmail, $FormPassword))
	{
		//IDK REDIRECT IT SOMEHWER ELSE?! - how 2 redirect to loggedin index plshalp
		$user->redirect('index.php');
	} 
	else 
	{
		$error = "Login info wrong";
	}
}
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="css/theme.css">
			<link rel="stylesheet" href="css/login.css">
			<script type="text/javascript" src="css/login.js"></script>
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
					<li> <a href="login.html">Sign in</a></li>
					<li> <a href="registration.html">Register</a></li>
				</ul>
			</div> <!--End of userControl -->
		<div id="mainContent">  <!-- Insert your part of the website here. -->
			<div class="Body_Area">
				<div class="content">				
					<div id="userimage">
						<!--- yo parse dis -->
						<img src="images/profile.png" alt="You">
					</div>
					<br>
			        
			        <?php
			        if(isset($error))
			        {
			              ?>
			              <div>
			                  <?php echo $error; ?>
			              </div>
			              <?php
			        }
			        ?>

					<div>
						<form id="loginform" method="post" onsubmit="return loginvalidation()" action="userLogin.php">
							<div>
								<label class="required" for="UserOrEmail">Username/E-mail</label>
								<input type="text" name="UserOrEmail" id="UserOrEmail" oninput="userOrEmailValid()">
							</div> 
							<p id="UserOrEmailErrorField">Wat</p>
							<br>
							<div>
								<label class="required" for="password">Password</label>
								<input type="password" name="password" id="password" oninput="passwordValid()">
							</div>
							<p id="passErrorField"></p>
							<br>
							<button name="login" value="login" type="submit">Login</button>
						</form>
					</div>
					<div>
						<a href= "/forgot.html">Forgot Password?</a>
					</div>
			
					<div>
						<a href= "/registration.html">Register Now</a>
					</div>
					<br>
					<div class = "disclaimer">
						<h3>DISCLAIMER</h3>
						<p id="disclaimtext">Ubique veritus probatus ut nec. Eum ex meis detraxit honestatis. Vivendum deserunt delicata no mei. His persius menandri an, at sea inani apeirian necessitatibus. Habeo ubique pro te, has dicant docendi moderatius ei.
						</p>
					</div>
				</div> <!--end of content-->
			</div> <!--end of bodyarea-->
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
	</body>
</html>