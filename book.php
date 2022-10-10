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
    <div class="header">      
      <h2>Ticket Sale</h2>
      <?php
        if (isset($_SESSION['bought']) && isset($_SESSION['bought'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['bought'].'<h3></div>';
            unset($_SESSION['bought']);
        }
      ?>
    </div>
    
    <form class="form" action="buy.php" method="POST">
      <div class="form-control" align="center">
<select name="tickets" > 
    <option>None </option>
    <option value="1">1 Ticket</option>
    <option value="2">2 Tickets</option>
    <option value="3">3 Tickets</option>
    <option value="4">4 Tickets</option>
    <option value="5">5 Tickets</option>
    <option value="6">6 Tickets</option>
    <option value="7">7 Tickets</option>
    <option value="8">8 Tickets</option>
    <option value="9">9 Tickets</option>
    <option value="10">10 Tickets</option>                                
</select>        
      </div>

      <div class="form-control">
        <button type="submit">Buy</button>
      </div>               

    </form>
  </div>
  </div>

</body>
</html>