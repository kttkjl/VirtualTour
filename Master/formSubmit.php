<?php
require_once('PDO_conn.php');

$formComment = $_POST['form_TextComment'];
$userName = $_SESSION['username'];
$userID = $_SESSION['userid'];
$buildNum = $_POST['buildingID'];

$commentConnection = $DB_conn;

$myComment = $commentConnection->prepare("INSERT INTO comments(id,username,usercomment,building) VALUES(:uid, :uname, :ucomment, :buildcode)");

$myComment->bindparam(":uid", $userID);
$myComment->bindparam(":uname", $userName);
$myComment->bindparam(":ucomment", $formComment);
$myComment->bindparam(":buildcode", $buildNum);

$myComment->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);

?>