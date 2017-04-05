<?php
	$location = "sql3.freemysqlhosting.net";
	$username = "sql3167116";
	$password = "PRUvzPi6Qr";
	$database = "sql3167116";
	
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	
	$conn = new mysqli($location, $username, $password, $database);
	
	if($conn->connect_error){
		die("Cannot connect: " . $conn->connect_error);
	}
	
	$sql = "SELECT password FROM account WHERE username='$myusername' AND password='$mypassword'";
	
	$result = $conn->query($sql);
	
	if($result->num_row > 0){
		echo "You logged in successfully!";
	} else{
		echo "Failed";
	}
	
	$conn->close();
?>