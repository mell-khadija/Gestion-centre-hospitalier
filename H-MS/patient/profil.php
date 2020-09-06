<?php
session_start();

include('includ/conection.php');

if(isset($_POST['updatebtn']))
{
    $id = $_SESSION['id'];
    $nomp = $_POST['nome'];
    $localisation = $_POST['localisation'];
    $agep = $_POST['agepatient'];
    $sexep = $_POST['sexepatient'];
    $telp = $_POST['telpatient'];
    $datep = $_POST['naiss'];
    $diagnos = $_POST['diagnostic'];
    $ordp = $_POST['ordonnance'];
    $numero = $_POST['numéro'];
    
    $query =mysqli_query($conn, "UPDATE `patients` SET id ='$id', nomPatient ='$nomp', localisation ='$localisation', agePatient ='$agep', sexePatient ='$sexep', telPatient ='$telp', date de naissance ='$datep', diagnostic ='$digno', ordonnance ='$ordp', numéro ='$numero'  WHERE numéro='".$_SESSION['numero']."'");
    if($query)
    {
        echo 'Your Data is Updated';
        header('Location: dashboard.php'); 
    }
    
}

?>


<!-- DataTales Example -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="./css/style.css">
  <title>ADMIN | MODIFIER LES DÉTAILS DU PATIENTS</title>

  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		
		<link rel="stylesheet" href="css/styles.css">
		
</head>

<body>

<div id="app">		
<?php include('includ/basep.php');?>
			<div class="app-content">
				
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patients | Edit patient Details</h1>
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
													<h5 class="panel-title">Edit Patient</h5>
												</div>
												<div class="panel-body">
									<?php $query=mysqli_query($conn,"select * from patients where id = '".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

<hr />





          
          <form role="form" name=""  method="post" ">
														


              
              <div class="form-group">
                  <label for="nome"> Nom </label>
                  <input type="text" name="nome" value="<?php echo $row['nomPatient'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label> Loaclisation</label>
                  <input type="text" name="loclisation" value="<?php echo $row['localisation'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="agepatient" value="<?php echo $row['agePatient'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label>Sexe</label>
                  <input type="text" name="sexepatient" value="<?php echo $row['sexePatient'] ?>" class="form-control" >
              </div>

              <div class="form-group">
                  <label>tel</label>
                  <input type="phone" name="telpatient" value="<?php echo $row['telPatient'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label>Date De Naissance</label>
                  <input type="date" name="naiss" value="<?php echo $row['date de naissance'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label>diagnostic</label>
                  <input type="text" name="diagnostic" value="<?php echo $row['diagnostic'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label>ordonnance</label>
                  <input type="text" name="ordonnance" value="<?php echo $row['ordonnance'] ?>" class="form-control" >
              </div>
              <div class="form-group">
                  <label>Numéro</label>
                  <input type="text" name="numero" value="<?php echo $row['numéro'] ?>" class="form-control" >
              </div>
              
              

              
              <a href="dashboard.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    
}
?>
  </div>
  </div>
</div>




</div>
<?php include("includ/footer.php") ?>
<!-- /.container-fluid -->




  <!-- Custom scripts for all pages-->
  <script src="js/main.js"></script>

 

</body>
</html>

