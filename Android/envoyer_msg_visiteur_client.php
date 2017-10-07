<?php 
 require_once('config.php');
//retrieve the data 

        $sujet= $_POST['sujet'];
		 $msg = $_POST['commentaire'];
		$id_visiteur= $_POST['id_visiteur'];
        $id_client= $_POST['id_client'];
	

$sql ="INSERT INTO `msgcontact_client_visiteur` (`id_msgcontact_c_v`,`date_envoi`, `sujet`, `message`,`id_client`,`id_visiteur`)

 VALUES ('', now(), '$sujet', '$msg','$id_client', '$id_visiteur');";




if (!mysqli_query($sql,$con)) 
{ 
die('Error: ' . mysqli_error()); 
} 
else 
{ 
echo 1; 
} 


?>
