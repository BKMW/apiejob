<?php
 require_once('config.php');
  // recuperation des variable envoyée par android ( qui sont saisie par le client ) 
$id_c=$_REQUEST['id_user'];

 
  $sql="select * from client where id_client='$id_c' ";

  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  $output[]=$row;
  
  print(json_encode($output)); // encoder le resultatt sous la format JSON ( JAVA SCRIPT OBJECT NOTATION ) 
 // mysql_close();
?>