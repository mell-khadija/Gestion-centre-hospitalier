
<?php
include('connection.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $nom = $_POST['edit_nom'];
    $prenom = $_POST['edit_prenom'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $tel = $_POST['edit_tel'];
    $status = $_POST['edit_type'];
    $spécialisation = $_POST['edit_spécialisation'];
    
    $query = "UPDATE users SET id ='$id', nom ='$nom', prenom ='$prenom', email ='$email',password ='$password', tel ='$tel', status ='$status', spécialisation ='$spécialisation' WHERE id='$id' ";
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
