
 <?php
require_once('visiteur.php');
$m=new visiteur();
$a=$_GET['id'];
$m-> supprimer_visiteur($a);
header('Location:liste_visiteur.php');
?>


