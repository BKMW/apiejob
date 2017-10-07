 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
  <body>
  <?php
require_once('region.php');





$p=new ville('',$_POST['libelle_ville']);

 $p->inserer_ville();

	  



?>
<script language="JavaScript"> alert('Region ajouté avec succès');
	location.href = "liste_categorie.php";
                     </script>
				
				
					 </body>
					 </html>