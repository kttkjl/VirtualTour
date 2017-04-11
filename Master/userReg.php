<?php

require_once('PDO_conn.php');

if($user->is_loggedin()!=""){
	$user->redirect('index.php');
}
//renamed
if(isset($_POST['register-btn']))
{
	$FormUsername = $_POST['username'];
	$FormEmail = $_POST['email'];
	$FormPassword = $_POST['password'];

	if ($FormUsername == ""){
		$error[] = "no username provided";
	} else if ($FormEmail == "") {
		$error[] = "no email provided";
	} else if ($FormPassword == "") {
		$error[] = "no password entered";
	} else {
		try 
		{
			$statement = $DB_conn->prepare("SELECT username, user_email, user_pass 
				FROM users 
				WHERE username=:uname OR user_email=:umail");
			$statement->execute(array(':uname' => $FormUsername, ':umail'=>$FormEmail));
			//store found rows in $row
			$row = $statement->fetch(PDO::FETCH_ASSOC);

			if ($row['username'] == $FormUsername) {
				$error[] = "username already taken.";
			} else if ($row['user_email'] == $FormEmail) {
				$error[] = "email already taken. ";
			} else {
				if ($user->register($FormUsername, $FormEmail, $FormPassword)) 
				{
					$user->redirect('login.php');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

}




// 	//Setting variables
// 	$FormUsername = $_POST['username'];
// 	$FormEmail = $_POST['email'];
// 	//Removed loginID because redundant
// 	$FormPassword = $_POST['password'];
// 	$FormCPassword = $_POST['cpassword'];
// 	//Grab info from table
// 	$search = $conn->prepare("SELECT username FROM users WHERE username = :username");
// 	$search->bindParam(':username', $FormUsername);
// 	$search->execute();

// 	if($search->rowCount() > 0){
// 		echo "Username exists in Database, please choose another.";
// 	} else {

// 		//sql var if everything is fine.
// 		$sql = "INSERT INTO users (username, loginID, email, reg_date, password)
// 		VALUES ($FormUsername, $FormLoginid, $FormEmail, NOW(), $FormPassword)";
// 		//prepare statement
// 		$statement = $conn->prepare($sql);
// 		$statement->bindParam(':username', $FormUsername);
// 		$statement->bindParam(':loginID', $FormLoginid);
// 		$statement->bindParam(':email', $FormEmail);
// 		$statement->bindParam(':password', $FormPassword);
// 		//INSERT IT
// 		$statement->execute();

// 		echo "Registration Successful.";
// 	}
// $conn->null;	
?>