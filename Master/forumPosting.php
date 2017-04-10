<?php
require_once('PDO_conn.php');

/*if($user->is_loggedin()){
	$haveSignedIn = true;
} else {
	$haveSignedIn = false;
}*/
$haveSignedIn = $user->is_loggedin();
if($haveSignedIn){
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
$toExecute = "INSERT INTO `test1db.table_response` (`topic_id`, `post_id`, `post_username`, `post_text`, `post_date`)
 VALUES (:topic,
 NULL,
 :username,
 :comment,
 CURRENT_TIMESTAMP)";
$prepost = $DB_conn->prepare($toExecute);
$prepost->bindParam(':topic',$_POST['form_TextTopic']);
$prepost->bindParam(':username',$_SESSION['username']);
$prepost->bindParam(':comment',$_POST['form_TextComment']);
$prepost->execute();
$DB_conn = null;
header("location:javascript://history.go(-1)");
}
?>