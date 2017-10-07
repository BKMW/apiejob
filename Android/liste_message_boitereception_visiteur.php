<?php
 require_once('config.php');
  // recuperation des variable envoyée par android ( qui sont saisie par le client ) 

$id_visiteur=$_POST['id_user'];
 
  $sql="select * from msgcontact_client_visiteur,reponse_client_service,client where msgcontact_client_visiteur.id_msgcontact_c_v=reponse_client_service.id_msgcontact_c_v and msgcontact_client_visiteur.id_client=client.id_client and  msgcontact_client_visiteur.id_visiteur='$id_visiteur'";

  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  $output[]=$row;
  
  print(json_encode($output)); // encoder le resultatt sous la format JSON ( JAVA SCRIPT OBJECT NOTATION ) 
 // mysql_close();
?>