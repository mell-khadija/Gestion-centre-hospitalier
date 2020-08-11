<?php
include('../conection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo 'Your Data is Deleted';
        header('Location: registre.php'); 
    }
    else
    {
        echo 'Your Data is NOT DELETED';       
        header('Location: registre.php'); 
    }    
}
?>