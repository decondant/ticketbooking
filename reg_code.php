<?php
require_once('connection.php');
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$idnumber = $_POST['idnumber'];
$phone = $_POST['phone'];
$usertype = $_POST['usertype'];
$password = $_POST['password'];
$username = $_POST['username'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) 
{
	echo "<script>alert ('User already exists!') </script>";
	 header("Location: index.php");	
}
else
{
	if ($name!='' && $surname!='' && $idnumber!='' && $username!='') 
	{

		$INSERT = "INSERT into user (name, surname, idnumber, phone, usertype, username, password) values('$name','$surname','$idnumber','$phone','$usertype','$username','$password') ";

		// if($name!="" && $surname!="" && $idnumber!="" && $phone!="")
		// {
			$res = mysqli_query($conn,$INSERT);

			if ($res) 
			{
				$_SESSION['good']="Registration Successful";
				header("Location: index.php");
			//header("Location: index.html");
			}
			else
			{
//				$_SESSION['failure']="Not  Successful registering";				
			//	echo "Error: ".$INSERT;
				header("Location: index.php");
			}		
		//}
	}
	else
	{
	header("Location: index.php");
	// echo "<script>alert ('Please enter all details.') </script>";					
	}
}

?>