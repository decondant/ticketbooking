<?php
require_once('connection.php');

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
//	 header("Location: index.html");	
}
else
{
	if ($name!='' && $surname!='' && $idnumber!='') 
	{
		$INSERT = "INSERT into user (name, surname, idnumber, phone, usertype, username, password) values('$name','$surname','$idnumber','$phone','$usertype','$username','$password') ";

		// if($name!="" && $surname!="" && $idnumber!="" && $phone!="")
		// {
			$res = mysqli_query($conn,$INSERT);

			if ($res) 
			{
			echo "<script>alert ('Registration successful!') </script>";			
			// header("Location: index.html");
			//header("Location: index.html");
			}
			else
			{
				echo "Error: ".$INSERT;
			//	header("Location: index.html");
			}		
		//}
	}
	else
	{
//	header("Location: p.php");
	// echo "<script>alert ('Please enter all details.') </script>";					
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking App</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">

  <nav>
    <label class="logo">Ticket Booking App</label>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Admission</a></li>
      <li><a class="btn" href="login.html">Login</a></li>
    </ul>
  </nav>

    <div class="loginform">
    <div class="header">
      <h2>Register User</h2>
    </div>
    


    <form class="form" id="form" method="POST" action="p.php">
      <div class="form-control">
        <span id="smol"></span>
      </div>
      <div class="form-control">
        <label for="username" name="username">Username</label>
        <input type="text" name="username" id="txtUsername">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="name" name="name">Name</label>
        <input type="text" name="name" id="txtName">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="surname" name="surname">Surname</label>
        <input type="text" name="surname" id="txtSurname">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="idnumber" name="idnumber">ID Number</label>
        <input type="text" name="idnumber" id="txtIdnumber">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="phone" name="phone">Phone</label>
        <input type="text" name="phone" id="txtPhone">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="usertype" name="usertype">Usertype</label>
        <input type="text" name="usertype" id="txtUsertype">
        <small>Error Message</small>
      </div>      
      <div class="form-control">
        <label for="password" name="password">Password</label>
        <input type="password" name="password" id="txtPassword">
        <small>Error Message</small>
      </div>                  
      <div class="form-control">
        <button type="submit">Register</button>
      </div>      
    </form>
  </div>
  </div>


<script src="app.js"></script>
</body>
</html>