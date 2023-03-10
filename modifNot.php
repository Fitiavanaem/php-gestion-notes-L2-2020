<?php 
$hbd=mysqli_connect("localhost","root","","gestion_des_notes");

if (isset($_POST['modifier'])) {


	 $N_Inscription=$_POST['N_Inscription'];
     $codemat=$_POST['codemat'];
	 $note=$_POST['note'];

	 if ($N_Inscription==""  || $codemat=="" || $note=="") {
	  header("location:Note.php");
	 }else{

	 $sql="UPDATE note  SET N_Inscription='$N_Inscription',codemat='$codemat',note='$note' WHERE N_Inscription='$N_Inscription' AND codemat='$codemat'";
	 mysqli_query($hbd,$sql);
	 header("location:Note.php");
}
}
 ?>