<?php
/* 
-----------------
Language: Arabic
-----------------
*/

function toHtml($text)
{
	$text = htmlentities($text, ENT_NOQUOTES, "UTF-8");
	$text = htmlspecialchars_decode($text);
	return $text;
}


function toUtf($text)
{
	return utf8_encode($text);
}



$lang = array();

$lang['PAGE_TITLE'] = toUtf('Faculté des Sciences de Sfax');
$lang['HEADER_TITLE'] = toUtf('Faculté des Sciences de Sfax');
$lang['SITE_NAME'] = toUtf('Faculté des Sciences de Sfax');
$lang['SLOGAN'] = toUtf('FSS');
$lang['HEADING'] = toUtf('Position');


// Connexion Modal
$lang['CONNEXION_MODAL_TITLE'] = toUtf('Connexion'); 
$lang['CONNEXION_MODAL_TIP'] = toUtf('Veuillez saisir vos identifiants');
$lang['CONNEXION_MODAL_EMAIL'] = toUtf('E-mail');
$lang['CONNEXION_MODAL_PASSWORD'] = toUtf('Mot de Passe');
$lang['CONNEXION_MODAL_SUBMIT'] = toUtf('Se Connecter');
$lang['CONNEXION_MODAL_EMAIL_PLCH'] = toUtf('Votre E-mail  ...');
$lang['CONNEXION_MODAL_PASSWORD_PLCH'] = toUtf('Votre Mot de Passe ...');
$lang[''] = toUtf('');


// Inscription Modal
$lang['INSCRIPTION_MODAL_TITLE'] = toUtf('Inscription');
$lang['INSCRIPTION_MODAL_TIP'] = toUtf('Veuillez saisir vos identifiants d\'insctription');
$lang['INSCRIPTION_MODAL_USERNAME'] = toUtf('Nom d\'utilisateur');
$lang['INSCRIPTION_MODAL_EMAIL'] = toUtf('E-mail');
$lang['INSCRIPTION_MODAL_PASSWORD'] = toUtf('Mot de Passe');
$lang['INSCRIPTION_MODAL_SUBMIT'] = toUtf('S\'inscrire');
$lang['INSCRIPTION_MODAL_USERNAME_PLCH'] = toUtf('Votre Nom d\'utilisateur ...');
$lang['INSCRIPTION_MODAL_EMAIL_PLCH'] = toUtf('Votre E-mail ...');
$lang['INSCRIPTION_MODAL_PASSWORD_PLCH'] = toUtf('Votre Mot de Passe ...');
$lang[''] = toUtf('');


// Menu

$lang['MENU_HOME'] = toUtf('Accueil');
$lang['MENU_FORMATION'] = toUtf('Formations');
$lang['MENU_FORMATION_SM1'] = toUtf('Etudes Préparatoires'); 
$lang['MENU_FORMATION_SM2'] = toUtf('Master');
$lang['MENU_FORMATION_SM3'] = toUtf('Doctorat');
$lang['MENU_FORMATION_SM4'] = toUtf('Habilitation Universitaire');
$lang['MENU_DEPARTEMENTS'] = toUtf('Départements');
$lang['MENU_ECOLE_DOC'] = toUtf('Ecole Doctorale');
$lang['MENU_DOCUMENTS'] = toUtf('Documents');
$lang['MENU_RECHERCHE'] = toUtf('Chercher ...');
$lang['MENU_CONNEXION'] = toUtf('Se Connecter');
$lang['MENU_INSCRIPTION'] = toUtf('Inscription');
$lang['MENU_ESPACE'] = toUtf('Mon Espace');
$lang['MENU_PROFIL'] = toUtf('Voir Profil');
$lang['MENU_DECONNEXION'] = toUtf('Se Deconnecter');
$lang[''] = toUtf('');
?>