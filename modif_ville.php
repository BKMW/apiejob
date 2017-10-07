<html><head>
  <body>

<?php
require_once('region.php');
$s=new ville();
$s-> modifier_ville($_GET['id'],$_POST['libelle_ville']);
header('Location:liste_regions.php');
?>
</body></head></html>