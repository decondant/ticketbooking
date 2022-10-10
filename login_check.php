<?php
require_once('connection.php');
session_start();

$usernameL = $_POST['username'];
$passwordL = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$usernameL' ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) 
{

	while ($row = mysqli_fetch_assoc($result)) 
	{
		$id = $row["id"];
		$username = $row["username"];
		$password = $row["password"];
		$_SESSION['id'] = $id;
	}

	if ($usernameL==$username && $passwordL==$password) {
		header("Location: home.php");
	}else if ($usernameL==$username && $passwordL!=$password) {
		$_SESSION['wrongPass']="Wrong Password";		
		header("Location: login.php");
	}elseif ($usernameL!=$username && $passwordL!=$password) {
		$_SESSION['doesntExist']="UserName Not Registered";		
		header("Location: login.php");
	}


}else{
	echo "Invalid email or password";
	header("Location: login.php");
}
?>