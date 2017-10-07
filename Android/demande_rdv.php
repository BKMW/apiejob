s<?php 
 require_once('config.php');
//retrieve the data 

        $date = $_POST['date'];
		$heure = $_POST['heure'];
		$message = $_POST['message'];
        $id_user = $_POST['id_user'];
		$id_service= $_POST['id_service'];
	
		
		

  
	

$sql ="INSERT INTO `demande_rendez_vous` (`message`, `date_envoi_rdv`, `heure`, `date`, `id_visiteur`, `id_client`)

 VALUES ('$message',now(), '$heure', '$date', '$id_user', '$id_service');";




if (!mysqli_query($sql,$con)) 
{ 
die('Error: ' . mysqli_error()); 
} 
else 
{ 
echo 1; 
} 



?>
