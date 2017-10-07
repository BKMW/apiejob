
 <?php
require_once('utilisateur.php');
$m=new client();
$a=$_GET['id'];
$m-> supprimer_client($a);
header('Location:liste_utilisateur.php');
?>


