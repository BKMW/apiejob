
<?php
class client{
	public $id_client;
	public $nom_client;
	public $prenom_client;
    public $adresse_client;
    public $email_client;
    public $tel_client;
    public $login;
    public $password;
    public $id_categorie;
    public $id_ville;
    public $etat;

	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_client=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
        break; 
         
           case 3:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
        break; 
		
		    case 4:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
        break;  
			    case 5:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4); 
	   break;  
	    case 6:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	    
	   break; 
	   case 7:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	     $this->login=func_get_arg(6);
	      break; 
		   case 8:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	     $this->login=func_get_arg(6);
		  $this->password=func_get_arg(7);
	      break; 
		    case 9:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	     $this->login=func_get_arg(6);
		  $this->password=func_get_arg(7);
		   $this->id_categorie=func_get_arg(8);
	      break; 
		   case 10:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	     $this->login=func_get_arg(6);
		  $this->password=func_get_arg(7);
		   $this->id_categorie=func_get_arg(8);
		     $this->id_ville=func_get_arg(9);
	      break; 
		   case 11:
         //deux paramètres passés
		$this->id_client=func_get_arg(0);
		$this->nom_client=func_get_arg(1);
		$this->prenom_client=func_get_arg(2);
		$this->adresse_client=func_get_arg(3);
       $this->email_client=func_get_arg(4);
	     $this->tel_client=func_get_arg(5);
	     $this->login=func_get_arg(6);
		  $this->password=func_get_arg(7);
		   $this->id_categorie=func_get_arg(8);
		     $this->id_ville=func_get_arg(9);
			  $this->etat=func_get_arg(10);
	      break; 
         default:
    }
   
}










function liste_client()
{
require_once('config.php');

$query='select * from client,categorie,ville where client.id_ville=ville.id_ville and client.id_categorie=categorie.id_categorie';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}
function supprimer_client($id)
{

require_once('config.php');




$req="delete FROM client WHERE id_client=$id";
$mysqli->query($req);
$mysqli->close();
}
function modifier_oui($id)
{
require_once('config.php');



$req="UPDATE client SET 

etat='1'
 
WHERE  id_client='$id' ";
$mysqli->query($req);
}
function modifier_non($id)
{
require_once('config.php');



$req="UPDATE client SET 

etat='0'
 
WHERE  id_client='$id' ";
$mysqli->query($req);
}
}

?>
