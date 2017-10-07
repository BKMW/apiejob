<html><head>
  <body>

<?php
require_once('utilisateur.php');
$s=new client();
$s-> modifier_non($_GET['id']);
header('Location:liste_utilisateur.php');
?>
</body></head></html>