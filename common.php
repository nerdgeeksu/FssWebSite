<?php

header('Cache-control: private'); // IE 6 FIX

if(isset($_GET['fss_lang']))
{
$lang = $_GET['fss_lang'];

// register the session and set the cookie
$_SESSION['fss_lang'] = $lang;

setcookie("fss_lang", $lang, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['fss_lang']))
{
$lang = $_SESSION['fss_lang'];
}
else if(isset($_COOKIE['fss_lang']))
{
$lang = $_COOKIE['fss_lang'];
}
else
{
$lang = 'fr';
}

switch ($lang) {
  case 'fr':
  $lang_file = 'lang.fr.php';
  break;

  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'ar':
  $lang_file = 'lang.ar.php';
  break;

  default:
  $lang_file = 'lang.fr.php';

}

include('languages/'.$lang_file);
?>