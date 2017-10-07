<?php
class ville{
	public $id_ville;
	public $libelle_ville;
	

	
	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_ville=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_ville=func_get_arg(0);
		$this->libelle_ville=func_get_arg(1);
        break; 
         
         
		
		    
			
         default:
    }
   
}







function inserer_ville()
{
require_once('config.php');


$req="insert into ville(id_ville,libelle_ville) values(NULL,'$this->libelle_ville')";
$mysqli->query($req);	
$mysqli->close();
}


function liste_ville()
{
require_once('config.php');

$query='select * from ville';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function afficher_ville()
{
require_once('config.php');
require_once('modifier_ville.php');
$id= $_GET["id"];

$query="select * FROM ville WHERE id_ville = '$id' ";
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}


function modifier_ville($id,$libelle)
{
require_once('config.php');



$req="UPDATE ville  SET 

libelle_ville='$libelle'
 
WHERE  id_ville='$id' ";
$mysqli->query($req);
}

function supprimer_ville($id)
{

require_once('config.php');




$req="delete FROM ville WHERE id_ville=$id";
$mysqli->query($req);
$mysqli->close();
}

}

?>
