<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/home.css">
			<link rel="stylesheet" href="css/theme.css" media="screen">
			<link rel="stylesheet" href="css/theme.css" media="print">
			<script src="css/slide.js"></script>
			<title>Virtual Tour - Home</title>
		</head>
			<body>
					<div id="theEntireNav">
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
					<td class="navtableheading"><a href="eachbuild.php">Northeast</a></td>
					<td class="navtableheading"><a href="eachbuild.php">NorthWest</a></td>
					<td class="navtableheading"><a href="eachbuild.php">SouthEast</a></td>
					<td class="navtableheading"><a href="eachbuild.php">SouthWest</a></td>
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
				</div>
		<div class="userControl"> <!-- Div for the second nav bar (the one with user controls -->
	<?php
        require_once('PDO_conn.php');


        if(isset($_SESSION['username']))
        {
            echo 
            '<h2>Logged in as : '.$_SESSION['username'].'</h2>'
            .'<ul>
            <li><a href="account.php">User controls</a></li>
            <li><a href="startRun.php">Logout</a></li>
            ';
        } else {
            echo '
            <h2>Currently Not logged in </h2>
            <ul>
            <li><a href="login.php">Sign in</a></li>
            <li><a href="registration.php">Register</a></li>
            ';
        }
    ?>
		</ul>
	</div> <!--End of userControl -->
	<main>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="images/welcome.jpg" title="Welcome to Virtual Tour!" style="width:100%">
				</div>

			<div class="mySlides fade">
				<a href="allbuild.php"><img src="images/share.jpg" title = "Please share your photos by e-mailing us." style="width:100%"></a>
			</div>

			<div class="mySlides fade">
				<a href="contactus.php"><img src="images/shortcut.jpg" title = "Contact us and tell us about any shortcuts you know." style="width:100%"></a>
			</div>
			
			<div class="mySlides fade">
				<img src="images/points.jpg" title="Your contributions will earn you points." style="width:100%">
			</div>
			</div>
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
				<span class="dot" onclick="currentSlide(4)"></span>
			</div>
		</main>
		<footer>
		<div class="footer_wrapper">
			<div class="footer_table">
				<table class="table_outer">
					<tr> 
						<th> NE
							<table class="table_col">
								<tr>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
							</table>
						</th>
						<th> NW
							<table class="table_col">
								<tr>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
							</table>
						</th>
						<th> SE
							<table class="table_col">
								<tr>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
							</table>
						</th>
						<th> SW
							<table class="table_col">
								<tr>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
							</table>
						</th>
						<th> Others
							<table class="table_col">
								<tr>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
								<tr><td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td>
									<td><a href ="index.php">blah</a></td></tr>
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