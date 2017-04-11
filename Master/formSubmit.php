<?php
require_once('PDO_conn.php');

$formComment = $_POST['form_TextComment'];
$userName = $_SESSION['username'];
$userID = $_SESSION['userid'];

$commentConnection = $DB_conn;

$myComment = $commentConnection->prepare("INSERT INTO comments(id,username,usercomment) VALUES(:uid, :uname, :ucomment)");

$myComment->bindparam(":uid", $userID);
$myComment->bindparam(":uname", $userName);
$myComment->bindparam(":ucomment", $formComment);

$myComment->execute();

header('Location: eachbuild.php');

?>