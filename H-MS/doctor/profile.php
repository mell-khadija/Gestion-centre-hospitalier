<?php
session_start();

include('includ/conection.php');

if(isset($_POST['submit']))
{
    $nom = $_POST['nome'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $status = $_POST['status'];
    $spécialisation = $_POST['spécialisation'];
$sql=mysqli_query($conn," UPDATE users set nome='$nom',prenom='$prenom',email='$email',tel='$tel',status='$status',spécialisation='$spécialisation' where email='".$_SESSION['email']."'");
if($sql)
{
echo "Doctor Details updated Successfully";
header("location:dashboard.php");

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctr | Edit Doctor Details</title>
		
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
				
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor | Edit Doctor Details</h1>
																	</div>
								
							</div>
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
													<h5 class="panel-title">Edit Doctor</h5>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($conn,"select * from users where email='".$_SESSION['email']."'");
                                   while($data=mysqli_fetch_array($sql))
{
?>

<hr />
													<form role="form" name="adddoc"  method="post" ">
														

<div class="form-group">
															<label for="nome">
																 Nom
															</label>
	<input type="text" name="nome" class="form-control" value="<?php echo ($data['nome']);?>" >
														</div>
                                                        <div class="form-group">
															<label for="doctorname">
																 Prenom
															</label>
	<input type="text" name="prenom" class="form-control" value="<?php echo($data['prenom']);?>" >
														</div>
                                                        <div class="form-group">
									<label for="fess">
																 Email
															</label>
					<input type="email" name="email" class="form-control"  readonly="readonly"  value="<?php echo ($data['email']);?>">
														</div>
    
<div class="form-group">
									<label for="fess">
										Téléphone
											</label>
	<input type="text" name="tel" class="form-control" required="required"  value="<?php echo($data['tel']);?>">
														</div>
<div class="form-group">
															<label for="fess">
																 Status
															</label>
                                                            <select name="status" class="form-control" required="required">
					<option value="<?php echo($data['status']);?>">
					<?php echo($data['status']);?></option>
<?php $ret=mysqli_query($conn,"select * from users");
while($row=mysqli_fetch_array($ret))
{
?>
								<option value="<?php echo ($row['status']);?>">
																	<?php echo ($row['status']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>
                                                        <div class="form-group">
															<label for="doctorspécialisation">
																 Spécialisation
															</label>
							<select name="spécialisation" class="form-control" required="required">
					<option value="<?php  echo($data['Spécialisation']);?>">
					<?php echo($data['Spécialisation']);?></option>
<?php $ret=mysqli_query($conn,"select * from doctorspécialisation");
while($row=mysqli_fetch_array($ret))
{
?>
								<option value="<?php echo($row['Spécialisation']);?>">
																	<?php echo($row['spécialisation']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>                                                       
	






														
														<?php } ?>
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
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
		
	</body>
</html>
