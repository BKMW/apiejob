<?php

// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

$login=$_POST['login'];
$password=md5($_POST['password']);
require_once('administrateur.php');
$m=new admin();
$res=$m->liste_admin2($login,$password);
// on teste si une entrée de la base contient ce couple login / pass
$data=$res->fetch_array(MYSQLI_ASSOC);
// si on obtient une réponse, alors l'utilisateur est un membre
if($data['ad'] == 1) {
session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: liste_utilisateur.php');
exit();
}
// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
else if ($data['ad'] == 0) {
$erreur = 'Verifier vos cordonnées.';
}
// sinon, alors la, il y a un gros problème :)
else {
$erreur = 'Probème dans la base de données';
}
}
else {
$erreur = 'Au moins un des champs est vide.';
}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.msg {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #F00;
}
</style>
</head>

<body marginheight="0" marginwidth="0">
<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="585" height="117"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="950" height="310">
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
    <td><p>&nbsp;</p>
      <table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="390" height="250" class="connexion"><form id="form1" name="form1" method="post" action="">
            <table width="323" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td height="64" colspan="2"><p class="titre">Authentification</p></td>
                
              </tr>
              <tr>
                <td width="133" height="28">&nbsp;</td>
                <td width="187">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" class="ecriture">Nom utilisateur:</td>
                <td><input name="login" type="text" id="login" size="30" /></td>
              </tr>
              <tr>
                <td height="31" class="ecriture">Mot de passe: </td>
                <td><input name="password" type="password" id="password" size="30" /></td>
              </tr>
              <tr>
                <td height="30">&nbsp;</td>
                <td align="right"><input type="submit" name="connexion" id="connexion" value="Connexion" /></td>
              </tr>
              <tr>
                <td height="32">&nbsp;</td>
                <td><span class="msg">
                  <?php

if (isset($erreur)) echo ' ',$erreur;
?>
                </span></td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>