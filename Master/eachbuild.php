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
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/theme.css" media="screen">
			<link rel="stylesheet" href="css/eachbuild.css" media="screen">
			<link rel="stylesheet" href="css/print.css" media="print">
			<link rel="stylesheet" href="css/comment.css" media="screen">
			<script type="text/javascript" language="javascript" src="css/comment.js"></script>
			<title>Layout B</title>
		</head>
			<body>
				<nav>
					<h1><a href="index.php">Virtual Tour</a></h1>
					<div id="navbarBox">
					<ul id="main-nav-list">
						<div id="conus"><li class="main-list-link"><a href="contactus.php">Contact Us</a></li></div>
						<div id="gloss"><li class="main-list-link"><a href="glossary.php">Glossary</a></li></div>
						<div id="abuild"><li class="dropdown main-list-link"><a href="allbuild.php" class="dropbtn">Buildings</a>
						<div class="dropdown-content"> <!--Div for the part that actually drops down. -->
			<div id="navcontainer">
			<table id="navtable" title="The drop-down navigation">
				<tr class="navtablerow">
					<td class="navtableheading"><a href="northeast.php">Northeast</a></td>
					<td class="navtableheading"><a href="northwest.php">NorthWest</a></td>
					<td class="navtableheading"><a href="southeast.php">SouthEast</a></td>
					<td class="navtableheading"><a href="southwest.php">SouthWest</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href =".php">EE 1</a></td>
					<td class="navtabledata"><a href =".php">NE 2</a></td>
					<td class="navtabledata"><a href =".php">NE 3</a></td>
					<td class="navtabledata"><a href =".php">NE 4</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href =".php">EE 1</a></td>
					<td class="navtabledata"><a href =".php">NE 2</a></td>
					<td class="navtabledata"><a href =".php">NE 3</a></td>
					<td class="navtabledata"><a href =".php">NE 4</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href =".php">EE 1</a></td>
					<td class="navtabledata"><a href =".php">NE 2</a></td>
					<td class="navtabledata"><a href =".php">NE 3</a></td>
					<td class="navtabledata"><a href =".php">NE 4</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href =".php">EE 1</a></td>
					<td class="navtabledata"><a href =".php">NE 2</a></td>
					<td class="navtabledata"><a href =".php">NE 3</a></td>
					<td class="navtabledata"><a href =".php">NE 4</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href =".php">EE 1</a></td>
					<td class="navtabledata"><a href =".php">NE 2</a></td>
					<td class="navtabledata"><a href =".php">NE 3</a></td>
					<td class="navtabledata"><a href =".php">NE 4</a></td>
				</tr>
				<tr class="navtablerow">
					<td colspan="4" class="navtablebottom">...Or for more, go to the <a href="allbuild.php">buildings page.</a></td>
				</tr>
			</table>
			</div>
						</div> <!-- End of Div "dropdown-content"-->
						</li>
						</div>
						<div id="home"><li class="main-list-link"><a href="index.php">Home</a></li></div>
					</ul>
					</div>
				</nav>
		<main>
			<div id ="bannerPic"> <!--Div for the banner image.-->
			<img src="images/panorama2.jpg" alt="British Columbia" width="1752" height="300" id="bannerBG">
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
		<div class="actualContent"> <!--Helps contain individual members' page -->
			<div class="buildingImages">
		<div class="mapImage">
			<div class="divBorders">
				<img src="images/building.png" alt="map image"/>
			</div>
		</div>
		<div class="galleryImages galleryBox">
			<div class="galleryImages top">
				<div class="divBorders galleryImages">
					<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
				</div>
			</div>
			<div class="galleryImages bottom">
				<div class="divBorderOuter galleryImages">
					<div class="galleryImages bottomLeft">
						<div class="divBorders galleryImages">
							<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
						</div>
					</div>
					<div class="galleryImages bottomRight">
						<div class="divBorders galleryImages">
							<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="descriptionArea">
		<div class="divBorders">
			<h1>BUILDING NAME</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Vestri haec verecundius, illi fortasse constantius. Quae diligentissime contra Aristonem dicuntur a Chryippo. Sed ad haec, nisi molestum est, habeo quae velim. Duo Reges: constructio interrete. Quae similitudo in genere etiam humano apparet.

				Ea possunt paria non esse. Nam si propter voluptatem, quae est ista laus, quae possit e macello peti? Universa enim illorum ratione cum tota vestra confligendum puto. Negat esse eam, inquit, propter se expetendam. Non enim iam stirpis bonum quaeret, sed animalis. At iam decimum annum in spelunca iacet. Quod mihi quidem visus est, cum sciret, velle tamen confitentem audire Torquatum. Idemne potest esse dies saepius, qui semel fuit? Audeo dicere, inquit.

				Est igitur officium eius generis, quod nec in bonis ponatur nec in contrariis. Si verbum sequimur, primum longius verbum praepositum quam bonum. Quam illa ardentis amores excitaret sui! Cur tandem? Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat; Vide, quaeso, rectumne sit. De quibus cupio scire quid sentias. Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris. Nos paucis ad haec additis finem faciamus aliquando;

				Quicquid porro animo cernimus, id omne oritur a sensibus; Sed ad haec, nisi molestum est, habeo quae velim. Non autem hoc: igitur ne illud quidem. Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Haec para/doca illi, nos admirabilia dicamus. In qua quid est boni praeter summam voluptatem, et eam sempiternam?
			</p>
		</div>
	</div>
		</div> <!--End of actualContent-->
		<!--
				<div class="form_AllWrapper">
			<div class="form_SubmitComments">
				<p>A<br>A<br>A<br>A<br>A<br>A<br>A</p>
			</div>
			<div class="form_Wrapper">
				<form id="form_CommentsForm" action="http://webdevbasics.net/scripts/demo.php" onsubmit="return form_validate()">
					<div class="form_TextSection">
						<textarea id="form_TextArea" name="form_TextComment" rows="4" placeholder="Enter Comments"></textarea><input id="form_SubmitButton" type="submit" name="form_SubmitForm">
					</div>
				</form>
			</div>
		</div> 
		
		commented out cause forum script writes the same thing back
		-->
		<?php include('forum.php');?>
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