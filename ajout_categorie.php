 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
  <body>
  <?php
require_once('categorie.php');





$p=new categorie('',$_POST['libelle_categorie']);

 $p->inserer_categorie();

	  



?>
<script language="JavaScript"> alert('categorie ajouté avec succès');
	location.href = "liste_categorie.php";
                     </script>
				
				
					 </body>
					 </html>