<?php 
require_once("includ/conection.php");
if(!empty($_POST["nomPatient"])) {
	$email= $_POST["nomPatient"];
$result =mysqli_query($conn,"SELECT nomPtiant FROM patients WHERE nomPatient='$nomP'");
$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
