
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dash</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php require_once('userDetails.php');?>
<?php require_once('header.php');?>
<?php require_once('side.php');?>

<div class="homecontainer">
<div class="d-flex table-data">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">ID Number</th>
      <th scope="col">Phone Number</th>
    <th scope="col">Operation</th>
   </tr>
  </thead>
  <tbody>

 <?php
  $sql="select * from user";
  $result=mysqli_query($conn,$sql);
  
  if($result)  {
    while($row=mysqli_fetch_assoc($result)){
      $name=$row['name'];
      $surname=$row['surname'];
      $phone=$row['phone'];
      $idnumber=$row['idnumber'];
      $id=$row['id'];       

      echo 
      '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$surname.'</td>
          <td>'.$idnumber.'</td>
          <td>'.$phone.'</td>
          <td>

<form action="tickets.php" method="POST"> 
    <select name="tickets"> 
    <option>None </option>
    <option value="1">1 Ticket</option>
    <option value="2">2 Tickets</option>
</select>
<input type="text" name="userid" value='.$id.' hidden>
<button type="submit" name="buyticket">Buy</button>
</form>
          </td>           
          <td>';

          if ($usertype=="admin") {
            echo '<a class="btn btn-primary" href="edit.php?id='.$id.'">Update</a>
          <a class="btn btn-danger" href="delete.php?deleteid='.$id.'">Delete</a>';
          }

          echo '<a class="btn btn-success" href="view.php?viewid='.$id.'">View</a>      
          </td>    
      </tr>'; 

    }       
  }
?>
  </tbody>
</table>
   </div> 
</div>
</body>
</html>
