 	<?php 
	  require_once('config.php');
  
   $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
	  	$adresse= $_POST['adresse'];
		 $email = $_POST['email'];
		$tel = $_POST['tel'];
       $login = $_POST['login'];
		$password= $_POST['password']; 
		$id=$_POST['id_user']; 
		
	  
	
	  		
	  
	 $sql2=mysqli_query("UPDATE   `visiteur` SET  
	  
`nom_visiteur` =  '$nom',
`prenom_visiteur` =  '$prenom',
`adresse_visiteur` =  '$adresse',
`email_visiteur` =  '$email',
`tel_visiteur` =  '$tel',
`login` =  '$login',
`password` =  '$password'


WHERE   `id_visiteur` = '$id'");
	 
	 
	 
	 
	  if ($sql2)
	  print(json_encode("Ok"));
	  else 
	  print (json_encode("Error"));
	  //mysql_close();
	?>