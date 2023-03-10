<!DOCTYPE html>
<html>
<head>
	<title>Gestion des notes</title>
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
            <li class="nav-item"><a class="navbar-brand" href="moyenne.php">Moyenne</a></li>
            <li class="nav-item"><a class="nav-link" href="classement.php">Resultat d'examen</a></li>
            <li class="nav-item"><a class="nav-link" href="histogramme.php">Histogramme</a></li>
		</ul>
		<!-- <div id="barRecherche">
			<form class="form-inline" action="">
	        <input class="form-control mr-sm-2"  id="inputRecherche" type="text" placeholder="Search">
	        <button class="btn btn-success" type="submit">Search</button>
	        </form>
	    </div> -->
	     <ul class="navbar-nav">
	   <!--  <li class="nav-item"><a class="nav-link" href="PDF/fichier.php">Generer PDF</a></li> -->
	    <li class="nav-item"><a onclick="return confirm('Voulez-vous vraiment quitter?')" class="nav-link" href="index.php">Quitter</a></li>
	    </ul>
	</nav>
		<br>
		<div class="div1">

			<form method="POST" action="moyenne.php">
				<input type="text" class="form-control" name="etudiant" placeholder="N° Inscription"><br>
				<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Moyenne">
			</form>
       </div>
<!-- <form method="POST" action="moyenne.php">
	<input type="text" name="etudiant"><br>
	<input type="submit" name="submit" value="moyenne">
</form> -->
<?php 
if (isset($_POST['submit'])) {
		$observation="";
		$moyenne=0;
		$affichage=TRUE;
	    $etudiant=$_POST['etudiant'];
        $hbd=mysqli_connect("localhost","root","","gestion_des_notes");
        $sql="SELECT sum(note*coef)/sum(coef) as Moyenne from note inner join etudiant on note.N_Inscription=etudiant.N_Inscription inner join matiere on note.codemat=matiere.codemat where etudiant.N_Inscription='$etudiant'";
        $query=mysqli_query($hbd,$sql);
		   if ($query){

			  		if ($result1=mysqli_fetch_assoc($query)) 
			  		       {
			  				 $moyenne=$result1['Moyenne'];
					  			if($moyenne!==NULL)
					  			{
					  				if ($moyenne>=10){ $observation="ADMIS";  }
							  		else if (($moyenne<10) AND ($moyenne>=7.5)){ $observation= "REDOUBLANT";}  
							  		else {  $observation="EXCLUS"; }
							    } 
							    else {echo ' <h2 style=" font-size:38px; color:black;">LE NUMERO D\'ETUDIANT QUE 
							              VOUS AVEZ SAISIE N\'EXISTE PAS! ou N\'A PAS DE NOTE</h2>'; $affichage=FALSE;
						             }
					        }
			         } 
		   if($affichage){
			  
 ?>

 <div class="div2">
<table class="table table-hover">
	<thead class="thead-light">
		<tr>
			<th>DESIGNATION</th>
			<th>COEFFICIENT</th>
			<th>NOTE</th>
			<th>NOTE PONDEREE</th>
		
	    </tr>
	</thead>
	<tbody>
		<?php 
		// $hbd=mysqli_connect("localhost","root","","gestion_des_notes");
		$sql="SELECT libelle,note,coef,note*coef as notepondere FROM note inner join matiere on note.codemat=matiere.codemat inner join etudiant on note.N_Inscription=etudiant.N_Inscription where etudiant.N_Inscription='".$_POST['etudiant']."'";
		$query=mysqli_query($hbd,$sql);
		while ($result=mysqli_fetch_array($query)){
		 ?>
		 <tr>
		
			<td><?php echo $result['libelle']; ?></td>
			<td><?php echo $result['coef']; ?></td>
			<td><?php echo $result['note']; ?></td>
			<td><?php echo $result['notepondere']; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<!-- <td></td>
			<td></td> -->
			<td colspan="2"></td>
			<td><strong>MOYENNE</strong></td>
			<td><?php echo $moyenne; ?></td>
		</tr>
		<tr> 
			<td colspan="2"></td>
			<td><strong>OBSERVATION</strong></td>
			<td><?php echo $observation; ?></td>
		</tr>
	</tbody>
</table>
</div>

<?php 
  }
 }
 ?>
 </body>
</html>