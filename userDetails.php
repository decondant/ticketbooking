<?php
require_once('connection.php');
session_start();

if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) 
{
  while ($row = mysqli_fetch_assoc($result)) 
  {
    $name = $row["name"];
    $surname = $row["surname"];
    $username = $row["username"];
    $phone = $row["phone"];
    $photo = $row["photo"];
    $usertype = $row["usertype"];
    $idnumber = $row["idnumber"];     
  }
}
}


?>