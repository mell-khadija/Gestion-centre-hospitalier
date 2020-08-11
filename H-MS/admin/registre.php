<?php
include('includ/conection.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Gérer Les Médecins</title>
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

        $query = "SELECT * FROM users";
        $query_run = mysqli_query($conn, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th width="4%"> ID </th>
              <th width="5%"> Nom</th>
              <th width="5%"> prenom</th>
              <th width="8%">Email </th>
              <th width="5%">Telephone</th>
              <th width="5%">Status</th>
              <th width="5%">Spécialisation</th>
              <th width="5%">EDIT</th>
              <th width="6%">DELETE</th>
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
            <td><?php  echo $row['nome']; ?></td>
            <td><?php  echo $row['prenom']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['tel']; ?></td>
            <td><?php  echo $row['status']; ?></td>
            <td><?php  echo $row['Spécialisation']; ?></td>
           
           
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
