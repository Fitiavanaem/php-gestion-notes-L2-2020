<?php 
$hdb=mysqli_connect("localhost","root","","gestion_des_notes");
  
if (isset($_POST['ajout'])) {

 $N_Inscription=$_POST['N_Inscription'];
 $codemat=$_POST['codemat'];
 $note=$_POST['note'];

 $sql="INSERT INTO note(N_Inscription,codemat,note) VALUES('$N_Inscription','$codemat','$note')";
 mysqli_query($hdb,$sql);
 header("location:Note.php");

}
 ?>