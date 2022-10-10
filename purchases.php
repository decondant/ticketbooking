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

<?php require_once('header.php');?>
<?php require_once('side.php');?>

<div class="homecontainer">
<div class="d-flex table-data">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserId</th>
      <th scope="col">Price</th>
      <th scope="col">No. Tickets</th>
      <th scope="col">Description</th>
   </tr>
  </thead>
  <tbody>

 <?php
 require_once('connection.php');
 if (isset($_SESSION['id'])) 
 {
  $id = $_SESSION['id'];

  $sql = "SELECT * FROM tickets where userId='$id'";
  $result=mysqli_query($conn,$sql);
  
  if($result)  {
    while($row=mysqli_fetch_assoc($result)){
    $id = $row["id"];
    $userId = $row["userId"];
    $price = $row["price"];
    $noTickets = $row["noTickets"];
    $description = $row["description"];
      echo 
      '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$userId.'</td>
          <td>'.$price.'</td>
          <td>'.$noTickets.'</td>
          <td>'.$description.'</td>
      </tr>'; 
    }       
  }
}
?>
  </tbody>
</table>
   </div> 
</div>

</body>
</html>