<?php
class admin{
	public $id_admin;
	public $nom_admin;
	public $login;
	public $password;
	
	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
		  $this->id_admin=func_get_arg(0);
      
         break;
		 case 2:
         //un seul paramètre passé
		  $this->id_admin=func_get_arg(0);
         $this->nom_admin=func_get_arg(1);
         break;
      case 3:
         //deux paramètres passés
		  $this->id_admin=func_get_arg(0);
         $this->nom_admin=func_get_arg(1);
         $this->login=func_get_arg(2);
         break;
		 case 4:
         //deux paramètres passés
		  $this->id_admin=func_get_arg(0);
         $this->nom_admin=func_get_arg(1);
         $this->login=func_get_arg(2);
		 $this->password=func_get_arg(3);
         break; 
		 
		 
        
      default:
   }
}


function liste_admin2($login,$password)                                                                                                                                  
{
require_once('config.php');


$query= "SELECT count(*)as ad FROM admin WHERE login='$login' AND password='$password'";

$result=$mysqli->query($query);
return $result;
$mysqli->close();
}
}




?>
