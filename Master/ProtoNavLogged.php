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
				</div>
		<main>
			<div id ="bannerPic"> <!--Div for the banner image.-->
			<img src="images/panorama2.jpg" alt="British Columbia" width="1577" height="450" id="bannerBG">
			</div> <!-- end of bannerPic div-->
			<div class="userControl"> <!-- Div for the second nav bar (the one with user controls -->
	<?php
		require_once('PDO_conn.php');
	
		$navdisplayuser = $_SESSION['username'];
		if(isset($_SESSION['username']))
		//if(true) //replace this line with line 30 once setup
		{
			echo 
			'<h2>Logged in as : '.$navdisplayuser.'</h2>'
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