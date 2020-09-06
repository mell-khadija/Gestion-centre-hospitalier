<?php
session_start();

include('includ/conection.php');

if(isset($_GET['cancel']))
		  {
			$id=$_GET['id'];
mysqli_query($conn," UPDATE `rendez_vous` SET `doctor Spécialisation`  where id = '".$_GET['id']."'");
                  echo"Appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Docteur | Historique des rendez-vous</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="css/styles.css">
		
	</head>
	<body>
		<div id="app">		
<?php include('includ/basepa.php');?>
			<div class="app-content">
				

					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Docteur | Historique des rendez-vous</h1>
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
												<th class="center">#</th>
												<th class="hidden-xs">Patient  Name</th>
												<th>Spécialisation</th>
												<th>Rendez-vous date</th>
												<th>Rendez-vous heure </t>
												<th>Date d'affichage</t>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
include('includ/conection.php');

$sql=mysqli_query($conn,"select patients.nomPatient as nomP,rendez_vous.*  from rendez_vous join patients on patients.id=rendez_vous.patientId where rendez_vous.doctorId='".$_SESSION['id']."'");
$cnt=1;                  
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?></td>
												<td class="hidden-xs"><?php echo $row['nomP'];?></td>
												<td><?php echo $row['doctor Spécialisation'];?></td>
												<td><?php echo $row['rendez-vous Date'];?></td>
												<td><?php echo $row['rendez-vous Heure'];?></td>
												<td><?php echo $row['date affichage'];?></td>
												
											
												<td >
												
							

													
	<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
	
												
												</td>
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
		

		</div>
	
	</body>
</html>
