<?php 
 require_once('config.php');


//retrieve the data 

        $sujet= $_POST['sujet'];
		 $msg = $_POST['commentaire'];
		$id_client= $_POST['id_client'];
        
	

$sql ="INSERT INTO `msgcontact_admin_client` (`id_msgclient`, `sujet`, `msg`,`date_envoi`,`id_client`)

 VALUES ('', '$sujet', '$msg', now(), '$id_client');";




if (!mysqli_query($sql,$con)) 
{ 
die('Error: ' . mysqli_error()); 
} 
else 
{ 
echo 1; 
} 


?>
