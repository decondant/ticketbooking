<?php
require_once('connection.php');
session_start();


if (isset($_SESSION['id'])){
	$id = $_SESSION['id'];
  	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$idnumber = $_POST['idnumber'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$username = $_POST['username'];

	$query="update user set id='".$id."',name='".$name."',surname='".$surname."',idnumber='".$idnumber."',phone='".$phone."',password='".$password."',username='".$username."' where id='".$id."'";

	$result = mysqli_query($conn,$query);

	if($result){
		echo "updated";
	header("Location: view.php");	
	}
	else {
		header("Location: update.php");	
		echo "not updated";
	}
}

?>