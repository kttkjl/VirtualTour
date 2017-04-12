<?php
require_once('PDO_conn.php');
include("ProtoHeader.php");
?>
<!--Page-specific <title>-->
<title>Virtual Tour - Contact Us</title>
<!--Page-specific <js and css>-->

<link rel="stylesheet" href="css/theme.css" media="screen">
<link rel="stylesheet" href="css/contact.css" media="screen">
<link rel="stylesheet" href="css/print.css" media="print">
<script src="css/contact.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="css/mapWidget.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEI3ykIDITnjeg0qCAAzYBQzWALRffmGM&callback=initMap"></script>

<?php
include("ProtoNavLogged.php");
?>
		<div id="mainContent">  <!-- Insert your part of the website here. -->
			<div class="Body_Area">
			<h2> Contact Us </h2>
			<p>You can contact us about nearly anything - errors, suggestions, questions. On top of those things, we are looking for any information you know that we may not have covered: We want your contribution! If you know any cool shortcuts to get around the school faster, or tips on NOT getting lost --- Submit it to us here and we'll put it up. </p>
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

<?php include ("ProtoFooter.php"); ?>