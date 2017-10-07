<?php 
 require_once('config.php');

//retrieve the data 

        $sujet= $_POST['sujet'];
		 $msg = $_POST['commentaire'];
		$id_visiteur= $_POST['id_visiteur'];
        $id_client= $_POST['id_client'];
	

$sql ="INSERT INTO `reclamation` (`sujet`, `commentaire`,`date_envoi`,`id_visiteur`,`id_client`)

 VALUES ('$sujet', '$msg', now(), '$id_visiteur', '$id_client');";


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
