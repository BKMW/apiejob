<?php 
 require_once('config.php');
//retrieve the data 

        $sujet= $_POST['sujet'];
		 $msg = $_POST['commentaire'];
		$id_visiteur= $_POST['id_visiteur'];
        
	

$sql ="INSERT INTO `msgcontact_admin_visiteur` (`id_msgvisiteur`, `sujet`, `msg`,`date_envoi`,`id_visiteur`)

 VALUES ('', '$sujet', '$msg', now(), '$id_visiteur');";




if (!mysqli_query($sql,$con)) 
{ 
die('Error: ' . mysqli_error()); 
} 
else 
{ 
echo 1; 
} 


?>
