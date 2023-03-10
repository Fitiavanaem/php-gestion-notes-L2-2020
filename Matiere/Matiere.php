
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des notes</title>
	<!-- <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css"> -->
</head>
<body>
    <?php 
        if (isset($_GET['modification'])) {

     	$codemat=$_GET['modification'];

     	$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

     $sql="SELECT * FROM matiere WHERE codemat='$codemat'";
     $query=mysqli_query($hbd,$sql);
     $respond=mysqli_fetch_assoc($query);
 
     ?>
     <h2>Modification une etudiant</h2>
     <form method="POST" action="modifMat.php" >
     	<input type="text" name="codemat" placeholder="Votre codemat" value="<?php echo $codemat; ?>" readonly><br>
		<input type="text" name="libelle" placeholder="Votre libelle" value="<?php echo  $respond['libelle'];  ?>"><br>
		<input type="text" name="coef" placeholder="Votre coefficient" value="<?php echo $respond['coef'];?>"><br>
		<button name="modifier">Modifier</button>
     	
     </form>
     <?php 

     }else{
      ?>
    <h2>Ajout  une etudiant</h2>
	<form method="POST" action="ajoutMat.php">
		<input type="text" name="codemat" placeholder="Votre codemat" ><br>
		<input type="text" name="libelle" placeholder="Votre libelle"><br>
		<input type="text" name="coef" placeholder="Votre coefficient"><br>
		
		<button name="ajout">Ajouter</button>
		
	</form>
	<?php 
	}
	 ?>

	<table class="table">
		<thead>
			<tr>
				<th>Codemat</th>
				<th>Libelle</th>
				<th>Coefficient</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
		</thead>
		<tbody>

			<?php 

			$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
			$sql="SELECT * FROM matiere ";
			$query=mysqli_query($hbd,$sql);
			while($result=mysqli_fetch_array($query)){


			 ?>
			<tr>
				<td><?php echo $result['codemat']; ?></td>
				<td><?php echo $result['libelle']; ?></td>
				<td><?php echo $result['coef']; ?></td>
				<td><a href="Matiere.php?modification=<?php echo $result['codemat']; ?>">Modifier</a></td>
				<td><a href="supprMat.php?supprimer=<?php echo $result['codemat']; ?>">Supprimer</a></td>
			</tr>
			<?php 
			}
			 ?>

		</tbody>
	</table>

</body>
</html>