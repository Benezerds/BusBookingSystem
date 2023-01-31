<!DOCTYPE html>
<html lang="en">
<?php 
	require_once '../Dao/Connection.php';
    require_once '../View/header.php';
?>

<body>
	<?php require_once '../View/navbar.php';	?>
	<div id="mySidenav" class="sidenav">
		<a href="../View/dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
		<a href="../passenger/view_tickets.php" id="view">View Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
		<a href="../passenger/cancelTicket.php" id="cancel">Cancel Tickets<span class="glyphicon glyphicon-remove-circle"></span></a>
		<a href="profile.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
	<?php

		if($userType=='Student') {
            echo '<center><div class="container-fluid">
							<div class="card bg-info pl-2" style="width:25%">
								<br><br>
								<div class="card-header"><h3>Your BusKaro Profile</h3></div><br><br>
								<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Your Name&emsp;-&emsp;' . $row['SName'] . ' </h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Roll No&emsp;-&emsp;' . $row['RollNo'] . ' </h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Batch&emsp;-&emsp;' . $row['Batch'] . '</h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Branch&emsp;-&emsp;' . $row['Branch'] . '</h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Blood Group&emsp;-&emsp;' . $row['BloodG'] . '</h4>
									<br><br>
							</div>
							</div>
						</div><br><br>';
		}elseif($userType=='Faculty'){
			echo '<center><div class="container-fluid">
							<div class="card bg-info pl-2" style="width:25%">
								<br><br>
								<div class="card-header"><h3>Your BusKaro Profile</h3></div><br><br>
								<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Your Name&emsp;-&emsp;'.$row['FName'].'</h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Roll No&emsp;-&emsp;'.$row['FID'].' </h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Branch&emsp;-&emsp;'.$row['Dept'].'</h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Blood Group&emsp;-&emsp;'.$row['BloodG'].'</h4>
									<br><br>
							</div>
							</div>
						</div><br><br>';
		}else{
			echo '<center><div class="container-fluid">
							<div class="card bg-info pl-2" style="width:25%">
								<br><br>
								<div class="card-header"><h3>Your BusKaro Profile</h3></div><br><br>
								<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Your Name&emsp;-&emsp;'.$row['EName'].'</h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Roll No&emsp;-&emsp;'.$row['EID'].' </h4>
									<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Blood Group&emsp;-&emsp;'.$row['BloodG'].'</h4>
									<br><br>
							</div>
							</div>
						</div><br><br>';
		}
	?>

	<?php require_once '../View/footer.php' ?>

</body>