<!doctype html>
 
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="cs">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#3e668f">
<title>VENTUS :: Vudcovsky kurz</title>
<meta name="keywords" content="VENTUS, vůdcovky, skauting, pražský skauting, vudcovsky kurz, vudcovky, ORJ Praha 4, Junak - okres Praha 4 "/>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="img/favicon.ico">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>

<div class="gridContainer clearfix">
  <div id="header">
    <div id="underheader"><a href="index.html"><img src="img/top.png" alt="Ventus"></a></div>
  </div>
  <div class="body">
      <div id="menu" class="underbody">
  <p><a href="index.html">Novinky</a>  ∞  <a href="kurz.html">Kurz</a>  ∞  <a href="termin.html">Termín & Podmínky</a>  ∞  <a href="katedry.html">Katedry</a>  ∞  <a href="lide.html">Účastníci</a>  ∞  <a href="tym.html">Tým</a></p>  </div>

 
    
    
    <div class="underbody">
	
<?php
$username = "ventus2016";
$password = "budjaksvojsik";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>
      <h2>MATERIÁLY</h2>
      <p>Zde budeme postupně doplňovat materiály z víkendů.<br>
	  <ul>
		<li>IDEOLOGICA</li>
		<li>COLLEGIUM</li>
		<li>METODICA</li>
		<li>PSYCHOLOGIA & PEDAGOGICA</li>
		<li>TERRA</li>
		<li>MEDICA</li>
		<li>FISCUS</li>
		<li>ORDO & IUSTITIA</li>
		<li>HUMANA</li>
		</ul>
	  </p>
	  
	  
    </div>
	<div id="footer">
    <div id="underfooter">
      <p>Vůdcovský kurz Ventus, Junák - český skaut, okres Praha 4</p>
    </div>
  </div>
  
</div>
<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Špatně zadané jméno. Klikni pro <a href=materialy.php>návrat</a>.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Špatně zadané heslo. Klikni pro <a href=materialy.php>návrat</a>.";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Nelze se přihlásit.";
   }
}
?>

<h2>Přihlášení</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label><input type="text" name="user" id="user" /> Zadej jméno</label><br />
<label><input type="password" name="keypass" id="keypass" /> Zadej heslo</label><br /><br />
<input type="submit" id="submit" value="Přihlásit se jako Svojsík" /><br /><br />
</form>



  </div>
  
  

  <div id="footer">
    <div id="underfooter">
      <p>Vůdcovský kurz Ventus, Junák - český skaut, okres Praha 4</p>
    </div>
  </div>
  
</div>
	

</body>
</html>
