 

  <?php require_once('userDetails.php');?>
<div class="sidebar">  
	  <h2> Side</h2>
	<ul>
      	<li><a href="view.php">View Account</a></li>
            <li><a href="view.php">View Account</a></li><br>
            <li><a href=""><?php echo $username;?></a></li>
            <li><a href="purchases.php">View Purchases</a></li><br>          
            <li><a href="update.php">Update Account</a></li>                  
            <li><a href="photo.php">Upload Photo</a></li>
            <li><a href="book.php">Book Ticket</a></li>
         <?php if ($usertype=="admin") {
          echo  '<li><a href="viewusers.php">View all Users</a></li>';
         } ?>   
            <li><a href="delete.php">Delete My Account</a></li> 
	</ul>
</div>