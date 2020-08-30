<?php
session_start();

include('includ/conection.php');







	
if(isset($_POST['submit']))
{	
$id=$_SESSION['id'];
$nomPatient=$_POST['nomP'];
$localisation=$_POST['local'];
$agePatient=$_POST['agP'];
$sexePatient=$_POST['sP'];
$telPatient=$_POST['telP'];
$dateN=$_POST['naiss'];
$DiaP=$_POST['dP'];
$ordP=$_POST['oP'];
$numero=$_POST['numero'];



$sql=mysqli_query($conn,"INSERT INTO `patients`(`id`, `nomPatient`, `localisation`, `agePatient`, `sexePatient`, `telPatient`, `date de naissance`, `diagnostic`, `ordonnance`, `numéro`) values('$id','$nomPatient','$localisation','$agePatient','$sexePatient','$telPatient','$dateN','$DiaP','$ordP','$numero')");
if($sql)
{
echo "<script>alert('Patient info added Successfully');</script>";
header('location:add-patient.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Medecin | Ajouter Patient</title>
		
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
<?php include('includ/basepa.php');?>
<div class="app-content">

<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Patients | Ajouter Patient</h1>
</div>

</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">

<div class="panel-body">
<form role="form" name="" method="post">

<?php 

function checkkeys($conn,$numero){
	$sql = "SELECT * FROM `patients`";
	$rslt = mysqli_query($conn,$sql);
    
	while($row = mysqli_fetch_assoc($rslt)){
		if($row['numéro'] == $numero){
			$numéroExists = true;
		break;
		}else{
			$numéroExists = false;
		}
	}
	return $numéroExists;

}

function Numéro($conn){
	$keyLength = 4;
	$str = "1234567890";
	$numero = substr(str_shuffle($str), 0, $keyLength);
	 
	$checkkey = checkkeys($conn,$numero);
	while($checkkey == true){
		$numero = substr(str_shuffle($str), 0, $keyLength);
		$checkkey = checkkeys($conn, $numero);

	}
	return $numero;
	 
	
}

?>
	
<div class="form-group">
<label for="doctorname">
Nom du patient
</label>
<input type="text" name="nomP" class="form-control"  placeholder="Entrez le nom du patient" required="true">
</div>
<div class="form-group">
<label for="fess">
 Localisation
</label>
<input type="text" name="local" class="form-control"  placeholder="localisation" required >
</div>

<div class="form-group">
<label for="fess">
Âge du patient
</label>
<input type="text" name="agP" class="form-control"  placeholder="Entrez l'âge du patient" required="true">
</div>
<div class="form-group">
<label class="block">
Sexe
</label>
<div class="clip-radio radio-primary">
<input type="radio" id="rg-female" name="sP" value="Femme" >
<label for="rg-female">
Femme
</label>
<input type="radio" id="rg-male" name="sP" value="Homme">
<label for="rg-male">
Homme
</label>
</div>
</div>
<div class="form-group">
<label for="fess">
 Téléphone
</label>
<input type="text" name="telP" class="form-control"  placeholder="Téléphone" required="true" maxlength="10" pattern="[0-9]+">
</div>
<div class="form-group">
<label for="naissance">
Date de naissance
</label>
<input name="naiss"  type="date" class="form-control"  placeholder="date de naissance" required="true"></input>
</div>
<div class="form-group">
<label for="fess">
 Diagnostic
</label>
<textarea type="text" name="dP" class="form-control"  placeholder="diagnostic" required="true"></textarea>
</div>
<div class="form-group">
<label for="fess">
 Ordonnance
</label>
<textarea type="text" name="oP" class="form-control"  placeholder="Ordonnance(if any)" required="true"></textarea>
</div>
<div class="form-group">
<label for="fess">
Numéro
</label>
<input type="num" name="numero" class="form-control"  placeholder="numero"  value="<?php echo Numéro($conn);?>" required="true"></input>
</div>



<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Ajouter
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
</div>
</div>
</div>				
</div>
</div>
</div>
			<!-- start: FOOTER -->

			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->

			
			<!-- end: SETTINGS -->
		</div>
        <?php include('includ/footer.php');?>
		
	</body>
</html>
