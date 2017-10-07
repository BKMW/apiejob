<?php
class visiteur{
	public $id_visiteur;
	public $nom_visiteur;
	public $prenom_visiteur;
	public $adresse_visiteur;
	public $tel_visiteur;
	public $email_visteur;
    public $login;
	public $password;

function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_visiteur=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
        break; 
          case 3:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
		$this->prenom_visiteur=func_get_arg(2);
	  
		
        break; 
          case 4:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
		$this->prenom_visiteur=func_get_arg(2);
		$this->adresse_visiteur=func_get_arg(3);
        break; 
          case 5:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
		$this->prenom_visiteur=func_get_arg(2);
		$this->adresse_visiteur=func_get_arg(3);
		$this->tel_visiteur=func_get_arg(4);
		
        break; 
          case 6:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
		$this->prenom_visiteur=func_get_arg(2);
		$this->adresse_visiteur=func_get_arg(3);
		$this->tel_visiteur=func_get_arg(4);
		$this->email_visiteur=func_get_arg(5);
		
		
        break; 
          case 7:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
		$this->prenom_visiteur=func_get_arg(2);
		$this->adresse_visiteur=func_get_arg(3);
		$this->tel_visiteur=func_get_arg(4);
		$this->email_visiteur=func_get_arg(5);
		$this->login_visiteur=func_get_arg(6);
		
        break; 
          case 8:
         //deux paramètres passés
		$this->id_visiteur=func_get_arg(0);
		$this->nom_visiteur=func_get_arg(1);
			$this->prenom_visiteur=func_get_arg(2);
		$this->adresse_visiteur=func_get_arg(3);
		$this->tel_visiteur=func_get_arg(4);
		$this->email_visiteur=func_get_arg(5);
		$this->login_visiteur=func_get_arg(6);
		$this->password_visiteur=func_get_arg(7);
        break; 
        
         
         
		
		    
			
         default:
    }
   
}






function liste_visiteur()
{
require_once('config.php');

$query='select * from visiteur';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function supprimer_visiteur($id)
{

require_once('config.php');




$req="delete FROM visiteur WHERE id_visiteur=$id";
$mysqli->query($req);
$mysqli->close();
}



}

?>
