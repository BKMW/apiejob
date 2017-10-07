<?php
class msgcontact_admin_client{
	public $id_msgclient;
	public $sujet;
	public $msg;
    public $date_envoi;
	public $id_client;
	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_msgclient=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_msgclient=func_get_arg(0);
		$this->sujet=func_get_arg(1);
	
        break; 
         
         case 3:
         //deux paramètres passés 
		$this->id_msgclient=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		    case 4:
         //deux paramètres passés  
			$this->id_msgclient=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		$this->date_envoi=func_get_arg(3);
		    case 5:
         //deux paramètres passés
		 $this->id_msgclient=func_get_arg(0);
		$this->sujet=func_get_arg(1);
		$this->msg=func_get_arg(2);
		$this->date_envoi=func_get_arg(3);
		$this->id_client=func_get_arg(4);
         default:
    }
   
}










function liste_message_contact_client()
{
require_once('config.php');

$query='select * from msgcontact_admin_client,client where msgcontact_admin_client.id_client=client.id_client';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}
function supprimer_msgcontact_admin_client($id)
{

require_once('config.php');




$req="delete FROM msgcontact_admin_client WHERE id_msgclient=$id";
$mysqli->query($req);
$mysqli->close();
}

}

?>
