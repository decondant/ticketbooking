<?php session_start(); ?>

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
      <li><a class="btn" href="login.php">Login</a></li>
    </ul>
  </nav>

    <div class="loginform">

      <?php
        if (isset($_SESSION['good']) && isset($_SESSION['good'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['good'].'<h3></div>';
            unset($_SESSION['good']);
        }
      ?>


    <div class="header">
      <h2>Register User</h2>
    </div>
    
    <form class="form" id="form" method="POST" action="reg_code.php">
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
        <label for="password" name="password">Password</label>
        <input type="password" name="password" id="txtPassword">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="usertype" name="usertype">Usertype</label>
         <select name="usertype"> 
           <option value="user">User</option>
           <option value="admin">Admin</option>
         </select>
      </div>                              
      <div class="form-control">
        <button type="submit">Register</button>
      </div>      
    </form>
  </div>
  </div>


</body>
</html>