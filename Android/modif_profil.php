 	<?php 
	  require_once('config.php');
  
   $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
	$adresse= $_POST['adresse'];
		$tel = $_POST['tel'];
        $email = $_POST['email'];
		$login = $_POST['login'];
		$password= $_POST['password']; 
		$id=$_POST['id_user']; 
		
	 
	  		
$sql = "SELECT id_ville  FROM  `ville` WHERE  libelle_ville like '".$_REQUEST['region']."%' ";
    $requete = mysqli_query( $sql, $con )or die( mysqli_error() );
      if( $result = mysqli_fetch_object( $requete ) )
  {
     $id_s =($result->id_ville) ;
	 }
	  
	 $sql2=mysqli_query("UPDATE   `client` SET  
	  
`nom_client` =  '$nom',
`prenom_client` =  '$prenom',
`adresse_client` =  '$adresse',
`tel_client` =  '$tel',
`email_client` =  '$email',
`login` =  '$login',

`password` =  '$password'


WHERE   `id_client` = '$id'");
	 
	 
	 
	 
	  if ($sql2)
	  print(json_encode("Ok"));
	  else 
	  print (json_encode("Error"));
	  //mysql_close();
	?>