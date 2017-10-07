 	<?php 
	  $con = mysql_connect("localhost","root","");
	   mysql_select_db("services");
  
  
   $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
		$tel = $_POST['tel'];
        $email = $_POST['email'];
		$adresse= $_POST['adresse'];
		
	
		$login = $_POST['login'];
		$password= $_POST['password']; 
		$id=$_POST['id_c']; 
		
	  
	
	  		
$sql = "SELECT id_ville FROM  `ville` WHERE  libelle_ville like '".$_REQUEST['ville']."%' ";
    $requete = mysql_query( $sql, $con )or die( mysql_error() );
      if( $result = mysql_fetch_object( $requete ) )
  {
     $id_r =($result->id_region) ;
	 }
	  
	 $sql2=mysql_query("UPDATE   `client` SET  
	  
`nom` =  '$nom_client',
`prenom` =  '$prenom_client',
`adresse` =  '$adresse_client'
`password` =  '$password',
`telephone` =  '$tel_client',
`email_medecin` =  '$email_client',
`login` =  '$login',
`id_ville` =  '$id_v',

WHERE   `id_client` = '$id'");
	 
	 
	 
	 
	  if ($sql2)
	  print(json_encode("Ok"));
	  else 
	  print (json_encode("Error"));
	  //mysql_close();
	?>