<?php 
require_once('PDO_conn.php');
include("ProtoHeader.php"); 

$haveSignedIn = $user->is_loggedin();

$myConnection = $DB_conn;
$myQuery = $myConnection->prepare(
				"SELECT * 
				FROM comments"
				);
$myQuery->execute();
/*$result = $myQuery->setFetchMode(PDO::FETCH_ASSOC);*/
$result = $myQuery;?>
			<title>Virtual Tour - Home</title>
			<link rel="stylesheet" href="css/index.css" media="screen">
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
			<?php include("ProtoNavLogged.php"); ?>
	<main>
		<img src="images/image0.jpg" name="slide" border=0 width=900 height=528>
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
		<?php include ("ProtoFooter.php"); ?>