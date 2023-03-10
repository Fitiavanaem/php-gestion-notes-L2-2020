<?php
//connexion a la base de donnée
$bdd = new PDO("mysql:host=localhost;dbname=gestion_des_notes", "root" , "");

$ecrire = fopen('pret.txt',"w");

$requete = $bdd->query("SELECT * FROM etudiant");
//execution de la requete
$reponse= $requete->execute();
$resultat = $requete->fetchAll();
// $retour = "\n";
foreach ($resultat as $cle ) {
  $data = $cle['N_Inscription'].';'.$cle['nom'].';'.$cle['adresse'].';'.$cle['sexe'].';'.$cle['niveau'].';'.$cle['annee'].$retour ;
 echo $data;

 $ecrire = fopen('pret.txt',"a+");
 fputs($ecrire , $data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/liste_pret.css">
  <title>Document</title>
</head>
<body>
         <a href="design.php">Convertir en PDF</a>
</body>
</html>