</head>
			<body>
					<div id="theEntireNav">
					<nav>
					<p id="siteLogo"><a href="index.php">Virtual Tour</a></p>
					<div id="navbarBox">
					<ul id="main-nav-list">
						<li class="main-list-link"><div id="conus"><a href="contactus.php">Contact Us</a></div></li>
						<li class="main-list-link"><div id="gloss"><a href="glossary.php">Glossary</a></div></li>
						<li class="dropdown main-list-link"><div id="abuild"><a href="allbuild.php" class="dropbtn">Buildings</a>
						<div class="dropdown-content"> <!--Div for the part that actually drops down. -->
			<div id="navcontainer">
			<table id="navtable" title="The drop-down navigation">
				<tr class="navtablerow">
					<td class="navtableheading"><a href="allbuild.php">Northeast</a></td>
					<td class="navtableheading"><a href="allbuild.php">NorthWest</a></td>
					<td class="navtableheading"><a href="allbuild.php">SouthEast</a></td>
					<td class="navtableheading"><a href="allbuild.php">SouthWest</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href ="eachbuildNE1.php">NE 1</a></td>
					<td class="navtabledata"><a href ="buildConst.php">NW1</a></td>
					<td class="navtabledata"><a href ="eachbuildSE1.php">SE1</a></td>
					<td class="navtabledata"><a href ="eachbuildSW1.php">SW1</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href ="eachbuildNE2.php">NE2</a></td>
					<td class="navtabledata"><a href ="buildConst.php">NW3</a></td>
					<td class="navtabledata"><a href ="eachbuildSE2.php">SE2</a></td>
					<td class="navtabledata"><a href ="buildConst.php">SW2</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href ="buildConst.php">NE3</a></td>
					<td class="navtabledata"><a href ="buildConst.php">NW5</a></td>
					<td class="navtabledata"><a href ="buildConst.php">SE4</a></td>
					<td class="navtabledata"><a href ="eachbuildSW3.php">SW3</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href ="buildConst.php">NE4</a></td>
					<td class="navtabledata"><a href ="buildConst.php">NW6</a></td>
					<td class="navtabledata"><a href ="eachbuildSE12.php">SE12</a></td>
					<td class="navtabledata"><a href ="eachbuildSW5.php">SW5</a></td>
				</tr>
				<tr class="navtablerow">
					<td class="navtabledata"><a href ="buildConst.php">NE5</a></td>
					<td class="navtabledata"><a href ="#"></a></td>
					<td class="navtabledata"><a href ="eachbuildSE14.php">SE14</a></td>
					<td class="navtabledata"><a href ="eachbuildSW9.php">SW9</a></td>
				</tr>
				<tr class="navtablerow">
					<td colspan="4" class="navtablebottom">...Or for more, go to the <a href="allbuild.php">buildings page.</a></td>
				</tr>
			</table>
			</div>
						</div> <!-- End of Div "dropdown-content"-->
						</div></li>
						
						<li class="main-list-link"><div id="home"><a href="index.php">Home</a></div></li>
					</ul>
					</div>
				</nav>
				</div>
		<main>
			<div id ="bannerPic"> <!--Div for the banner image.-->
			<img src="images/panorama2.jpg" alt="British Columbia" width="1577" height="450" id="bannerBG">
			</div> <!-- end of bannerPic div-->
			<div class="userControl"> <!-- Div for the second nav bar (the one with user controls -->
	<?php
		require_once('PDO_conn.php');
	

		if(isset($_SESSION['user_session']))
		//if(true) //replace this line with line 30 once setup
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