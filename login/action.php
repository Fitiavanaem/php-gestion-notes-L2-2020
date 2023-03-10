<?php 

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";     
$basededonnees = "login";   

$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);
if (!$connexion) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nom_utilisateur = $_POST["user"];
    $mot_de_passe = $_POST["password"];


    $nom_utilisateur = mysqli_real_escape_string($connexion, $nom_utilisateur);
    $mot_de_passe = mysqli_real_escape_string($connexion, $mot_de_passe);


    $requete = "SELECT * FROM user WHERE user='$nom_utilisateur' AND password='$mot_de_passe'";

    $resultat = mysqli_query($connexion, $requete);

    if (mysqli_num_rows($resultat) == 1) {

		header("location:../Etudiant.php");
    } else {
		header("location:../index.php");
    }
}
 ?>