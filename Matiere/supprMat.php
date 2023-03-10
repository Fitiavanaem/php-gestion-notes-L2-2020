<?php 
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
 
 if (isset($_GET['supprimer'])){
 	$codemat=$_GET['supprimer'];

 	$sql="DELETE FROM matiere WHERE codemat='$codemat'";
 	mysqli_query($hbd,$sql);
 	header("location:Matiere.php");
 }

 ?>