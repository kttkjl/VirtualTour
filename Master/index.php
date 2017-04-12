<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/theme.css" media="screen">
			<link rel="stylesheet" href="css/index.css" media="screen">
			<link rel="stylesheet" href="css/print.css" media="print">
			<title>Virtual Tour - Home</title>
			<script>
				var slideimages=new Array()
				var slidelinks=new Array()
				function slideshowimages(){
					for (i=0;i<slideshowimages.arguments.length;i++){
					slideimages[i]=new Image()
					slideimages[i].src=slideshowimages.arguments[i]
				}
				}
				function slideshowlinks(){
					for (i=0;i<slideshowlinks.arguments.length;i++)
					slidelinks[i]=slideshowlinks.arguments[i]
				}
				function gotoshow(){
					if (!window.winslide||winslide.closed)
					winslide=window.open(slidelinks[whichlink])
				else
					winslide.location=slidelinks[whichlink]
					winslide.focus()
				}
			</script>
			</head>
			<body>
	<div id="theEntireNav">
	<nav style="position:static;">
	<h1><a href="index.php">Virtual Tour</a></h1>
	<div id="navbarBox">
		<ul id="main-nav-list">
			<li class="main-list-link"><div id="conus"><a href="contactus.php">Contact Us</a></div></li>
			<li class="main-list-link"><div id="gloss"><a href="glossary.php">Glossary</a></div></li>
			<li class="dropdown main-list-link"> <!-- Drop down building tab-->
				<div id="abuild"><a href="allbuild.php" class="dropbtn">Buildings</a>
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
				</div>
			</li>
							
			<li class="main-list-link"><div id="home"><a href="index.php">Home</a></div></li>
		</ul> <!-- end of main-nav-list -->
	</div>
	</nav>
	</div> <!-- end of theEntireNav -->
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
		</ul> <!--closes the ul in the echo in php-->
	</div> <!--End of userControl -->
	
	<main>
		<img src="images/image0.jpg" id="slide" width=900 height=528 alt="slide0">
		<script> 
			<!--
			//configure the paths of the images, plus corresponding target links
			slideshowimages("images/image0.jpg","images/image1.jpg","images/image2.jpg","images/image3.jpg")
			//configure the speed of the slideshow, in miliseconds
			var slideshowspeed=4000
			var whichlink=0
			var whichimage=0
			function slideit(){
			if (!document.images)
			return
			document.images.slide.src=slideimages[whichimage].src
			whichlink=whichimage
			if (whichimage<slideimages.length-1)
			whichimage++
			else
			whichimage=0
			setTimeout("slideit()",slideshowspeed)
			}
			slideit()
			//-->
		</script>
		<div id="mainContent">
		<div id="divLeft"><h2>Explore.</h2>
		<p><span class="firstLetter">&nbsp;&nbsp;&rarr; &nbsp; U</span>se our website to explore the nooks and crannies of your favourite yet confusing Burnaby campus. Getting lost can be fun - <br>if you have the right guide.</p>
		</div>
		<div id="divCenter"><h2>Part of the Community.</h2>
		<p><span class="firstLetter">&nbsp;&nbsp;&rarr; &nbsp; T</span>alk to students who also use the website about anything you like - Even just warning others of that squeaky chair in that one lecture hall you hate.</p>
		</div>
		<div id="divRight"><h2>Contribute. Get Points.</h2>
		<p><span class="firstLetter">&nbsp;&nbsp;&rarr; &nbsp; L</span>et us know of any cool discoveries you made or that we missed, and gather up your points. Sign up for our newsletter to stay informed.</p>
		</div>
		<h3>To get started, go to our <a href="allbuild.php" class="linkUl"> buildings</a> page.</h3>
		</div>
	</main>
	
	<footer>
		<div class="footer_wrapper">
			<div class="footer_table">
				<p class="footer_copy"><a href="sitemap.php">Site Map</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="hope.php">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="allbuild.php">Buildings</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="glossary.php">Glossary</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="contactus.php">Contact Us</a>
				<br>&copy; COPYRIGHT 2017 Group 12. All Rights Reserved.</p>
				<h2 class="footer_media"><a href="www.facebook.com">Facebook</a> &nbsp;||&nbsp; <a href="www.twitter.com">Twitter</a> </h2>
			</div>
		</div>
	</footer>
</html>