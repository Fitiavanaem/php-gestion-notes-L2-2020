
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
			
		    <li class="nav-item"><a class="nav-link" href="Etudiant.php">Etudiant</a></li>
	        <li class="nav-item"><a class="nav-link" href="Matiere.php">Matière</a></li>
            <li class="nav-item"><a class="navbar-brand" href="Note.php">Notes</a></li>
            <li class="nav-item"><a class="nav-link" href="moyenne.php">Moyenne</a></li>
            <li class="nav-item"><a class="nav-link" href="classement.php">Resultat d'examen</a></li>
            <li class="nav-item"><a class="nav-link" href="histogramme.php">Histogramme</a></li>
		</ul>
		<div id="barRecherche">
			<form class="form-inline" action="">
	        <input class="form-control mr-sm-2"  id="inputRecherche" type="text" placeholder="Recherche">
	       <!--  <button class="btn btn-success" type="submit">Recherche</button> -->
	        </form>
	    </div>
	     <ul class="navbar-nav">
	   <!--  <li class="nav-item"><a class="nav-link" href="PDF/fichier.php">Generer PDF</a></li> -->
	    <li class="nav-item"><a onclick="return confirm('Voulez-vous vraiment quitter?')" class="nav-link" href="index.php">Quitter</a></li>
	    </ul>
	</nav>
		<br>

    <?php 
        if (isset($_GET['modification'],$_GET['update'])) {

     	$N_Inscription=$_GET['modification'];
     	$codemat=$_GET['update'];

     	$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

     $sql="SELECT * FROM note WHERE N_Inscription='$N_Inscription' AND codemat='$codemat'";
     $query=mysqli_query($hbd,$sql);
     $respond=mysqli_fetch_array($query);
 
     ?>

     <div class="div1">
	     <h2>Modification d'une note</h2>
	     <form method="POST" action="modifNot.php" >

	     	<input type="text" class="form-control" name="N_Inscription" placeholder="Votre N° Inscription" value="<?php echo $N_Inscription; ?>"><br>
			<input type="text" class="form-control" name="codemat" placeholder="Entrer le codemat" value="<?php echo $codemat;  ?>" ><br>
			<input type="text" class="form-control" name="note" placeholder="Note correspondante" value="<?php echo $respond['note'];?>"><br>
			<button name="modifier" class="btn btn-primary btn-lg btn-block">Modifier</button>
	     	
	     </form>
     </div>
     <?php 

     }else{
      ?>
  <div class="div1">
	    <h2>Ajout d'une note</h2>
		<form method="POST" action="ajoutNot.php">
			<input type="text" class="form-control" name="N_Inscription" placeholder="Votre N° Inscription"><br>
			<input type="text" class="form-control" name="codemat" placeholder="Entrer le codemat"><br>
			<input type="text" class="form-control" name="note" placeholder="Note correspondante"><br>
			<button name="ajout" class="btn btn-primary btn-lg btn-block">Ajouter</button>
			
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
		
				<td><a href="Note.php?modification=<?php echo $result['N_Inscription']; ?>&update=<?php echo $result['codemat']; ?>" class="btn btn-danger">Modifier</a></td>
				<td><a onclick="return confirm('Voulez-vous vraiment supprimer cette ligne?')" href="supprNot.php?supprimer=<?php echo $result['N_Inscription']; ?>" class="btn btn-primary">Supprimer</a></td>
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