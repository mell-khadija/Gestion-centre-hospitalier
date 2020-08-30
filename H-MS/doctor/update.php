<?php
session_start();

include('includ/conection.php');

if(isset($_POST['submit']))
{
    $nom = $_POST['nome'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $status = $_POST['status'];
    $spécialisation = $_POST['spécialisation'];
$sql=mysqli_query($conn," UPDATE users set nome='$nom',prenom='$prenom',email='$email',tel='$tel',status='$status',spécialisation='$spécialisation' where email='".$_SESSION['email']."'");
if($sql)
{
echo "Doctor Details updated Successfully";

}
}
?>