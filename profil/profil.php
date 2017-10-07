<?php
  mysql_connect("localhost","root",""); //
  mysql_select_db("application_bd");
  mysql_query("SET NAMES 'utf8'"); 
  // recuperation des variable envoyée par android ( qui sont saisie par le client ) 
$id_c=$_REQUEST['id_c'];

 
  $sql=mysql_query("select * from client where id_client='$id_c' ");

  while($row=mysql_fetch_assoc($sql))
  $output[]=$row;
  
  print(json_encode($output)); // encoder le resultatt sous la format JSON ( JAVA SCRIPT OBJECT NOTATION ) 
 // mysql_close();
?>