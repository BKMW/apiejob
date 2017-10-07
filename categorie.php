+<?php
class categorie{
	public $id_categorie;
	public $libelle_categorie;
	

	
	
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
      case 1:
         //un seul paramètre passé
         $this->id_categorie=func_get_arg(0);
         break;
      case 2:
         //deux paramètres passés
		$this->id_categorie=func_get_arg(0);
		$this->libelle_categorie=func_get_arg(1);
        break; 
         
         
		
		    
			
         default:
    }
   
}







function inserer_categorie()
{
require_once('config.php');


$req="insert into categorie(id_categorie,libelle_categorie) values(NULL,'$this->libelle_categorie')";
$mysqli->query($req);	
$mysqli->close();
}


function liste_categorie()
{
require_once('config.php');

$query='select * from categorie';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function afficher_categorie()
{
require_once('config.php');
require_once('modifier_categorie.php');
$id= $_GET["id"];

$query="select * FROM categorie WHERE id_categorie = '$id' ";
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}


function modifier_categorie($id,$libelle)
{
require_once('config.php');



$req="UPDATE categorie  SET 

libelle_categorie='$libelle'
 
WHERE  id_categorie='$id' ";
$mysqli->query($req);
}
function supprimer_categorie($id)
{

require_once('config.php');




$req="delete FROM categorie WHERE id_categorie=$id";
$mysqli->query($req);
$mysqli->close();
}
}

?>
