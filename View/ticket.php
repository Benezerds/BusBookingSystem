<!DOCTYPE html>
<html lang="en">
<?php 
	require_once '../Dao/Connection.php';
    require_once 'header.php';
?>
<body>
	<?php require 'navbar.php';	?>
	<div id="mySidenav" class="sidenav">
	<a href="../View/dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
  <a href="../Controller/TicketViewController.php" id="view">View Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
  <a href="../View/cancelTicket.php" id="cancel">Cancel Tickets<span class="glyphicon glyphicon-remove-circle"></span></a>
  <a href="../Controller/ProfileController.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
	<div class="container">
		<div class="alert alert-success">
		  <strong>Yay! Your ticket is ready...</strong> It's time to Ride~ :)
		</div>
	</div>
	<?php
    $qr_pass = '<<busbooking Digital Ticket>><Journey Date - '.$row['BusDate'].'><Route ID - '.$row['RID'].'><Seat Number - '.$row['SeatNo'].'><Passenger ID - '.$row['Passenger'].'><<busbooking!>>';
	echo '<center><div class="container-fluid">
					<div class="card bg-info text-white" style="width:30%">
						<br><br>	
						<center><img class="card-img-top" src="../images/qrcodeimg.jpg" alt=Card image" width="300" height="240" /><center>
					  <div class="card-body">
					    <center><h3 class="card-title">Bus Digital Ticket</h3>
					    <h4 class="card-text">Journey Date - '.$row['BusDate'].'</h4>
							<h4 class="card-text">Route ID - '.$row['RID'].' </h4>
							<h4 class="card-text">Departure at - <strong> '.$row['STime'].' </strong>  from <strong> '.$row['Src'].' </strong></h4>
							<h4 class="card-text">Arrival at - <strong> '.$row['DTime'].' </strong>  near <strong> '.$row['Dst'].' </strong></h4>
							<h4 class="card-text">Seat Number - <strong> '.$row['SeatNo'].' </strong></h4>
							<h4 class="card-text">Passenger ID - '.$row['Passenger'].' </h4>
							<br><br>
					  </div>
					</div>
				</div></center>'

	?>

	<?php require_once 'footer.php' ?>

</body>
