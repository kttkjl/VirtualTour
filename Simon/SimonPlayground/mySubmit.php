<?php
	$location = "sql3.freemysqlhosting.net";
	$username = "sql3167116";
	$password = "PRUvzPi6Qr";
	$database = "sql3167116";
	
	$myid = $_POST['loginid'];
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	$myemail = $_POST['email'];
	
	$conn = new mysqli($location, $username, $password, $database);
	
	if($conn->connect_error){
		die("Cannot connect: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO account(id, username, password, email) VALUES('$myid', '$myusername', '$mypassword', '$myemail')";
	
	/*$sql = "INSERT INTO account(id, username, password, email) VALUES('1111111111', 'gragaboga', 'gragaboga', fake@my.bcit.ca)";*/
	
	if($conn->query($sql) === FALSE){
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
	
?>