<?php
include('includ/conection.php');
if(!empty($_POST["spécialisationid"])) 
{

 $sql=mysqli_query($conn,"select nome,prenom,id from users where spécialisation='".$_POST['spécialisationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['nome']); ?> </br> <?php echo htmlentities($row['prenom']); ?></option>
  <?php
}
}




?>