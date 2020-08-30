<?php
include('includ/conection.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecin | Gérer Les Patient</title>
</head>
<body>
<?php  include("includ/basepa.php")?>
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Modification</h6>
    <!-- view Page  -->
  </div>
  <div class="card-body">

    <div class="table-responsive">
    <?php

        $query = "SELECT * FROM patients";
        $query_run = mysqli_query($conn, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th > ID </th>
              <th > Nom </th>
              <th > Localisation</th>
              <th >Age </th>
              <th >Sexe</th>
              <th >Téléphone</th>
              <th >Date de naissance</th>
              <th >Numéro</th>
              <th >EDIT</th>
              <th >DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['nomPatient']; ?></td>
            <td><?php  echo $row['localisation']; ?></td>
            <td><?php  echo $row['agePatient']; ?></td>
            <td><?php  echo $row['sexePatient']; ?></td>
            <td><?php  echo $row['telPatient']; ?></td>
            <td><?php  echo $row['date de naissance']; ?></td>
            <td><?php  echo $row['numéro']; ?></td>
           
           
            <td>
                <form action="edit-doctor.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="delet-doctor.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
            <td>
                <form action="delet-doctor.php" method="post">
                <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>
                 
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
   
    </div>
  </div>
</div>

</div>
<?php  include("includ/footer.php") ?>
<!-- /.container-fluid -->


</body>
</html>
