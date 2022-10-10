<?php
require_once('connection.php');
session_start();

echo "jkio";

if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
	$id=$_GET['ID'];
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileEror = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];			
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileEror === 0) {
			if ($fileSize < 500000) {
				$fileNameNew = "user".$id.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location: photo.php");

				$photo = $fileNameNew;

	$query="update user set id='".$id."',photo='".$photo."' where id='".$id."'";		
	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "done";
	}

			}else{
				echo "Your file is too big";
			}
		}
		else{
			echo "There was an error uploading your file";
		}
	}else{
		echo "Not valid picture";
	}
}
}
?>