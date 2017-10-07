<?php
class msgcontact_admin_visiteur{
	public $id_msgvisiteur;
	public $sujet;
	public $msg;
    public $date_envoi;
	public $id_visiteur;
	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_msgvisiteur=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_msgvisiteur=func_get_arg(0);
		$this->sujet=func_get_arg(1);
	
        break; 
         
         case 3:
         //deux paramètres passés 
		$this->id_msgvisiteur=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		    case 4:
         //deux paramètres passés  
			$this->id_msgvisiteur=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		$this->date_envoi=func_get_arg(3);
		    case 5:
         //deux paramètres passés
		 $this->id_msgvisiteur=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		$this->date_envoi=func_get_arg(3);
		$this->id_visiteur=func_get_arg(4);
         default:
    }
   
}










function liste_msgcontact_visiteur()
{
require_once('config.php');

$query='select * from msgcontact_admin_visiteur,visiteur where msgcontact_admin_visiteur.id_visiteur=visiteur.id_visiteur';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}


function liste_reponse()
{
require_once('config.php');
$id=$_GET['id'];

$query="select * from msgcontact_admin_visiteur,visiteur where msgcontact_admin_visiteur.id_visiteur=visiteur.id_visiteur and id_msgvisiteur='$id'";
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}


function supprimer_message($id)
{

require_once('config.php');




$req="delete FROM msgcontact_admin_visiteur WHERE id_msgvisiteur=$id";
$mysqli->query($req);
$mysqli->close();
}
}

?>
