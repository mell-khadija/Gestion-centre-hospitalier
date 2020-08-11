 

 <?php
include("conection.php");
 




?>
<html>
<head>
	<title>LOGIN </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 
</head>
<body>
<a href="" class="navbar-brand"><img src='images/logo-hopita.jpg' class='img-responsive img-logo' style="height: 180px; margin-top: -30px;" /></a>
	<div class='container-fluid' >
		<div class='row'>
			<div class='col-md-3'> 
				<!-- <img src='images/doc-background-two-right.png' class='img-responsive' />  -->
                
			</div> <!-- this should be a sidebar --> 
			<div class='col-md-9'>
				<div class='content-area'> 
					<div class='content-header'> 
					 <h3>Connectez-vous pour accéder au système</h3>
					</div>
					<div class='content-body'> 

						

						<center><div class='badge-header'>Se connecter en tant que:</div></center> 
						<div class='row'>
							<div class='col-md-2'></div>
							<div class='col-md-8'> 
								<div class='row' style='margin-top: 70px;'> 
									<div class='col-md-4'>
										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678411 - hospital medical nurse.png' alt='login as a doctor' style="height: 180px; width: 200px;"/>
											</div>
											<center><a href='pagel.php'><div class='badge-header'>Admin</div></a></center> 

										</center> 
									</div> 
									<div class='col-md-4'> 

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678412 - doctor medical care medical help stethoscope.png' alt='login as a doctor' style="height: 180px; width: 200px;"/>
											</div>
											<center><a href='pagel.php'><div class='badge-header'>Doctor</div></a></center> 
										</center>
									</div> 
									
									<div class='col-md-4'> 

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678443 - ambulance fast fast hospital.png' alt='login as a doctor' style="height: 180px; width: 200px;"/>
											</div>
											<center><a href='loginP.php'><div class='badge-header'>Patient</div></a></center> 
										</center>
									</div> 
									
								</div> 
							</div> 
							<div class='col-md-2'></div>
							
						</div><!-- end of the content area --> 
					</div> 
				</div>  
			</div> 
		</div> 
	</div> 
</body>
</html>
