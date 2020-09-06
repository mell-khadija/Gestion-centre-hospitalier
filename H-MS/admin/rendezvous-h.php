<?php
session_start();

include('includ/conection.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patients | Historique des rendez-vous</title>
		
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
<?php include('includ/base.php');?>
			<div class="app-content">
				

					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patients  | Historique des rendez-vous</h1>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">id</th>
												<th class="hidden-xs">Doctor Name</th>
												<th class="hidden-xs">Doctor prenom</th>
												<th>Patient Name</th>
												<th>Spécialisation</th>
												<th>rendez-vous Date </th>
												<th>rendez-vous Heure </th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($conn,"SELECT  users.nome AS nome, users.prenom AS prenom, patients.nomPatient AS nomP, rendez_vous.* FROM rendez_vous JOIN users ON users.id = rendez_vous.doctorId JOIN patients ON patients.id = rendez_vous.patientId ");

while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $row['id'];?>#</td>
												<td class="hidden-xs"><?php echo $row['nome'];?></td>
												<td class="hidden-xs"><?php echo $row['prenom'];?></td>
												<td class="hidden-xs"><?php echo $row['nomP'];?></td>
												<td><?php echo $row['doctor Spécialisation'];?></td>
												
												<td><?php echo $row['rendez-vous Date'];?> 
											
												</td>
												<td><?php echo $row['rendez-vous Heure'];?></td>
												
												
											</tr>
											
											<?php 

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
		
		</div>
		
	</body>
</html>
