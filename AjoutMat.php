<!DOCTYPE html>
<html>
<head>
	<title>ERROR</title>
	<meta charset="utf-8">
	<style>
	body{
		background-color:#f2f2f2; 
	}
		a{
			color:white; 
           	padding: 10px;
	        background-color:#3366cc;
	        font-size: 20px;
	        cursor: pointer;
	        width:200px;
	        text-decoration:none;
		}
		div{
			text-align: center;
			font-size: 52px;
			color: black;
			margin-top: 40px;
			border-radius: 12px;
			
		}
	</style>
</head>
<body>


<?php 
$hdb=mysqli_connect("localhost","root","","gestion_des_notes");
  
if (isset($_POST['ajout'])) {

 $codemat=$_POST['codemat'];
 $libelle=$_POST['libelle'];
 $coef=$_POST['coef'];
 
if($codemat=="" || $libelle=="" || $coef==""){

       echo'<div>Veuillez remplir les zones de texte s\'il vous plaît!</div><div><a href="Matiere.php">Retourner</a></div> ';
	// header("location:Matiere.php");

 }else{

 $sql="INSERT INTO matiere(codemat,libelle,coef) VALUES('$codemat','$libelle','$coef')";
 mysqli_query($hdb,$sql);
 header("location:Matiere.php");
}
}
 ?>
 </body>
</html>