
 <?php
require_once('categorie.php');
$m=new categorie();
$a=$_GET['id'];
$m-> supprimer_categorie($a);
header('Location:liste_categorie.php');
?>


