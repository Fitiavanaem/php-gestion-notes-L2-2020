<?php 
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

if (isset($_POST['modifier'])) {


	 $N_Inscription=$_POST['N_Inscription'];
     $nom=$_POST['nom'];
	 $adresse=$_POST['adresse'];
	 $sexe=$_POST['sexe'];
	 $niveau=$_POST['niveau'];
	 $annee=$_POST['annee'];

	 if ($N_Inscription==""  || $nom=="" || $adresse=="" || $sexe=="" || $niveau=="" || $annee=="") {
	  header("location:Etudiant.php");
	 }else{
	 $sql="UPDATE etudiant  SET N_Inscription='$N_Inscription',nom='$nom',adresse='$adresse',sexe='$sexe',niveau='$niveau',annee='$annee' WHERE N_Inscription='$N_Inscription'";
	 mysqli_query($hbd,$sql);
	 header("location:Etudiant.php");
}
}
 ?>