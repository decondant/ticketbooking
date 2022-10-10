<?php
require_once('connection.php');
session_start();

		if (isset($_SESSION['id'])){
    		$id = $_SESSION['id'];
			$sql="delete from user where id=$id";
			$result=mysqli_query($conn,$sql);

			if ($result) {
				echo "Account deleted.";
				header("Location: logout.php");						

			}else{
				echo "Could not delete account.";
				header("Location: home.php");
				die(mysqli_error($conn));
			}
	  	}

?>
