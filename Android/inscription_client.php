<?php 
 require_once('config.php');
//retrieve the data 

        $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		$tel = $_POST['tel'];
		$password= $_POST['password']; 
	/*$categorie=$_REQUEST['categorie'];
    $ville=$_REQUEST['ville'];
    $region=$_REQUEST['region'];
    
	
$sql = "SELECT id_categorie FROM  `categorie` WHERE  libelle_categorie = '$categorie';";
    $result = mysqli_query($con,$sql);
       $row = mysqli_fetch_assoc($result);
  
     $id1 =$row["id_categorie"];

	 		
$sql = "SELECT id_ville FROM  `ville` WHERE  libelle_ville = '$ville';";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
  
     $id2 =$row["id_ville"];
	 
$sql = "SELECT id_region FROM  `region_service` WHERE  libelle_region = '$region';";
    $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);
  
     $id3 =$row["id_region"];
	 
    */

$sql ="INSERT INTO `client` (`nom_client`, `prenom_client`, 'tel',`password`,`etat`)VALUES ('$nom', '$prenom','$tel','$password','1');";

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
