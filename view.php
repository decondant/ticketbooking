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
  <?php require_once('userDetails.php');?>
  <?php require_once('side.php');?>
  <?php require_once('ticDetails.php');?>

  <nav>
    <label class="logo">Ticket Booking App</label>
    <ul><li><h2><?php echo $username;?></h2></li></ul>
    <ul>
      <li>
        <div>
         <img height="70px" src="img/a.jpg">    
        </div>
      </li>
    </ul>
    <ul><li><a class="btn" href="login.php" >Logout</a></li></ul>
  </nav>

   <div class="loginform">
    <div class="header">
      <h2>View User</h2>
    </div>
    
    <form class="form" >
      <div class="form-control">
        <label for="username" name="username">Username</label>
        <input type="text" disabled value="<?php echo $username ?>">    
      </div>
      <div class="form-control">
        <label for="name" name="name">Name</label>
        <input disabled type="text" value="<?php echo $name ?>">
      </div>
      <div class="form-control">
        <label for="surname" name="surname">Surname</label>
        <input disabled type="text" value="<?php echo $surname ?>">
      </div>
      <div class="form-control">
        <label for="idnumber" name="idnumber">ID Number</label>
        <input disabled type="text" value="<?php echo $idnumber ?>">
      </div>
      <div class="form-control">
        <label for="phone" name="phone">Phone</label>
        <input disabled type="text" value="<?php echo $phone ?>">
      </div>
      <div class="form-control">
        <label for="usertype" name="usertype">Usertype</label>
        <input disabled type="text" value="<?php echo $usertype ?>">
      </div>      
    </form>
  </div>
  </div>
      
</body>
</html>