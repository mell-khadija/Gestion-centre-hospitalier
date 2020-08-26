<?php
include("conection.php");
 session_start();
 

if(isset($_POST['telPatient'])){
  include("conection.php");
  $telP = $_POST['telPatient'];
  $numP = $_POST['numéro'];

  $sql = "SELECT * FROM patients WHERE telPatient=? AND numéro=? ";
  $res = mysqli_query($conn, $sql);
  $num = mysqli_fetch_array($res);
  if($num['telPatient'] == $telPatient && $num['numéro'] == $numéro){
     header("location:patient/dashboard.php");
   
  }else{
    echo 'Failed to login';

  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-muted">
<a href="index.php" class="navbar-brand"><img src='images/logo-hopita.jpg' class='img-responsive img-logo' style="height: 150px; margin-top: -8px;" /></a> 
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 bg-light mt-5 px-0">
<h3 class="text-center text-light bg-warning p-3">se connecter en tant que patient</h3>
<form  method="post" class="p-4">
<div  class="form-group">
<input type="telPatient" name="telPatient" class="form-control form-control-lg" placeholder="Téléphone" required>
<br>
 <div  class="form-group">
 <input type="numéro" name="numéro" class="form-control form-control-lg" placeholder="Numéro" required>
</div>


<div class="form-group">
<input  type="submit" name="connecter" class="btn btn-warning btn-block" value="Se connecter"> 
</div>
<!-- <h5 class="text-danger text-center">?<= $msg; ?></h5> -->
</form>
</div>
</div>
</div>
</body>
</html>