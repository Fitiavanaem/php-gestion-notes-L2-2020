

<?php
/*
mysql_connect("localhost","root","" or die(mysql_error()));
mysql_select_db("gestion des presentations des employes") or die(mysql_error());
*/
// try {
//     $strConnection = 'mysql:host=localhost;dbname= gestion_des_notes';
//     $pdo = new PDO ($strConnection, "root", "");
// }
// catch (PDOException $e) {
//     $msg = 'ERREUR PDO dans ' . $e->getMessage();
//     die($msg);
// }
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");
$sql="SELECT  * FROM etudiant";
mysqli_query($hbd,$sql);
?>
