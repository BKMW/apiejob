
 <?php
require_once('region.php');
$m=new ville();
$a=$_GET['id'];
$m-> supprimer_ville($a);
header('Location:liste_regions.php');
?>


