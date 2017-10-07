<?php
  require_once('config.php');
  // recuperation des variable envoyée par android ( qui sont saisie par le client ) 
$categorie=$_POST['categorie'];
 $ville=$_POST['ville'];
 
  $sql="select * from client,categorie,ville,region_service where region_service.id_ville=ville.id_ville and client.id_region=region_service.id_region and client.id_categorie=categorie.id_categorie and 
  client.id_ville=ville.id_ville
   and libelle_categorie='$categorie' and libelle_ville='$ville' ";

$result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
    $output[]=$row;
  
  print(json_encode($output)); // encoder le resultatt sous la format JSON ( JAVA SCRIPT OBJECT NOTATION ) 
 // mysql_close();
?>