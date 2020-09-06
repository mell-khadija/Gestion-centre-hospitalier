<?php
session_start();

include('includ/conection.php');

if(isset($_POST['submit']))
{
	
	$spécialisation=$_POST['spécialisation'];
$sql="INSERT INTO doctorspécialisation (`id`, `spécialisation`) VALUES ( '', '$spécialisation' )";
$new=mysqli_query($conn,$sql);
 echo"data inserted";
}

if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from doctorspécialisation where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Doctor Spécialisation</title>
	
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
									<h1 class="mainTitle">Admin | Ajouter Doctor Spécialisation</h1>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Doctor Spécialisation</h5>
												</div>
												<div class="panel-body">	
													<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
																Doctor Spécialisation
															</label>
							<input type="text" name="spécialisation" class="form-control"  placeholder="Entrez la spécialisation du médecin" require>
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
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
									<hr />
									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Docter Spécialisation</span></h5>
									
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">id</th>
												<th>Spécialisation</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($conn,"select * from doctorspécialisation");

while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $row['id'];?>.</td>
												<td class="hidden-xs"><?php echo $row['spécialisation'];?></td>
												
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
						
	<a href="edit-doctor-specialisation.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"  style="color: bleu" ></i></a>											
	<a href="doc-specialisation.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												</td>
											</tr>
											
											<?php 

											 }?>
											
											
										</tbody>
									</table>
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
	
			<!-- end: FOOTER -->
		
	
		</div>
		<?php include('includ/footer.php');?>
		<script src="assets/js/main.js"></script>
	</body>
</html>
