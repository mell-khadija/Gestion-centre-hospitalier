<?php
     include('../conection.php');
     if(isset($_POST['updatebtn']))
{
    $id = $_POST['id'];
    $nomp = $_POST['nome'];
    $localisation = $_POST['localisation'];
    $agep = $_POST['agepatient'];
    $sexep = $_POST['sexepatient'];
    $telp = $_POST['telpatient'];
    $datep = $_POST['naiss'];
    $diagnos = $_POST['diagnostic'];
    $ordp = $_POST['ordonnance'];
    $numero = $_POST['numéro'];
    
    $query = "UPDATE `patients` SET `id`='$id',`nomPatient`='$nomp',`localisation`='$localisation',`agePatient`='$agep',`sexePatient`=$sexep',`telPatient`='$telp',`date de naissance`='$datep',`diagnostic`='$digno',`ordonnance`='$ordp',`numéro`='$numero'  WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        echo 'Your Data is Updated';
        header('Location: registre.php'); 
    }
    else
    {
      echo 'Your Data is NOT Updated';
       
        header('Location: registre.php'); 
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

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<?php include("includ/base.php") ?>
<div class="container-fluid">
  
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> ADMIN | MODIFIER LES DÉTAILS DU PATIENTS </h6>
  </div>
  <div class="card-body">
  
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM patients WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    foreach($query_run as $row)
    {
        ?>

          <form method="POST">
                
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Nom </label>
                  <input type="text" name="nome" value="<?php echo $row['nomPatient'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label> Loaclisation</label>
                  <input type="text" name="loclisation" value="<?php echo $row['localisation'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="agepatient" value="<?php echo $row['agePatient'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Sexe</label>
                  <input type="text" name="sexepatient" value="<?php echo $row['sexePatient'] ?>" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                  <label>tel</label>
                  <input type="phone" name="telpatient" value="<?php echo $row['telPatient'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Date De Naissance</label>
                  <input type="date" name="naiss" value="<?php echo $row['date de naissance'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>diagnostic</label>
                  <input type="text" name="diagnostic" value="<?php echo $row['diagnostic'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>ordonnance</label>
                  <input type="text" name="ordonnance" value="<?php echo $row['ordonnance'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Numéro</label>
                  <input type="text" name="numero" value="<?php echo $row['numéro'] ?>" class="form-control" placeholder="">
              </div>
              
              

              
              <a href="manage-patient.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

<?php include("includ/footer.php") ?>


</div>

<!-- /.container-fluid -->




  <!-- Custom scripts for all pages-->
  <script src="js/main.js"></script>

 

</body>
</html>

