<?php include("ProtoHeader.php"); ?>
	<link rel="stylesheet" href="css/login.css" media="screen">
	<script type="text/javascript" src="css/login.js"></script>
	<title>Login</title>
<?php include("ProtoNavLogged.php"); ?>
		
		<div id="mainContent">  <!-- Insert your part of the website here. -->
			<div class="Body_Area">
				<div class="content">				
					<div id="userimage">
						<!--- yo parse dis -->
						<img src="images/profile.png" alt="You">
					</div>
					<br>
					<div>
						<form id="loginform" method="post" onsubmit="return loginvalidation()" action="userLogin.php">
							<div>
								<label class="required" for="UserOrEmail">Username/E-mail</label>
								<input type="text" name="UserOrEmail" id="UserOrEmail" oninput="userOrEmailValid()">
							</div> 
							<p id="UserOrEmailErrorField"></p>
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

<?php include ("ProtoFooter.php"); ?>