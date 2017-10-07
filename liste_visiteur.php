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
          <h4>Le contenu de cette page nécessite une version plus récente d'Adobe Flash Player.</h4>
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
        <td width="933" height="97" class="c1"><table width="215" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="57" height="34">&nbsp;</td>
            <td width="158" class="titre">Liste des visiteurs</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td class="c2"><p><span class="ccc">
          <?php
require_once('visiteur.php');
$m=new visiteur();
$res=$m->liste_visiteur(); ?>
        </span></p>
          <table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td width="173"><span class="c1"><a href="liste_utilisateur.php"><img src="images/btn1_03.png" width="165" height="43" border="0" align="right" /></a></span></td>
              <td width="27">&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <table width="588" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="74" bgcolor="#0C76A1" class="liste" align="center">Nom</td>
              <td width="93" bgcolor="#0C76A1" class="liste" align="center">Prenom</td>
              <td width="86" bgcolor="#0C76A1" class="liste" align="center">Adresse</td>
              <td width="86" bgcolor="#0C76A1" class="liste" align="center">telephone</td>
              <td width="86" bgcolor="#0C76A1" class="liste" align="center">email</td>
              <td width="84" bgcolor="#0C76A1" class="liste" align="center">login</td>
              <td width="47">&nbsp;</td>
              <td width="49">&nbsp;</td>
            </tr>
            
             <?php while($row = $res->fetch_assoc())
{ ?>
            <tr>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[nom_visiteur]"; ?></td>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[prenom_visiteur]"; ?></td>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[adresse_visiteur]"; ?></td>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[tel_visiteur]"; ?></td>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[email_visiteur]"; ?></td>
              <td bgcolor="#47C3EF" align="center"><?php echo "$row[login]"; ?></td>
              <td>&nbsp;</td>
              <td><a href="supprimer_visiteur.php?id=<?php echo $row['id_visiteur']; ?>" onclick="return confirm('Voulez-vous supprimer ce visiteur ?')"><img src="images/supprimer.png" width="42" height="40" border="0" /></a></td>
            </tr>
             <?php 

}

?>
          </table>
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