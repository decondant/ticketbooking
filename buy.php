<?php
require_once('connection.php');
session_start();

$tickets=$_POST['tickets'];

	$id = $_SESSION['id'];

if ($tickets=="None") {
	header("Location: book.php");				
}else{

	$query="select * from user where id='".$id."'";
	$result=mysqli_query($conn,$query);

	if($result){
 		while($row=mysqli_fetch_assoc($result)){
 			$name=$row['name'];
 			$surname=$row['surname'];
 			$phone=$row['phone'];
 			$photo=$row['photo'];
 			$idnumber=$row['idnumber'];
 			$id=$row['id'];
 		}

		if ($tickets == 1) {
			$price = 50;
			$description="1 ticket with no discount.";
			$_SESSION['bought']="Ticket purchased";			
		}else if ($tickets==2){// || $tickets==4 || $tickets==6 || $tickets==8 || $tickets==10 ) {
		 		$price = ($tickets * 50) - (100*0.1);
				$description="2 tickets with R10 discount.";
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==4){// || $tickets==4 || $tickets==6 || $tickets==8 || $tickets==10 ) {
		 		$price = ($tickets * 50) - (100*0.1);
				$description="4 tickets with R20 discount.";
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==6){// || $tickets==4 || $tickets==6 || $tickets==8 || $tickets==10 ) {
		 		$price = ($tickets * 50) - (100*0.1);
				$description="6 tickets with R30 discount.";
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==8){// || $tickets==4 || $tickets==6 || $tickets==8 || $tickets==10 ) {
		 		$price = ($tickets * 50) - (100*0.1);
				$description="8 tickets with R40 discount.";
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==3) {
		 		$t = $tickets - 1;
		 		$price = ($t * 50) - (100*0.1) + 50;
				$description="3 tickets with R10 discount of 2 tickets.";
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==5 ) {
		 		$t = $tickets - 1;
		 		$price = ($t * 50) - (100*0.2) + 50;
				$description="5 tickets with R20 discount of 4 tickets.";		 		
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==7 ) {
		 		$t = $tickets - 1;
		 		$price = ($t * 50) - (100*0.3) + 50;		 
				$description="3 tickets with R30 discount of 6 tickets.";	 			
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==9 ) {
		 		$t = $tickets - 1;
		 		$price = ($t * 50) - (100*0.4) + 50;		 	
				$description="9 tickets with R40 discount of 8 tickets.";		 		
				$_SESSION['bought']="Ticket purchased";
		 }else if ($tickets==10){// || $tickets==4 || $tickets==6 || $tickets==8 || $tickets==10 ) {
		 		$price = ($tickets * 50) - (100*0.5);
				$description="10 tickets with R50 discount.";
				$_SESSION['bought']="Ticket purchased";
		 }



 		//foreign key table tickets
		$query3 = "INSERT into tickets (userId, price, noTickets, description) values('$id','$price','$tickets','$description')";
		$result3=mysqli_query($conn,$query3);
		//end

		if($result3){
			//echo "Ticket purchased.";
			header("Location: book.php");						
		}else{
			header("Location: book.php");				
			echo "Could not buy";
		}
 	}
}

?>