
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des notes</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css"> -->
</head>
<body>
    <?php 
        if (isset($_GET['modification'],$_GET['update'])) {

     	$N_Inscription=$_GET['modification'];
     	$codemat=$_GET['update'];

     	$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

     $sql="SELECT * FROM note WHERE N_Inscription='$N_Inscription' AND codemat='$codemat'";
     $query=mysqli_query($hbd,$sql);
     $respond=mysqli_fetch_array($query);
 
     ?>
     <h2>Modification une etudiant</h2>
     <form method="POST" action="modifNot.php" >

     	<input type="text" name="N_Inscription" placeholder="Votre N° Inscription" value="<?php echo $N_Inscription; ?>" readonly><br>
		<input type="text" name="codemat" placeholder="Votre codemat" value="<?php echo $codemat;  ?>" readonly><br>
		<input type="text" name="note" placeholder="Votre note" value="<?php echo $respond['note'];?>"><br>
		<button name="modifier">Modifier</button>
     	
     </form>
     <?php 

     }else{
      ?>
    <h2>Ajout  une etudiant</h2>
	<form method="POST" action="ajoutNot.php">
		<input type="text" name="N_Inscription" placeholder="Votre N° Inscription"><br>
		<input type="text" name="codemat" placeholder="Votre codemat"><br>
		<input type="text" name="note" placeholder="note"><br>
		<button name="ajout">Ajouter</button>
		
	</form>
	<?php 
	}
	 ?>

	<table class="table">
		<thead>
			<tr>
				<th>N°Inscription</th>
				<th>Codemat</th>
				<th>Note</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
		</thead>
		<tbody>

			<?php 

			$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
			$sql="SELECT * FROM note ";
			$query=mysqli_query($hbd,$sql);
			while($result=mysqli_fetch_array($query)){


			 ?>
			<tr>
				<td><?php echo $result['N_Inscription']; ?></td>
				<td><?php echo $result['codemat']; ?></td>
				<td><?php echo $result['note']; ?></td>
		
				<td><a href="Note.php?modification=<?php echo $result['N_Inscription']; ?>&update=<?php echo $result['codemat']; ?>">Modifier</a></td>
				<td><a href="supprNot.php?supprimer=<?php echo $result['N_Inscription']; ?>">Supprimer</a></td>
			</tr>
			<?php 
			}
			 ?>

		</tbody>
	</table>

</body>
</html>