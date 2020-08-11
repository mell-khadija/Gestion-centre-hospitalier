<?php
     include('../conection.php');
?>
<?php include("../base.php") ?>
<div class="container-fluid">

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
  <title>ADMIN | MODIFIER LES DÉTAILS DU MÉDECIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 
  
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> ADMIN | MODIFIER LES DÉTAILS DU MÉDECIN </h6>
  </div>
  <div class="card-body">
  
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="update.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Nom </label>
                  <input type="text" name="edit_nom" value="<?php echo $row['nome'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label> prenom </label>
                  <input type="text" name="edit_prenom" value="<?php echo $row['prenom'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>email</label>
                  <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                  <label>tel</label>
                  <input type="phone" name="edit_tel" value="<?php echo $row['tel'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Status</label>
                  <input type="" name="edit_type" value="<?php echo $row['status'] ?>" class="form-control" placeholder="">
              </div>
              
              <div class="form-group">
                  <label>Spécialisation</label>
                  <input type="" name="edit_spécialisation" value="<?php echo $row['Spécialisation'] ?>" class="form-control" placeholder="">
              </div>
              
              

              
              <a href="registre.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>
<?php include("../footer.php") ?>
</div>

<!-- /.container-fluid -->



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/main.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>

