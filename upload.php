<?php
require_once('connection.php');
session_start();


if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
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
					$_SESSION['uploaded']="Picture Uploaded";
				}
			}else{
				echo "Your file is too big";		
				$_SESSION['big']="Your file is too big";					
			}
		}
		else{
			echo "There was an error uploading your file";
			$_SESSION['err']="There was an error uploading your file";
		}
	}else{
		echo "Not valid picture";
		$_SESSION['notvalid']="Not a valid picture";
	}
}
}
?>