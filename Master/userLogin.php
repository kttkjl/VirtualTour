<?php
//link to PDO_conn.php
//put this file in htdocs along with the htmls
//define ('__ROOT__', dirname(dirname(__FILE__)));
require_once('PDO_conn.php');

if($user->is_loggedin()!=""){
	$user->redirect('index.html')
}

//if name='login' on login.html is set (not NULL)
if(isset($_POST['login']))
{
	//Setting variables
	$FormUsername = $_POST['UserOrEmail'];
	$FormEmail = $_POST['UserOrEmail'];
	$FormPassword = $_POST['password'];

	//if the doLogin function returns true.
	if($user->doLogin($FormUsername, $FormEmail, $FormPassword))
	{
		//IDK REDIRECT IT SOMEHWER ELSE?! - how 2 redirect to loggedin index plshalp
		$user->redirect('index.html')
	} 
	else 
	{
		$error = "Login info wrong";
	}
}



// 	//Grab info from table
// 	$search = $conn->prepare("SELECT email, password FROM users WHERE email = :email");
// 	$search->bindParam(':email', $FormEmail);
// 	$search->execute();

// 	if($search->rowCount() > 0){
// 		echo "Username exists in Database, please choose another.";
// 	} else {

// 		//sql var if everything is fine.
// 		$sql = "INSERT INTO users (id, username, loginID, email, reg_date, password)
// 		VALUES (NULL, $FormUsername, $FormLoginid, $FormEmail, NOW(), $FormPassword)";
// 		//prepare statement
// 		$statement = $conn->prepare($sql);
// 		$statement->bindParam(':email', $FormEmail);
// 		$statement->bindParam(':password', $FormPassword);
// 		//INSERT IT
// 		$statement->execute();
// 	}
// //close connection
// $conn->null;

?>