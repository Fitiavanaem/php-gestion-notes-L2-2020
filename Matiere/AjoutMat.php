<?php 
$hdb=mysqli_connect("localhost","root","","gestion_des_notes");
  
if (isset($_POST['ajout'])) {

 $codemat=$_POST['codemat'];
 $libelle=$_POST['libelle'];
 $coef=$_POST['coef'];
 


 $sql="INSERT INTO matiere(codemat,libelle,coef) VALUES('$codemat','$libelle','$coef')";
 mysqli_query($hdb,$sql);
 header("location:Matiere.php");

}
 ?>