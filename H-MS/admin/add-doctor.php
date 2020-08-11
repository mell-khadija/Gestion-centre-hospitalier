
<?php

session_start();
include("includ/conection.php");




if (isset($_POST['save'])) 

{
    $nom = $_POST['nome'];
    echo  $nom;
    $prenom = $_POST['prenom'];
    echo  $prenom;
    $email = $_POST['email'];
    echo  $email;
    $password = $_POST['password'];
    echo  $password;
    $tel = $_POST['tel'];
    echo  $tel;
    $status = $_POST['status'];
    echo  $status;
    $spécialisation = $_POST['spécialisation'];
    echo  $spécialisation;

    $sql = " INSERT INTO  `users` (`id`, `nome`, `prenom`, `email`, `password`, `tel`, `status`, `Spécialisation`) VALUES 
    ('','$nom', '$prenom', '$email', '$password','$tel', '$status', '$spécialisation') ";

    

    $new = mysqli_query($conn, $sql);
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Ajouter Un Médecin</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- CSS link -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<body>

<?php  include("includ/base.php")?>
  <section class="contenu salarié admin">
    
    <div class="formaddsal">
      <h4 class="addh">Ajouter un Medecin</h4>
      <form  class="addh" method="POST" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nom</label>
            <input name="nome" type="firstname" class="form-control" id="inputname" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Prénom</label>
            <input name="prenom" type="lastname" class="form-control" id="inputname" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="inputPassword4" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Téléphone</label>
            <input name="tel" type="phone" class="form-control" id="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Status</label>
            <select name="status" id="inputState" class="form-control" required>
              <option selected>admin</option>
              <option>doctor</option>
            
            </select>
          </div>
        </div>
        
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="spécialisation">Spécialisation</label>
            <select name="spécialisation" class="form-control" required="true">
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
          
          
          </div>
          
          
        <button type="submit" class="btn btn-primary" name="save">Ajouter</button>
      </form>

    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>
<?php include('../footer.php');?>

</html>

