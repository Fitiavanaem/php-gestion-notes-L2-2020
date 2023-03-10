<?php 
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
 
 if (isset($_GET['supprimer'])){
 	$N_Inscription=$_GET['supprimer'];

 	$sql="DELETE FROM etudiant WHERE N_Inscription='$N_Inscription'";
 	mysqli_query($hbd,$sql);
 	header("location:Etudiant.php");
 }

 ?>