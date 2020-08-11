<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['login']);
    header('Location: index.php');
}

?>

$num = mysqli_fetch_array($res);
  if($num['telPatient'] == $telPatient && $num['numéro'] == $numéro){
     header("location:patient.php");
   
  }else{
    echo 'Failed to login';

  }


  $num = mysql_num_rows($res);
  if($num == 1)
  {
    echo 'login succes';
    header("location:patient.php");
   
  }else
  {
    echo 'Failed to login';
  }
}