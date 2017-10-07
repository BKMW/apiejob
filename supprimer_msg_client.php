
 <?php
require_once('msg_contact_client.php');
$m=new msgcontact_admin_client();
$a=$_GET['id'];
$m-> supprimer_msgcontact_admin_client($a);
header('Location:liste_message_contact_client.php');
?>


