<?php
session_start();
//error_reporting(0);
include('includ/conection.php');


if(isset($_POST['submit']))
{
$nomPatient=$_POST['nomP'];
$localisation=$_POST['localisation'];
$agePatient=$_POST['ageP'];
$sexePatient=$_POST['sexeP'];
$telPatient=$_POST['telP'];
$numéro=$_POST['num'];

$sql=mysqli_query($conn,"UPDATE `patients` SET `nomPatient`='$nomPatient',`localisation`='$localisation',`agePatient`='$agePatient',`sexePatient`='$sexePatient',`telPatient`='$telPatient',`numéro`='$numéro' WHERE id='".$_SESSION['id']."'");
if($sql)
{
echo "Your Profile updated Successfully";


}

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Edit Profile</title>
		
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
									<h1 class="mainTitle">User | Edit Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Edit Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">
<?php echo "Your Profile updated Successfully";?> </h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
									<?php 
$sql=mysqli_query($conn,"select * from patients where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>

<hr />													<form role="form" name="edit" method="post">
													

<div class="form-group">
															<label for="fname">
																 Nome
															</label>
	<input type="text" name="nomP" class="form-control" value="<?php echo htmlentities($data['nomPatient']);?>" >
														</div>


<div class="form-group">
															<label for="address">
																Localisation
															</label>
					<textarea name="localisation" class="form-control"><?php echo htmlentities($data['localisation']);?></textarea>
														</div>
<div class="form-group">
															<label for="city">
																 Age
															</label>
		<input type="text" name="ageP" class="form-control" required="required"  value="<?php echo htmlentities($data['agePatient']);?>" >
														</div>
	
<div class="form-group">
									<label for="gender">
																Sexe
															</label>

<select name="sexeP" class="form-control" required="required" >
<option value="<?php echo htmlentities($data['sexePatient']);?>"><?php echo htmlentities($data['sexePatient']);?></option>
<option value="male">Homme</option>	
<option value="female">Femme</option>	

</select>

														</div>

<div class="form-group">
									<label for="fess">
																 Téléphone
															</label>
					<input type="phone" name="telP" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['telPatient']);?>">
				
														</div>
<div class="form-group">
									<label for="fess">
																 Numéro
															</label>
					<input type="text" name="num" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['numéro']);?>">
				
														</div>



														
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
													<?php } ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
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
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
