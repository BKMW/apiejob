<?php

session_start();
if (!isset($_SESSION['login'])) {
header ('Location: index.php');
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
function verification()
{
if (document.form1.libelle_categorie.value=="") 
{
alert ("saisir le champs 'Nom categorie'")
return false; 
}

}
</script>
</head>
</head>

<body marginheight="0"marginwidht="0">

<table width="951" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="951"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="950" height="310">
      <param name="movie" value="slide_f8.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- Cette balise <param> invite les utilisateurs de Flash Player en version 6.0 r65 et ultérieure à télécharger la version la plus récente de Flash Player. Supprimez-la si vous ne voulez pas que cette invite soit visible. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- La balise <object> suivante est destinée aux navigateurs autres qu'IE. Supprimez-la d'IE à l'aide d'IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="slide_f8.swf" width="950" height="310">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- Le navigateur affichera le contenu alternatif suivant pour les utilisateurs d'un lecteur Flash de version 6.0 ou de versions plus anciennes. -->
        <div>
          <h4>Le contenu de cette page nécessite une version plus récente d’Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir le lecteur Adobe Flash" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
  </tr>
  <tr>
    <td height="37"><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="liste_utilisateur.php"><img src="images/page2_04.png" width="204" height="47" border="0" /></a></td>
        <td><a href="liste_categorie.php"><img src="images/page2_05.png" width="206" height="47" border="0" /></a></td>
        <td><a href="liste_regions.php"><img src="images/page2_07.png" width="193" height="47" border="0" /></a></td>
        <td><a href="liste_message_contact_client.php"><img src="images/page2_08.png" width="168" height="47" border="0" /></a></td>
        <td><a href="deconnexion.php"><img src="images/page2_09.png" width="170" height="47" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="77"><table width="933" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="933" height="97" class="c1">&nbsp;</td>
      </tr>
      <tr>
        <td class="c2"><p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="ajout_categorie.php" onsubmit="return verification()">
          
          <table width="386" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="175">Nom categorie</td>
              <td width="211"><input type="text" name="libelle_categorie" id="libelle_categorie" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="Ajouter" id="Ajouter" value="Ajouter" /></td>
            </tr>
          </table>
          </form>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td class="c3">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>