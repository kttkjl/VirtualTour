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
			<link rel="stylesheet" href="css/glossary.css">
			<script src="startRun.js"></script>
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
			<h2 class="page_title"> Glossary </h2>
				<p class="glossary_desc"> Having trouble figuring out exactly what some of the jargon that BCIT students and faculty use? Looking at this page might help you. However, please note that this list is subject to change without notice. We are also taking suggestions for this section as well. Just go to Contact Us.</p>
				<div class="glossary_box">
					<table class="glossary_table">
						<tr>
							<td class="glossary_title">Aboriginal Services</td>
							<td class="list_desc"> A gathering place fit with a lounge, kitchen, and a common area. Also offers financial and scholarship aid.</td>
						</tr>
						<tr>
							<td class="glossary_title">BCIT Confessions </td>
							<td class="list_desc"> Just don’t take it too seriously.</td>
						</tr>	
						<tr>
							<td class="glossary_title">CIT </td>
							<td class="list_desc"> Stands for Computer Informations Technology. Unlike CST, their classes are held in the downtown campus.</td>
						</tr>							
						<tr>
							<td class="glossary_title">CST</td>
							<td class="list_desc"> Stands for Computer Systems Technology. One of the most in-demand diploma programs in BCIT.</td>
						</tr>			
						<tr>
							<td class="glossary_title">Counselling Services</td>
							<td class="list_desc"> If you’re having a hard time juggling all your courses and your basic living needs, it’s worth a shot to give this place a visit. Located in SE 16.</td>
						</tr>				
						<tr>
							<td class="glossary_title">D2L (Desire To Learn) </td>
							<td class="list_desc">a website where a lot of course contents may be uploaded, depending on your teachers. Though a bit buggy at times, it’s pretty important.</td>
						</tr>				
						<tr>
							<td class="glossary_title">Disability Resource Centre </td>
							<td class="list_desc">A resource centre for disabled persons (not only physically!). </td>
						</tr>				
						<tr>
							<td class="glossary_title">Discounts and Deals</td>
							<td class="list_desc"> If you have a BCIT Student ID card, there are a plethora of deals available to you that you may not know about. Visit bcitsa.ca for more information.</td>
						</tr>				
						<tr>
							<td class="glossary_title">Ehpod</td>
							<td class="list_desc"> The 24 hour study room. Comes with many computers and desk space as well as outlets – Useful, but falling asleep in here is discouraged.</td>
						</tr>				
						<tr>
							<td class="glossary_title">Geared Up</td>
							<td class="list_desc">Store located in SE 2 that offers anything from school supplies to mugs to outerwear, all with the BCIT logo on it. </td>
						</tr>		
						<tr>
							<td class="glossary_title">Habitat Pub</td>
							<td class="list_desc"> If you need a tall, stiff, drink to prepare yourself for the next lecture, this is the place to go. (disclaimer: Don’t drink and drive or study.) </td>
						</tr>	
						<tr>
							<td class="glossary_title">ID Card </td>
							<td class="list_desc">The card that proves that you attend BCIT – Has many uses, such as accessing the Ehpod after hours.</td>
						</tr>	
						<tr>
							<td class="glossary_title">Learning Commons</td>
							<td class="list_desc"> Located in the library they offer Peer Tutoring services and other services to better your learning. </td>
						</tr>	
						<tr>
							<td class="glossary_title">myBCIT</td>
							<td class="list_desc"> Check your BCIT mail, course schedule, tuition, and all those important things here.</td>
						</tr>
						<tr>
							<td class="glossary_title">Parking</td>
							<td class="list_desc">Good luck finding something; it’s probably better to bus.</td>
						</tr>
						<tr>
							<td class="glossary_title">Printing (Library) </td>
							<td class="list_desc">To print at the library, you need to load money onto your BCIT Student ID. It’s 10 cents a page.</td>
						</tr>			
						<tr>
							<td class="glossary_title">Recreational Services</td>
							<td class="list_desc"> Stay fit by taking classes, getting a personal trainer, working out at the gym, and more. Located in SE 16.</td>
						</tr>
						<tr>
							<td class="glossary_title">SA (Student Association) </td>
							<td class="list_desc">A group of students, working for the students. They’re responsible for many of the benefits around campus. Their headquarters is in SE2.</td>
						</tr>
						<tr>
							<td class="glossary_title">Student Health Services</td>
							<td class="list_desc">There are doctors and Registered Nurses on campus, and you can go see them instead of waiting forever at a walk-in clinic. Located in SE 16.</td>
						</tr>	
						<tr>
							<td class="glossary_title">Study Room</td>
							<td class="list_desc">There are several study rooms that you can book in BCIT – just visit the website online.</td>
						</tr>
						<tr>
							<td class="glossary_title">Trades Learning Centre</td>
							<td class="list_desc">Offers assessment testing and pre-entry tests (trades), as well as some technical programs.</td>
						</tr>
						<tr>
							<td class="glossary_title">Triple-O’s Tuesday</td>
							<td class="list_desc">Burgers for the budgeting soul. It’s on Tuesdays in SE 2.</td>
						</tr>
						<tr>
							<td class="glossary_title">U-Pass </td>
							<td class="list_desc">A bus pass automatically charged to your tuition if you take a certain amount of credits worth of classes. It’s a lot cheaper than buying it normally.</td>
						</tr>							
				</table>
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
