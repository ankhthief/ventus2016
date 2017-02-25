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
	  <h3>1. víkend</h3>
	  <ul>
		<li>IDEOLOGICA</li>
		<ul>
		<li><a href="dokumenty/Prezentace_Ventus-Ideologica.ppt">Rocky - na čem stojí skauting</a></li>
		</ul>
		<li>COLLEGIUM</li>
		<ul>
		<li><a href="dokumenty/Autorita.ppt">Máňa - autorita</a></li>
		</ul>
		<li>METODICA</li>
		<ul>
		<li><a href="dokumenty/uvod_do_skautskeho_mysleni.pdf">Úvod do skautského myšlení</a></li>
		<li><a href="dokumenty/prezentace-zdroje.ppt">Radim - zdroje a prameny</a></li>
		<li><a href="dokumenty/metodica-teorie_2016_2017.ppt">Adam, Zuzka - Úvod</a></li>
		</ul>
		<li>PSYCHOLOGIA & PEDAGOGICA</li>
		<ul>
		<li><a href="dokumenty/psychologie-osobnost.ppt">Zuzka - Psychologie I.</a></li>
		<li><a href="dokumenty/vývojovka.ppt">Zuzka - Vývojovka</a></li>
		</ul>
		<li>TERRA</li>
		<ul>
		<li><a href="dokumenty/TERRA_Nez_vyjedete_na_tabor_2016.pdf">Hurón - Než vyjedete na tábor</a></li>
		<li><a href="dokumenty/Tera_1_vikend_2016_17.ppt">Bóža,Hurón - Terra</a></li>
		</ul>
		<!--
		<li>MEDICA</li>
		-->
		<li>FISCUS</li>
		<ul>
		<li><a href="dokumenty/Prezentace Ventus Fiscus 2016-17_1_úvod hospodareni.ppt">Matýsek - Úvod do hospodaření</a></li>
		<li><a href="dokumenty/Prezentace Ventus Fiscus 2016-17_2_hospodareni_akce_a_doklady.ppt">Matýsek - Hospodaření akce a doklady</a></li>
		<li><a href="dokumenty/Prezentace Ventus Fiscus 2016-17_3_cestovni_prikaz.ppt">Matýsek - Cestovní příkaz</a></li>
		<li><a href="dokumenty/Prezentace Ventus Fiscus 2016-17_4_rozpocet.ppt">Matýsek - Rozpočet</a></li>
		<li><a href="dokumenty/hospodarsky_rad_2016.pdf">Hospodářský řád</a></li>
		</ul>
		<li>ORDO & IUSTITIA</li>
		<ul>
		<li><a href="dokumenty/organizace_ventus.pdf">Adam,Doktor - Organizace Junáka - českého skauta</a></li>
		<li><a href="dokumenty/Vranova_skripta-organizace.pdf">Vránova skripta - organizace</a></li>
		<li><a href="dokumenty/Vranova_skripta-pravo.pdf">Vránova skripta - právo</a></li>
		<li><a href="dokumenty/Ordo_et_Iustitia-trestni-pravo.ppt">Adam, Doktor - Trestní právo</a></li>
		<li><a href="dokumenty/Ordo_et_Iustitia- uvod_pro_zajemce.ppt">Právo - úvod</a></li>
		</ul>
		<!--
		<li>HUMANA</li>
		-->
		<li>OSTATNÍ</li>
		<ul>
		<li><a href="dokumenty/antikody.pdf">Antikódy</a></li>
		<li><a href="dokumenty/listyjurovi.pdf">Listy Jurovi</a></li>
		</ul>
		<li>PROJEKT</li>
		<ul>
		<li><a href="dokumenty/VK_Ventus_2016_zadani_planovani.docx">Šablona pro projekt</a></li>
		<li><a href="dokumenty/Ventus_2016-17_planovani.ppt">Prezentace plánování</a></li>
		</ul>
		</ul>
		<!-- dokumenty druhého víkendu -->
		<h3>2. víkend</h3>
		<ul>
		<li>COLLEGIUM</li>
		<ul>
		<li><a href="dokumenty/Belbinuv_test-tymove_role.pdf">Belbínův test - týmové role</a></li>
		<li><a href="dokumenty/jak_pomoci_radcum_s_budovanim_autority.pdf">Jak pomoci rádcům s budováním autority</a></li>		
		<li><a href="dokumenty/tym_spoluprace.pdf">Tým, spolupráce</a></li>
		<li><a href="dokumenty/ukol_collegium.pdf">Úkol</a></li>
		</ul>
		<li>METODICA</li>
		<ul>	
		<li><a href="dokumenty/pasat_idealni_oddil.JPG">Ideální oddíl - Pasát</a></li>
		<li><a href="dokumenty/mistral_idealni_oddil.JPG">Ideální oddíl - Mistrál</a></li>
		<li><a href="dokumenty/idealni_oddil.pdf">Ideální oddíl</a></li>
		<li><a href="dokumenty/ukol_metodica.pdf">Úkol - hra</a></li>
		</ul>
		<li>PSYCHOLOGIA & PEDAGOGICA</li>
		<ul>
		<li><a href="dokumenty/psychologie-osobnost_2.ppt">Zuzka - Psychologie II.</a></li>
		<li><a href="dokumenty/vyvojovka_2.ppt">Zuzka - Vývojovka II.</a></li>
		</ul>
		<li>TERRA</li>
		<ul>
		<li><a href="dokumenty/Tera_2_vikend_2016_17.ppt">Hurón, Bóža - Táboření</a></li>
		</ul>
		<li>FISCUS</li>
		<ul>
		<li><a href="dokumenty/Prezentace Ventus Fiscus 2016-17_5_majetek.ppt">Matýsek - Majetek</a></li>
		</ul>	
		<li>ORDO & IUSTITIA</li>
		<ul>
		<li><a href="dokumenty/prirucka_cekatelska_zkouska.pdf">Příručka - čekatelská zkouška</a></li>
		<li><a href="dokumenty/soukrome_pravo_Ventus.pdf">Soukromé právo</a></li>
		<li><a href="dokumenty/OOU_prava_deti_Ventus.pdf">Ochrana osobních údajů, práva dětí</a></li>
		</ul>
		<li>HUMANA</li>
		<ul>
		<li><a href="dokumenty/ukol_humana.pdf">Úkol</a></li>
		</ul>
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
