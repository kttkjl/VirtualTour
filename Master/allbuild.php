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
			<link rel="stylesheet" href="css/allbuild.css">
			<link rel="stylesheet" href="css/print.css" media="print">
			<title>Virtual Tour - Buildings Overview</title>
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
		<div id="mainContent">  <!--Start of main content -->
		<div class="actualContent"> <!--Helps contain individual members' page -->
		<div class="contentPane">
		<div class="innerContainer">
		<div class="marginMaker">
			<h1>NorthWest (NW)</h1><br/>
			<img src="images/building.png" alt="building picture"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="buildingsTable">
			<table>
				<tr><td colspan="8">Buildings in this sector:</td></tr>
				<tr>
					<td colspan="2"><a href="javascript:void(0);">NW 1</a></td>
					<td colspan="2"><a href="javascript:void(0);">NW 3</a></td>
					<td colspan="2"><a href="javascript:void(0);">NW 5</a></td>
					<td colspan="2"><a href="javascript:void(0);">NW 6</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="contentPane">
	<div class="innerContainer">
		<div class="marginMaker">
			<h1>NorthEast (NE)</h1><br/>
			<img src="images/building.png" alt="building picture"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="buildingsTable">
			<table>
				<tr><td colspan="8">Buildings in this sector:</td></tr>
				<tr>
					<td><a href="javascript:void(0);">NE 1</a></td>
					<td><a href="javascript:void(0);">NE 2</a></td>
					<td><a href="javascript:void(0);">NE 3</a></td>
					<td><a href="javascript:void(0);">NE 4</a></td>
					<td><a href="javascript:void(0);">NE 5</a></td>
					<td><a href="javascript:void(0);">NE 6</a></td>
					<td><a href="javascript:void(0);">NE 7</a></td>
					<td><a href="javascript:void(0);">NE 8</a></td>
				</tr>
				<tr>
					<td><a href="javascript:void(0);">NE 9</a></td>
					<td><a href="javascript:void(0);">NE 10</a></td>
					<td><a href="javascript:void(0);">NE 12</a></td>
					<td><a href="javascript:void(0);">NE 16</a></td>
					<td><a href="javascript:void(0);">NE 18</a></td>
					<td><a href="javascript:void(0);">NE 20</a></td>
					<td><a href="javascript:void(0);">NE 21</a></td>
					<td><a href="javascript:void(0);">NE 22</a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="javascript:void(0);">NE 23</a></td>
					<td colspan="2"><a href="javascript:void(0);">NE 24</a></td>
					<td colspan="2"><a href="javascript:void(0);">NE 25</a></td>
					<td colspan="2"><a href="javascript:void(0);">NE 28</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="contentPane">
	<div class="innerContainer">
		<div class="marginMaker">
			<h1>SouthWest (SW)</h1><br/>
			<img src="images/building.png" alt="building picture"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="buildingsTable">
			<table>
				<tr><td colspan="8">Buildings in this sector:</td></tr>
				<tr>
					<td><a href="javascript:void(0);"></a></td>
					<td><a href="javascript:void(0);">SW 1</a></td>
					<td><a href="javascript:void(0);">SW 2</a></td>
					<td><a href="javascript:void(0);">SW 3</a></td>
					<td><a href="javascript:void(0);">SW 5</a></td>
					<td><a href="javascript:void(0);">SW 8</a></td>
					<td><a href="javascript:void(0);">SW 9</a></td>
					<td><a href="javascript:void(0);"></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="contentPane">
	<div class="innerContainer">
		<div class="marginMaker">
			<h1>SouthEast (SE)</h1><br/>
			<img src="images/building.png" alt="building picture"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="buildingsTable">
			<table>
				<tr><td colspan="8">Buildings in this sector:</td></tr>
				<tr>
					<td><a href="javascript:void(0);">SE 1</a></td>
					<td><a href="javascript:void(0);">SE 2</a></td>
					<td><a href="javascript:void(0);">SE 4</a></td>
					<td><a href="javascript:void(0);">SE 6</a></td>
					<td><a href="javascript:void(0);">SE 8</a></td>
					<td><a href="javascript:void(0);">SE 9</a></td>
					<td><a href="javascript:void(0);">SE 10</a></td>
					<td><a href="javascript:void(0);">SE 12</a></td>
				</tr>
				<tr>
					<td><a href="javascript:void(0);">SE 14</a></td>
					<td><a href="javascript:void(0);">SE 16</a></td>
					<td><a href="javascript:void(0);">SE 19</a></td>
					<td><a href="javascript:void(0);">SE 30</a></td>
					<td><a href="javascript:void(0);">SE 40</a></td>
					<td><a href="javascript:void(0);">SE 41</a></td>
					<td><a href="javascript:void(0);">SE 42</a></td>
					<td><a href="javascript:void(0);">SE 50</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
		</div> <!--End of actualContent-->
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