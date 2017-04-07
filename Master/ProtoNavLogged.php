
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
	<img src="images/panorama2.jpg" alt="British Columbia" width="1752" height="500" id="bannerBG">
	</div> <!-- end of bannerPic div-->
	<div class="userControl userControlColor"> <!-- Div for the second nav bar (the one with user controls -->
	<?php
		$navdisplayuser = "Haruna"; //For now anyway
		// $navdisplayuser = $_SESSION['username'];
		// if(isset($_SESSION['username']))
		if(!true) //replace this line with line 30 once setup
		{
			echo 
			'<h2>Logged in as : '.$navdisplayuser.'</h2>'
			.'<ul>
			<li><a href="account.php">User controls</a></li>
			<li><a href="Logout.php">Logout</a></li>
			';
		} else {
			echo '
			<h2>Currently Not logged in </h2>
			<ul>
			<li><a href="login.html">Sign in</a></li>
			<li><a href="registration.html">Register</a></li>
			';
		}	
	?>	
		</ul>
	</div> <!--End of userControl -->