<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>3en1Compteur : Codes à insérer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
*{margin:0;padding:0}
body{background:#f8f8f8;margin:0 auto}
#wrapper{-moz-border-radius:10px;background:#fff;border:1px solid #f0f0f0;height:400px;margin:20px auto;padding:10px;position:relative;width:700px}
h1{color:#61d91f;text-align:center}
p{margin:20px 0}
label{color:#4695e5;display:block;font:700 90% Arial,Helvetica,sans-serif}
textarea{-moz-border-radius:5px;border:1px solid #4695e5;border-left:3px solid #4695e5;overflow:hidden;padding:5px}
p.goto{font-family:Arial,Helvetica,sans-serif;position:absolute;bottom:5px;right:5px;margin:0}
a{text-decoration:underline}
</style>

</head>

<body>
<div id="wrapper">
<?php
$abspath = realpath('counter.php');

/* CODE */
$show = <<<SHOW
<?php
include('$abspath');
echo "Visiteurs : \$c_alltime <br />";
echo "Aujourd'hui : \$c_today <br />";
echo "En ligne : \$c_online";
?>
SHOW;
$hide = <<<HIDE
<?php include('$abspath'); ?>
HIDE;
$notoon = <<<NOTOON
&lt;a href="http://www.notoon.com/" title="NotoOn"&gt;NotoOn&lt;/a&gt;
NOTOON;
/* /CODE */

echo '<h1>Codes à insérer</h1>';

echo '<p><label for="show">Code à insérer sur chaque page affichant le compteur :</label>';
echo '<textarea id="show" rows="7" cols="85" onfocus="this.select()">' . $show . '</textarea></p>';

echo '<p><label for="hide">Si vous souhaitez seulement comptabiliser les visites sans les afficher :</label>';
echo '<textarea id="hide" rows="2" cols="85" onfocus="this.select()">' . $hide . '</textarea></p>';

echo '<p><label for="notoon">Un petit merci en faisant un lien vers le site officiel :</label>';
echo '<textarea id="notoon" rows="2" cols="85" onfocus="this.select()">' . $notoon . '</textarea></p>';
?>

<p class="goto"><a href="http://www.notoon.com/general/3en1compteur-compteur-visites-php/">Page officielle de 3en1compteur</a></p>
</div>
</body>
</html>