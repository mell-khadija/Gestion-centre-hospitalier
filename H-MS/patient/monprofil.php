<?php if(!isset($_SESSION)){
    session_start();
    include('includ/conection.php');
}
?>

<?php include('includ/basep.php'); ?>

<!-- for retriving data -->
				<?php 
							include('includ/conection.php');
							$sql="SELECT * FROM patients where numéro='". $_SESSION["numero"]."'" ;
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$nomePatient=$data[1];
							$localisation=$data[2];
							$agePatient=$data[3];
							$sexePatient=$data[4];
							$telPatient=$data[5];
                            $datena=$data[6];
                            $numéro=$data[7];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div class="login" >
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  value="<?php echo $agePatient; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="tel" name="tel" value="<?php echo $telPatient; ?>" placeholder="tel" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="localisation" name="localisation" value="<?php echo $localisation; ?>" placeholder="localisation" required>
					</label><br><br>
					

					<label>
						Numéro: <input type="numéro" name="numéro" value="<?php echo $numéro; ?>" placeholder="numéro" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('includ/conection.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patients SET name='" .$_POST["name"]. "' ,agePatient='" .$_POST["age"]."' , telPatient='" .$_POST["telP"]. "',localisation='" .$_POST["localisation"]. "', numéro='".$_POST["numéro"]."' WHERE numéro='" .$_SESSION["numéro"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 <?php include('includ/footer.php'); ?>


</body>
</html>
