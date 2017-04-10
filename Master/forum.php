<div class="form_AllWrapper">
			<div class="form_SubmitComments">
			<p><?php 
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "comp1536project";


try {
	$DB_conn = new PDO("mysql:host={$DB_host};dbname={$DB_name};", $DB_user, 
    $DB_pass);
    // set the PDO error mode to exception
    $DB_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Just turn emulation off in MySQL driver - only really used in older of MYSQL
    $DB_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$forumDBphp = "CREATE TABLE IF NOT EXISTS `test1DB.table_response` (
	   `topic_id` VARCHAR( 255 ) NOT NULL,
	   `post_id` INT( 50 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	   `post_username` VARCHAR (255) NOT NULL,
	   FOREIGN KEY (post_username) REFERENCES users(username),
	   `post_text` TEXT NOT NULL,
	   `post_date` DATETIME NOT NULL DEFAULT NOW()
) ENGINE = MYISAM ;";
	$DB_conn->exec($forumDBphp);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//INSERT INTO `test1db.table_response` (`topic_id`, `post_id`, `post_username`, `post_text`, `post_date`) VALUES ('test topic', '0', '123456', 'test text', CURRENT_TIMESTAMP)
$stmt = $DB_conn->prepare('SELECT * FROM `test1db.table_response` WHERE 1'); 
    $stmt->execute();
	$posted = false;
while($result = $stmt->fetch(PDO::FETCH_ORI_NEXT)) {
	$posting =  '<b>' . $result['topic_id'] . '</b> - ' . $result['post_date'] . '<br/>by ' . $result['post_username'] . '<br/><br/>' . $result['post_text'] . '<br/><br/>';
	print $posting;
	$posted = true;
};
if($result == null && !$posted) {
	print 'There are no comments to display<br/><br/><br/><br/><br/>';
	}
$DB_conn = null;
			?></p>
			</div>
			<div class="form_Wrapper">
			<?php
			if($haveSignedIn){
			print '<form id="form_CommentsForm" action="forumPosting.php" onsubmit="return form_validate()" method="POST">
					<div class="form_TextSection">
					<input type="text" id="form_Topic" name="form_TextTopic" placeholder="Enter a Topic"><br/>----------------------------------------------<br/>
						<textarea id="form_TextArea" name="form_TextComment" rows="4" placeholder="Enter Comments"></textarea><input id="form_SubmitButton" type="submit" name="form_SubmitForm">
					</div>
				</form>'; } else {
					print 'You must be logged in to post';
				}
				?>
			</div>