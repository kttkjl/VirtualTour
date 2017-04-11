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
$result = $myQuery;
?>

<!--Page-specific <title>-->
<title>EachBuild</title>
<!--Page-specific <js and css>-->

<link rel="stylesheet" href="css/eachbuild.css" media="screen">
<link rel="stylesheet" href="css/comment.css" media="screen">
<script type="text/javascript" language="javascript" src="css/comment.js"></script>

<?php
include("ProtoNavLogged.php");
?>

		<div id="mainContent">  <!-- Insert your part of the website here. -->
		<div class="actualContent"> <!--Helps contain individual members' page -->
			<div class="buildingImages">
		<div class="mapImage">
			<div class="divBorders">
				<img src="buildingpics/LIB/IMG_20170405_163856.jpg" alt="map image"/>
			</div>
		</div>
		<div class="galleryImages galleryBox">
			<div class="galleryImages top">
				<div class="divBorders galleryImages">
					<img class="galleryImages" src="buildingpics/LIB/IMG_20170405_163941 - Copy.jpg" alt="gallery image description"/>
				</div>
			</div>
			<div class="galleryImages bottom">
				<div class="divBorderOuter galleryImages">
					<div class="galleryImages bottomLeft">
						<div class="divBorders galleryImages">
							<img class="galleryImages" src="buildingpics/LIB/IMG_20170405_163818 - Copy.jpg" alt="gallery image description"/>
						</div>
					</div>
					<div class="galleryImages bottomRight">
						<div class="divBorders galleryImages">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="descriptionArea">
		<div class="divBorders">
			<h1>SE14</h1>
			<p>
				
				Library

				The library is a wonderful resource for the students and even include sleeping pods for rent. Students
				may find that this is a convenient place to print documents or study. The Library like most has a 
				Learning Commons which offers peer tutoring specialized to your program or faculty of choice.

				Below the Library is the EhPod which is a 247 study space to students; the EhPod has an explicit entrance
				that any student can open as long as they have their student ID card.

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
				<table width="100%">
				<tr>
				<td width="33%"><?php echo $rows['username'];?> says:</td>
				<td width="33%"><?php echo $rows['usercomment'];?></td>
				<!--<td>&nbsp;&nbsp;&nbsp;</td>-->
				<td width="33%" align="right"><?php echo $rows['post_date'];?></td>
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
						<textarea id="form_TextArea" name="form_TextComment" rows="4" placeholder="Enter Comments"></textarea><input id="form_SubmitButton" type="submit" name="form_SubmitForm">
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