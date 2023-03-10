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
  
if (isset($_POST['ajout'])) {

 $N_Inscription=$_POST['N_Inscription'];
 $codemat=$_POST['codemat'];
 $note=$_POST['note'];

if($N_Inscription=="" || $codemat=="" || $note==""){

       echo'<div>Veuillez remplir les zones de texte s\'il vous plaît!</div><div><a href="Note.php">Retourner</a></div> ';

 }else{
 $sql="INSERT INTO note(N_Inscription,codemat,note) VALUES('$N_Inscription','$codemat','$note')";
 mysqli_query($hdb,$sql);
 header("location:Note.php");
}
}
 ?>
 </body>
</html>