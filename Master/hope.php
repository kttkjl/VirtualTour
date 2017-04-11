<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/theme.css" media="screen">
			<link rel="stylesheet" href="css/hope.css" media="screen">
			<link rel="stylesheet" href="css/print.css" media="print">
			<title>Virtual Tour - Home</title>
			<script language="JavaScript1.1">
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
		<img src="images/image0.jpg" name="slide" border=0 width=900 height=528>
<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("images/image0.jpg","images/image1.jpg","images/image2.jpg","images/image3.jpg")
//configure the speed of the slideshow, in miliseconds
var slideshowspeed=6000

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