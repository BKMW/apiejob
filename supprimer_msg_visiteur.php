
 <?php
require_once('message_contact_visiteur.php');
$m=new msgcontact_admin_visiteur();
$a=$_GET['id'];
$m-> supprimer_message($a);
header('Location:liste_msgcontact_visiteur.php');
?>


