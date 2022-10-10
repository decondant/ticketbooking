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
  <?php require_once('userDetails.php');?>    
  
    <div class="loginform">
    <div class="header">
      <h2>Update User</h2>
    </div>
    

    <form class="form" method="POST" action="edit.php">
      <div class="form-control">
        <label for="username" name="username">Username</label>
        <input type="text" name="username" value="<?php echo $username ?>">
      </div>

      <div class="form-control">
        <label for="name" name="name">Name</label>
        <input name="name" type="text" value="<?php echo $name ?>">  
      </div>

      <div class="form-control">
        <label for="surname" name="surname">Surname</label>
        <input name="surname" type="text" value="<?php echo $surname ?>">  
      </div>
      
      <div class="form-control">
        <label for="idnumber" name="idnumber">ID Number</label>
        <input name="idnumber" type="text" value="<?php echo $idnumber ?>">
      </div>

      <div class="form-control">
        <label for="phone" name="phone">Phone</label>
        <input name="phone" type="text" value="<?php echo $phone ?>">  
      </div>
      
      <div class="form-control">
        <label for="password" name="password">Password</label>
        <input name="password" type="password" value="">  
      </div>

      <div class="form-control">
        <button type="submit">Update</button>
      </div>               

    </form>



  </div>
  </div>

</body>
</html>