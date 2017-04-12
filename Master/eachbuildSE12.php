<?php
require_once('PDO_conn.php');
include("ProtoHeader.php");

$haveSignedIn = $user->is_loggedin();

$myConnection = $DB_conn;
$myQuery = $myConnection->prepare(
				"SELECT * 
				FROM comments WHERE building = 'SE12'"
				);
$myQuery->execute();
/*$result = $myQuery->setFetchMode(PDO::FETCH_ASSOC);*/
$result = $myQuery;
?>

<!--Page-specific <title>-->
<title>Virtual Tour - SE12</title>
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
				<img src="images/building.png" alt="map image"/>
			</div>
		</div>
		<div class="galleryImages galleryBox">
			<div class="galleryImages top">
				<div class="divBorders galleryImages">
					<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
				</div>
			</div>
			<div class="galleryImages bottom">
				<div class="divBorderOuter galleryImages">
					<div class="galleryImages bottomLeft">
						<div class="divBorders galleryImages">
							<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
						</div>
					</div>
					<div class="galleryImages bottomRight">
						<div class="divBorders galleryImages">
							<img class="galleryImages" src="images/building.png" alt="gallery image description"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="descriptionArea">
		<div class="divBorders">
			<h1>BUILDING NAME</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Vestri haec verecundius, illi fortasse constantius. Quae diligentissime contra Aristonem dicuntur a Chryippo. Sed ad haec, nisi molestum est, habeo quae velim. Duo Reges: constructio interrete. Quae similitudo in genere etiam humano apparet.

				Ea possunt paria non esse. Nam si propter voluptatem, quae est ista laus, quae possit e macello peti? Universa enim illorum ratione cum tota vestra confligendum puto. Negat esse eam, inquit, propter se expetendam. Non enim iam stirpis bonum quaeret, sed animalis. At iam decimum annum in spelunca iacet. Quod mihi quidem visus est, cum sciret, velle tamen confitentem audire Torquatum. Idemne potest esse dies saepius, qui semel fuit? Audeo dicere, inquit.

				Est igitur officium eius generis, quod nec in bonis ponatur nec in contrariis. Si verbum sequimur, primum longius verbum praepositum quam bonum. Quam illa ardentis amores excitaret sui! Cur tandem? Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat; Vide, quaeso, rectumne sit. De quibus cupio scire quid sentias. Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris. Nos paucis ad haec additis finem faciamus aliquando;

				Quicquid porro animo cernimus, id omne oritur a sensibus; Sed ad haec, nisi molestum est, habeo quae velim. Non autem hoc: igitur ne illud quidem. Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Haec para/doca illi, nos admirabilia dicamus. In qua quid est boni praeter summam voluptatem, et eam sempiternam?
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
						<textarea id="form_TextArea" name="form_TextComment" rows="4" placeholder="Enter Comments"></textarea><input type="hidden" name="buildingID" value="SE12"><input id="form_SubmitButton" type="submit" name="form_SubmitForm">
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