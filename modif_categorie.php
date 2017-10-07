<html><head>
  <body>

<?php
require_once('categorie.php');
$s=new categorie();
$s-> modifier_categorie($_GET['id'],$_POST['libelle_categorie']);
header('Location:liste_categorie.php');
?>
</body></head></html>