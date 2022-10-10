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

	<?php require_once('header.php');?>
	<?php require_once('side.php');?>
    
    <div class="loginform">
      <?php
        if (isset($_SESSION['uploaded']) && isset($_SESSION['uploaded'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['uploaded'].'<h3></div>';
            unset($_SESSION['uploaded']);
        }else if (isset($_SESSION['big']) && isset($_SESSION['big'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['big'].'<h3></div>';
            unset($_SESSION['big']);
        }else if (isset($_SESSION['err']) && isset($_SESSION['err'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['err'].'<h3></div>';
            unset($_SESSION['err']);
        }else if (isset($_SESSION['notvalid']) && isset($_SESSION['notvalid'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['notvalid'].'<h3></div>';
            unset($_SESSION['notvalid']);
        }
      ?>
    <div class="header">
      <h2>Profile Picture</h2>
    </div>
    


    <form class="form" action="upload.php" method="POST" enctype="multipart/form-data">

      <div class="form-control">

  <input type="file" name="file" id="file">
  <button type="submit" id="submit" name="submit">Upload</button>

      </div>
</form>       

  </div>
  </div>

</body>
</html>