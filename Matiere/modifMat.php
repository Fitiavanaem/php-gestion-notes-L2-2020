<?php 
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

if (isset($_POST['modifier'])) {


	 $codemat=$_POST['codemat'];
     $libelle=$_POST['libelle'];
	 $coef=$_POST['coef'];

	 $sql="UPDATE matiere SET codemat='$codemat',libelle='$libelle',coef='$coef' WHERE codemat='$codemat'";
	 mysqli_query($hbd,$sql);
	 header("location:Matiere.php");
}
 ?>