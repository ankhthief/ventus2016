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
  <p><a href="index.html">Novinky</a>  ∞  <a href="kurz.html">Kurz</a>  ∞  <a href="terminy.html">Termíny</a>  ∞  <a href="katedry.html">Katedry</a>  ∞  <a href="podminky.html">Podmínky</a>  ∞  <a href="tym.html">Tým</a></p>  </div>
    
    
    
    <div class="underbody">
	<?php
require 'login.php';

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>
	
	
      <h2>Účastníci</h2>
	<h3>Koho na Ventu potkáš?</h3>
    </div>
	
	<!--
	<div class="underbody">
	<p>
	Ondra <b>Hoblík</b> Růžička</p>
	<p style="text-align: right">
		oddíl Krhúti<br></p>
		<p style="text-align: justify">
		<a href="img/2018/2018_Ondra.jpg"><img style="float: left; margin-right: 10px" src="img/2018/2018_Ondra.jpg" height="250" alt="ondra" ></a>Do junáka jsem vstoupil ve svých osmi letech, mým domovským oddílem je 76. oddíl Krhúti v  Praze 4. Poslední čtyři roky připravuji program pro vlčata. V oddíle mi říkají Hoblík, protože jsem profesí umělecký truhlář. V našem oddíle se mi libí pestrost programu, soužití s přírodou, turistika, vodáctví, cyklistika, zimní sporty.  
	<br><br><br><br><br>
	</p>
	</div>

-->

	
	
	
  </div>

  <div id="footer">
    <div id="underfooter">
        
      <p><a style="color:white" target="_blank" rel="noopener noreferrer" href="http://www.orj-praha4.skauting.cz/">Junák - český skaut, okres Praha 4</a><img src="img/SKAUT_bezznacky_logo_bile_stit.png" width="100" height="100" alt="logo" ></p><div style="clear:both"></div>
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
      echo "Špatně zadané jméno. Klikni pro <a href=lide.php>návrat</a>.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Špatně zadané heslo. Klikni pro <a href=lide.php>návrat</a>.";
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
<input type="submit" id="submit" value="Přihlásit se" /><br /><br />
</form>

</body>
</html>
