<?php 
 require_once('config.php');

//retrieve the data 

        $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		$tel = $_POST['tel'];
		$password= $_POST['password']; 
		
		
$sql ="INSERT INTO `visiteur` (`nom_visiteur`, `prenom_visiteur`,`tel_visiteur`,`password`)VALUES ('$nom', '$prenom','$tel' , '$password');";
$result=mysqli_query($con,$sql);


if (!$result) 
{ 
die('Error: ' . mysqli_error()); 
} 
else 
{ 
echo 1; 
} 


?>
