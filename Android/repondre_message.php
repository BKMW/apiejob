<?php
  require_once('config.php');
  // recuperation des variable envoyée par android ( qui sont saisie par le client ) 
$id_visiteur=$_REQUEST['id_visiteur'];

 
  $sql="select * from msgcontact_client_visiteur,visiteur where msgcontact_client_visiteur.id_visiteur=visiteur.id_visiteur and  visiteur.id_visiteur='$id_visiteur' ";

  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  $output[]=$row;
  
  print(json_encode($output)); // encoder le resultatt sous la format JSON ( JAVA SCRIPT OBJECT NOTATION ) 
 // mysql_close();
?>