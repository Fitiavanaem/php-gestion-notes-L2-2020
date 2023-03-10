<!DOCTYPE html>
<html>
<head>
	<title>Proclamation</title>
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
            <li class="nav-item"><a class="nav-link" href="Note.php">Notes</a></li>
            <li class="nav-item"><a class="nav-link" href="moyenne.php">Moyenne</a></li>
            <li class="nav-item"><a class="navbar-brand" href="classement.php">Resultat d'examen</a></li>
            <li class="nav-item"><a class="nav-link" href="histogramme.php">Histogramme</a></li>
		</ul>
		<!-- <div id="barRecherche">
			<form class="form-inline" action="">
	        <input class="form-control mr-sm-2"  id="inputRecherche" type="text" placeholder="Search">
	        <button class="btn btn-success" type="submit">Search</button>
	        </form>
	    </div> -->
	     <ul class="navbar-nav">
		    <!-- <li class="nav-item"><a class="nav-link" href="PDF/fichier.php">Generer PDF</a></li> -->
		    <li class="nav-item"><a onclick="return confirm('Voulez-vous vraiment quitter?')" class="nav-link" href="index.php">Quitter</a></li>
	    </ul>
	</nav>
		<br>

	<div class="div1">

			<form method="POST" action="classement.php">
				<!-- <input type="text" class="form-control" name="niveau" placeholder="Niveau"><br>
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Resultat à chaque niveau" name="submit"> -->


				<select class="form-control" id="sel1" name="niveau">
				        <option>L1</option>
				        <option>L2</option>
				        <option>L3</option>
				        <option>M1</option>
				        <option>M2</option>
				</select><br>
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Resultat à chaque niveau" name="submit">
			</form>
	</div>
	<?php 
    if (isset($_POST['submit'])) {
   
	$niveau=$_POST['niveau'];
	$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

	$sql="select N_Inscription from etudiant where niveau='".$niveau."'";
    $query=mysqli_query($hbd,$sql);
    ?>

 <div class="div2">
    <table class="table table-hover">
 	<thead class="thead-light">
 	
 	 <tr>
 		<th>N°Etudiant</th>
 		<th>NOM</th>
 		<th>MOYENNE</th>
 	
 	 </tr>
 	 	</thead>
 	<tbody>
 		<?php 
    while($reponse=mysqli_fetch_array($query)){
    	$row="SELECT etudiant.N_Inscription,nom,sum(note*coef)/sum(coef) as Moyenne FROM etudiant inner join note on note.N_Inscription=etudiant.N_Inscription inner join matiere on
note.codemat=matiere.codemat where etudiant.N_Inscription='".$reponse['N_Inscription']."' ORDER BY Moyenne DESC";
    $query1=mysqli_query($hbd,$row);
    while ($reponse1=mysqli_fetch_assoc($query1)) {

    
	 ?>
 
       <tr>
	 		<td><?php echo $reponse1['N_Inscription']; ?></td>
	 		<td><?php echo $reponse1['nom']; ?></td>
	 		<td><?php echo $reponse1['Moyenne']; ?></td>
 		</tr>
 		
 	
 
 <?php 
 }
 }
  }
  ?>
  </tbody>
  </table>
 </div>
</body>
</html>