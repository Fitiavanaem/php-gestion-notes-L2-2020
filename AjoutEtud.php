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
			
		}
	</style>
</head>
<body>


<?php 

$hdb=mysqli_connect("localhost","root","","gestion_des_notes");

  
if(isset($_POST['ajout'])){

 $N_Inscription=$_POST['N_Inscription'];
 $nom=$_POST['nom'];
 $adresse=$_POST['adresse'];
 $sexe=$_POST['sexe'];
 $niveau=$_POST['niveau'];
 $annee=$_POST['annee'];

 if($N_Inscription=="" || $nom=="" || $adresse=="" || $sexe=="" || $niveau=="" || $annee==""){


    
    echo '<script type="text/javascript">alert("Veuillez remplir les zones de texte s\'il vous plaît!");
 			
             </script>';



 }else{

 $sql="INSERT INTO etudiant(N_Inscription,nom,adresse,sexe,niveau,annee) VALUES('$N_Inscription','$nom','$adresse','$sexe','$niveau','$annee')";
 mysqli_query($hdb,$sql);
 header("location:Etudiant.php");
}
}

 ?>

</body>
</html>