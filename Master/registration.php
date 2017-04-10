<?php include("ProtoHeader.php"); ?>
<link rel="stylesheet" href="css/registration.css" media="screen">
<script src="css/registration.js"></script>
<title>Registration</title>
<?php include("ProtoNavLogged.php"); ?>

	<div id="mainContent">  <!-- Insert your part of the website here. -->
	<div class="actualContent"> <!--Helps contain individual members' page -->
		<div id="wrapper">
		<div class="content">
			<!---left column in reg page-->
			<div class="leftcol">
				<div class="sitelogo">
					<img src="./images/logo.png" alt="site logo"></div>
				<br>
				<div class="servicedesc">
					<h2>Brief Service Description</h2><br>
					<p>Id mei illum corpora singulis, dolores torquatos interpretaris cum ei. Nam no erat scripta consulatu, pro ignota consectetuer ad. Amet illum maiorum sea ex, duo assum eruditi ex. Omnesque vituperata reformidans at vel, porro solet principes ut qui.</p>
					<p>Id mei illum corpora singulis, dolores torquatos interpretaris cum ei. Nam no erat scripta consulatu, pro ignota consectetuer ad. Amet illum maiorum sea ex, duo assum eruditi ex. Omnesque vituperata reformidans at vel, porro solet principes ut qui.</p>
					</div>
			</div>
			
			<!---right column in reg page-->
			<div class="rightcol">
				<div class="regform">
					<!---fill in tde action please-->
					<!---remember to input functions too -->
					<form name="registration" method ="post" action="userReg.php" id="registration" class="registration" onsubmit="return validateForm()">
						<table>
						<tr>
							<th></th> <!---for making 4 columns-->
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td colspan=4>
								<label for="username" class="required">Username (6-10 Characters, lowercase and numbers only)</label>
								<input type="text" id="username" name="username" oninput="userValid()" required>
							</td>
						</tr>
						<tr>
							<td colspan=4 id="usernameErrorField"></td>
						</tr>
						<tr>
							<td colspan=3>
								<label for="email" class="required">E-mail (BCIT domain and gmail only.)</label>
								<input type="text" id="email" name="email" value="" required>
							</td>
							<td>
								<input type="button" id="emailcheck" name="emailcheck" value="Check" onclick="emailValid()">
							</td>
						</tr>
						<tr>
							<td colspan=4 id="emailErrorField"></td>
						</tr>

						<tr>
							<td colspan=4>
								<label for="password" class="required">Password (10 characters or less)</label>
								<input type="password" id="password" name="password" required>
							<td/>
						</tr>
						<tr>
							<td colspan=3>
								<label for="cpassword">Confirm Password</label>
								<input type="password" id="cpassword" name="cpassword" required>
							</td>
							<td>
								<input type="button" id="passcheck" name="passcheck" value="Check" onclick="passwordValid()">
							</td>
						</tr>
						<tr>
							<td colspan=4 id="cpassErrorField"></td>
						</tr>
						</table>
						<div class="disclaimtext">
							<h2> Disclaimer Header </h2>
							<p> Disclaimer text etc....Id mei illum corpora singulis, dolores torquatos interpretaris cum ei. Nam no erat scripta consulatu, pro ignota consectetuer ad. Amet illum maiorum sea ex, duo assum eruditi ex. Omnesque vituperata reformidans at vel, porro solet principes ut qui. 
							</p>
							<br>
							<h2> TOS and shit </h2>
							<p> Disclaimer text etc....Id mei illum corpora singulis, dolores torquatos interpretaris cum ei. Nam no erat scripta consulatu, pro ignota consectetuer ad. Amet illum maiorum sea ex, duo assum eruditi ex. Omnesque vituperata reformidans at vel, porro solet principes ut qui. 
							</p>
						</div>	
						<br>
						<label for="consent" class="required">Do you agree to the TOS?</label>
						<div>
							<div class="flex1"><input type="radio" id ="consentYes" name="consent" value="Yes" required><br><label for="consentYes">Yes</label></div>
							
							<div class="flex1"><input type="radio" id ="consentNo" name="consent" value="No" required><br><label for="consentNo">No</label></div>

							<div class="flex2"><p id="agreeErrorField"></p></div>
						</div>
						<input type="submit" name="register-btn" value="Register now">
					</form>
				</div>
			</div>
		</div>
		</div>
	</div> <!--End of actualContent-->
	</div>  <!--End of mainContent-->
<?php include ("ProtoFooter.php"); ?>