<?php
session_start();
//error_reporting(0);
include('includ/conection.php');


if(isset($_POST['submit']))
{
$spécialisation=$_POST['doctorspécialisation'];
echo  $spécialisation;
$doctorid=$_POST['doctorid'];
echo  $doctorid;
$patientid=$_SESSION['id'];
echo  $patientid;

$rddate=$_POST['rddate'];
echo  $rddate;
$rdtime=$_POST['rdtime'];
echo  $rdtime;


$query="INSERT INTO `rendez-vous`(`id`, `doctor Spécialisation`, `doctorId`, `patientId`, `rendez-vous Date`, `rendez-vous Heure`) VALUES('','$spécialisation','$doctorid','$patientid','$rddate','$rdtime')";
$new = mysqli_query($conn, $query);
if($new){
  echo ' data inserted';
 
}else{
  echo ' data not inserted';
}

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
	
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

        <link href="css/style.css" rel="stylesheet">
		<script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'spécialisationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	
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
									<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
								
													<form role="form" name="book" method="post" >
														


<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Spécialisation
															</label>
							<select name="doctorspécialisation" class="form-control" onChange="getdoctor(this.value);" required="required">
																<option value="">Select Spécialisation</option>
<?php $ret=mysqli_query($conn,"select * from doctorspécialisation");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['spécialisation']);?>">
																	<?php echo htmlentities($row['spécialisation']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>




														<div class="form-group">
															<label for="doctor">
																Doctors id
															</label>
						<select name="doctorid" class="form-control" id="doctor"  required="required">
						<option value="">Select Doctor</option>			
						</select>
						</div>





														
														
<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
<input  type="date" class="form-control datepicker" name="rddate"  required="required" data-date-format="yyyy-mm-dd">
	
														</div>
														
<div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
			<input  type="time" class="form-control" name="rdtime" id="timepicker1" required="required">eg : 10:00 PM
														</div>														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
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
		
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>

