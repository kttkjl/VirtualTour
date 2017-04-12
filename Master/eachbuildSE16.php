<?php
require_once('PDO_conn.php');
include("ProtoHeader.php");

$haveSignedIn = $user->is_loggedin();

$myConnection = $DB_conn;
$myQuery = $myConnection->prepare(
				"SELECT * 
				FROM comments WHERE building = 'SE16'"
				);
$myQuery->execute();
/*$result = $myQuery->setFetchMode(PDO::FETCH_ASSOC);*/
$result = $myQuery;
?>

<!--Page-specific <title>-->
<title>Virtual Tour - SE16</title>
<!--Page-specific <js and css>-->

<link rel="stylesheet" href="css/eachbuild.css" media="screen">
<link rel="stylesheet" href="css/comment.css" media="screen">
<script src="css/comment.js"></script>

<?php
include("ProtoNavLogged.php");
?>
		<div id="mainContent">  <!-- Insert your part of the website here. -->
		<div class="actualContent"> <!--Helps contain individual members' page -->
			<div class="buildingImages">
			<div class="mapImage">
				<div class="divBorders">
					<img src="buildingpics/GYM/4.jpg" alt="map image"/>
				</div>
			</div>
			<div class="galleryImages galleryBox">
				<div class="galleryImages top">
					<div class="divBorders galleryImages">
						<img class="galleryImages" src="buildingpics/GYM/2.jpg" alt="gallery image description"/>
					</div>
				</div>
				<div class="galleryImages bottom">
					<div class="divBorderOuter galleryImages">
						<div class="galleryImages bottomLeft">
							<div class="divBorders galleryImages">
								<img class="galleryImages" src="buildingpics/GYM/3.jpg" alt="gallery image description"/>
							</div>
						</div>
						<div class="galleryImages bottomRight">
							<div class="divBorders galleryImages">
								<img class="galleryImages" src="buildingpics/GYM/1.jpg" alt="gallery image description"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="descriptionArea">
				<div class="divBorders">
					<h1>DA GYM THO</h1>
					<p>
						Get your Recrational needs between studying at the BCIT Gym! It is important to keep up with physical health
and mental health. Good blood circulation is important to stay awake in class and feel energized.
					</p>
				</div>
			</div>
		</div> <!--End of actualContent-->
				<div class="form_AllWrapper">
			<div id="myForm" class="form_SubmitComments">
				<!--<p>A<br>A<br>A<br>A<br>A<br>A<br>A</p>-->
				<?php
					foreach($result as $rows) {
				?>
				<table class="expandingTable">
				<tr>
				<td class="expandingComment"><?php echo $rows['username'];?> says:</td>
				<td class="expandingComment"><?php echo $rows['usercomment'];?></td>
				<!--<td>&nbsp;&nbsp;&nbsp;</td>-->
				<td class="expandingComment alignRight"><?php echo $rows['post_date'];?></td>
				</tr>
				</table>
				<br>
				<?php
					}
				?>
			</div>
			<div id="formWrap" class="form_Wrapper">
				<form id="form_CommentsForm" action="formSubmit.php" onsubmit="return form_validate()" method="post">
					<div class="form_TextSection">
						<textarea id="form_TextArea" name="form_TextComment" rows="4" placeholder="Enter Comments"></textarea><input type="hidden" name="buildingID" value="SE16"><input id="form_SubmitButton" type="submit" name="form_SubmitForm">
					</div>
				</form>
			</div>
		</div>
		</div>  <!--End of mainContent-->

	
<script>
var php_var = "<?php echo $haveSignedIn; ?>";
if(php_var){
	//document.getElementById("In").className = "signIn";
	//document.getElementById("Out").className = "";
	document.getElementById("form_SubmitButton").className = ""
	document.getElementById("form_CommentsForm").className = "";
	document.getElementById("formWrap").className = "form_Wrapper";
} else {
	//document.getElementById("In").className = "";
	//document.getElementById("Out").className = "signOut";
	document.getElementById("form_SubmitButton").className = "signOut"
	document.getElementById("form_CommentsForm").className = "signOut";
	document.getElementById("formWrap").className = "signOut";
}
</script>
<?php include ("ProtoFooter.php"); ?>