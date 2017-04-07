<?php
	$location = "sql3.freemysqlhosting.net";
	$username = "sql3167116";
	$password = "PRUvzPi6Qr";
	$database = "sql3167116";
	
	//BenYu's MySQL database info
	/*$location = "bcitdevcom.ipagemysql.com";
	$username = "comp15362014";
	$password = "2014-1536";
	$database = "1536forum";*/
	
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	$myemail = $_POST['email'];
	
	$conn = new mysqli($location, $username, $password, $database);
	
	/*$conn = new mysqli($location, $username, $password);*/
	
	if($conn->connect_error){
		die("Cannot connect: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO account(username, password, email) VALUES('$myusername', '$mypassword', '$myemail')";
	
	//If you use BenYu's MySQL database, he has different table fields
	/*$sql = "INSERT INTO members(login, passwd, firstname) VALUES('$myusername', '$mypassword', '$myemail')";*/
	
	if($conn->query($sql) === FALSE){
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
	
?>