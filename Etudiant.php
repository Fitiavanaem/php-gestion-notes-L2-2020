
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des notes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css">
	<script src="bootstrap-4.3.1-dist/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.3.1-dist/bootstrap.bundle.js"></script>
    <script src="bootstrap-4.3.1-dist/bootstrap.min.js"></script>
    <script src="bootstrap-4.3.1-dist/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
</head>
<body>

  


	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

		<ul class="navbar-nav">
		  <li class="nav-item"><a class="navbar-brand" href="Etudiant.php">Etudiant</a></li>
	      <li class="nav-item"><a class="nav-link" href="Matiere.php">Matière</a></li>
          <li class="nav-item"><a class="nav-link" href="Note.php">Notes</a></li>
          <li class="nav-item"><a class="nav-link" href="moyenne.php">Moyenne</a></li>
          <li class="nav-item"><a class="nav-link" href="classement.php">Resultat d'examen</a></li>
          <li class="nav-item"><a class="nav-link" href="histogramme.php">Histogramme</a></li>
		</ul>
		<div id="barRecherche">
			<form class="form-inline" action="">
	        <input class="form-control mr-sm-2"  id="inputRecherche" type="text" placeholder="Recherche">
	        <!-- <button class="btn btn-success" type="submit">Recherche</button> -->
	        </form>
	    </div>
	    <ul class="navbar-nav">
	    <!-- <li class="nav-item"><a class="nav-link" href="pdfEntreprise.php">Generer PDF</a></li> -->
	    <li class="nav-item"><a onclick="return confirm('Voulez-vous vraiment quitter?')" class="nav-link" href="index.php">Quitter</a></li>
	    </ul>
	</nav>
		<br>
  
    <?php 
        if (isset($_GET['modification'])) {

     	$N_Inscription=$_GET['modification'];
     
     	$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

     $sql="SELECT * FROM etudiant WHERE N_Inscription='$N_Inscription'";
     $query=mysqli_query($hbd,$sql);
     $respond=mysqli_fetch_assoc($query);
 
     ?>
  <div class="div1">
     <h2>Modification d'un étudiant</h2>

     <form method="POST" action="modifEtud.php" >
     	<div class="form-group">
	     	<input type="text" class="form-control" name="N_Inscription" placeholder="Votre N° Inscription" value="<?php echo $N_Inscription; ?>"><br>
			<input type="text" class="form-control" name="nom" placeholder="Votre Nom" value="<?php echo $respond['nom'];  ?>"><br>
			<input type="text" class="form-control" name="adresse" placeholder="Votre adresse" value="<?php echo $respond['adresse'];?>"><br>
			<input type="text" class="form-control" name="sexe" placeholder="Homme ou Femme" value="<?php echo $respond['sexe'];?>"><br>
			
			<input type="text" class="form-control" name="niveau" placeholder="Votre niveau" value="<?php echo $respond['niveau'];?>"><br>
			
			<input type="text" class="form-control" name="annee" placeholder="Année" value="<?php echo $respond['annee']; ?>"><br>
			
			<button name="modifier" class="btn btn-primary btn-lg btn-block">Modifier</button>
		</div>
     	
     </form>
  </div>
     <?php 

     }else{
      ?>
 <div class="div1">
    <h2>Ajout  d'un étudiant</h2>
	<form method="POST" action="ajoutEtud.php">
		<div class="form-group">
			<input type="text" class="form-control" name="N_Inscription" placeholder="Votre N° Inscription"><br>
			<input type="text" class="form-control" name="nom" placeholder="Votre Nom"><br>
			<input type="text" class="form-control" name="adresse" placeholder="Votre adresse"><br>
			<input type="text" class="form-control" name="sexe" placeholder="Homme ou Femme"><br>
			<input type="text" class="form-control" name="niveau" placeholder="Votre niveau"><br>
			<input type="text" class="form-control" name="annee" placeholder="Année: 20..."><br>
			

			<button name="ajout" id="modal_button" class="btn btn-primary btn-lg btn-block">Ajouter</button>
		</div>
	</form>
</div>
	<?php 
	}
	 ?>
<div class="div2">
	<table class="table table-hover" id="datatable">
		<thead class="thead-light">
			<tr>
				<th>N°Inscription</th>
				<th>Nom</th>
				<th>Adresse</th>
				<th>Sexe</th>
				<th>Niveau</th>
				<th>Année</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
		</thead>
		<tbody>

			<?php 

			$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
			$sql="SELECT * FROM etudiant ";
			$query=mysqli_query($hbd,$sql);
			while($result=mysqli_fetch_array($query)){


			 ?>
			<tr>
				<td><?php echo $result['N_Inscription']; ?></td>
				<td><?php echo $result['nom']; ?></td>
				<td><?php echo $result['adresse']; ?></td>
				<td><?php echo $result['sexe']; ?></td>
				<td><?php echo $result['niveau']; ?></td>
				<td><?php echo $result['annee']; ?></td>
				<td><a href="Etudiant.php?modification=<?php echo $result['N_Inscription']; ?>" class="btn btn-danger">Modifier</a></td>
				<td><a onclick="return confirm('Voulez-vous vraiment supprimer cette ligne?')" href="supprEtud.php?supprimer=<?php echo $result['N_Inscription']; ?>" class="btn btn-primary">Supprimer</a></td>
			</tr>
			<?php 
			}
			 ?>

		</tbody>
	</table>
	<script>
$(document).ready(function(){
  $("#inputRecherche").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#datatable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>

</body>
</html>