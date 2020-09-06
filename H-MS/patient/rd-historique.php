<?php
session_start();
error_reporting(0);
include('includ/conection.php');

if(isset($_GET['cancel']))
		  {
		          mysqli_query($conn,"update rendez_vous set userStatus='0' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Your appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient | Historique des rendez-vous</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="css/styles.css">
		
	</head>
	<body>
		<div id="app">		
<?php include('includ/basep.php');?>
			<div class="app-content">
				
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patient  | Historique des rendez-vous</h1>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Docteur Nom</th>
												<th class="hidden-xs">Docteur Prenom</th>
												<th>Spécialisation</th>
												<th>Rendez-vous Date</th>
												<th>Rendez-vous Heure </th>
												<th>Date affichage</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($conn,"select users.nome as nome,users.prenom AS prenom,rendez_vous.*  from rendez_vous join users on users.id=rendez_vous.doctorId where rendez_vous.patientId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['nome'];?></td>
												<td><?php echo $row['prenom'];?></td>
												<td><?php echo $row['doctor Spécialisation'];?></td>
												
												<td><?php echo $row['rendez-vous Date'];?></td>
												<td><?php echo $row['rendez-vous Heure'];?> </td>
												<td><?php echo $row['date affichage'];?></td>
												




												
									
												
							
													
	<td><a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a></td>
	
												
												
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('includ/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			
			<!-- end: SETTINGS -->
		</div>
		
	</body>
</html>
