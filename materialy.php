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
require 'login.php';

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>
      <h2>MATERIÁLY</h2>
      <p>Zde budeme postupně doplňovat materiály z víkendů.<br>
	  <h3>1. víkend</h3>
	  <ul>
		<li>IDEOLOGICA</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/ideologica.pdf">Na čem stojí skauting?</a></li>
		</ul>
		<li>COLLEGIUM</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/jak_pomoci_radcum_s_budovanim_autority.pdf">Jak pomoci rádcům s budováním autority</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/collegium-autorita.pdf">Autorita + styly vedení</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/collegium_1.JPG">Flipchart foto 1</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/collegium_2.JPG">Flipchart foto 2</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/collegium_3.JPG">Flipchart foto 3</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/collegium_4.JPG">Flipchart foto 4</a></li>
		</ul>
		<li>METODICA</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/teorie_vychovny_program.pdf">Výchovný program</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/metodica-teorie.pdf">Teorie</a></li>
		
		</ul>
		<li>PSYCHOLOGIA & PEDAGOGICA</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/psychologica-osobnost_komunikace.pdf">Psychologie I.</a></li>
		</ul>
		<li>TERRA</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/terra_bezpecnost.pdf">Úvod</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/terra_tabor.pdf">Než vyjedete na tábor</a></li>
		</ul>
		<li>FISCUS</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/fiscus-uvod_hospodareni_a_doklady.pdf">Hospodaření a doklady</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/fiscus-hospodareni_akce.pdf">Hospodaření akce</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/fiscus-cestovni_prikaz.pdf">Cestovní příkaz</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/rad_hospodarsky_2016.pdf">Hospodářský řád</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/smernice_k_proplaceni_cestovnich_nahrad.pdf">Směrnice k proplácení cestovních náhrad</a></li>
		</ul>
		<li>ORDO & IUSTITIA</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/ordo_uvod.pdf">Úvod</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/Ordo_soukrome_pravo.pdf">Soukromé právo</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/ordo-trestni_pravo.pdf">Trestní právo</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/Ordo_organizace_ventus.pdf">Organizace</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/Ordo-organizace_handout_reseny.pdf">Řešený handout</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/Ordo-oukrome_pravo_priklad-rozhodnuti.pdf">Příklad - rozhodnutí</a></li>
		</ul>
		<li>OSTATNÍ</li>
		<ul>
		<li><a href="http://tdc.skauting.cz/download/Vudcovka_2017_web.pdf">Vůdcovská zkouška - příručka nejen k přípravě na VZ</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/seznam_ukolu_a_terminu.pdf">Seznam úkolů a termínů</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/listyjurovi.pdf">Listy Jurovi</a></li>
		</ul>
		<li>PROJEKT</li>
		<ul>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/VK_projekt_vzor.docx">Šablona pro projekt</a></li>
		<li><a href="http://ventus.skauting.cz/dokumenty/2018-2019/planovani.pdf">Prezentace plánování</a></li>
		</ul>
		</ul>
		<!-- dokumenty druhého víkendu -->
		<h3>2. víkend</h3>
		
		
		<!-- dokumenty 3.vikendu -->
		
		<h3>3. víkend</h3>
		
		
		
		
		
		
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
<input type="submit" id="submit" value="Přihlásit se" /><br /><br />
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
