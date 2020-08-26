<?php 
include ("conection.php"); 
session_start();

 $_msg="";

 if(isset($_POST['login'])){
     $email = $_POST['email'];
     $password = $_POST['password'];
    //  $password = sha1[$password];
     $status = $_POST['status'];
     $sql = "SELECT * FROM users WHERE email=? AND password=? AND status=?";
     $stmt=$conn->prepare($sql);
     $stmt->bind_param("sss", $email,$password,$status);
     $stmt->execute();
     $result = $stmt->get_result();
     $row = $result->fetch_assoc();

     session_regenerate_id();
     $_SESSION['email'] = $row['email'];
     $_SESSION['role'] = $row['status'];
     session_write_close();

     if($result->num_rows==1 && $_SESSION['role']=="admin"){
         header("location:admin/dashboard.php");

     }
     else if($result->num_rows==1 && $_SESSION['role']=="doctor"){
        header("location:doctor/dashboard.php");
        
    }
    
    else{
        $msg = "email or password is incorrect!";
    }


 }



?> 




