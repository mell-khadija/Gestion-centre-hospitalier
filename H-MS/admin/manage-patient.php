<?php
include('includ/conection.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Gérer Les Patients</title>
</head>
<body>
<?php  include("includ/base.php")?>
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
              <th> Nom PATIENT</th>
              <th >Telephone PATIENT</th>
              <th >SEXE PATIENT</th>
              <th >NUMERO</th>
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
            <td><?php  echo $row['telPatient']; ?></td>
            <td><?php  echo $row['sexePatient']; ?></td>
            <td><?php  echo $row['numéro']; ?></td>
            
            
           
           
            <td>
                <form action="edit-patient.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="delet-patient.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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
<?php  include("../footer.php") ?>
<!-- /.container-fluid -->


</body>
</html>
