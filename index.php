<?php
	session_start();
	include("/includes/script/files/config.php");
	include("common.php");
	
	
	
   if($_GET['logout'] == true && isset($_GET['logout']))
   {
    /* if not logged in then back to login page */
    session_destroy();
	setcookie('session_remember', FALSE, time()+3600*24*(-100), null, null, false, true);
	setcookie('session_id', NULL, time()+3600*24*(-100), null, null, false, true);
	setcookie('is_successful_login', FALSE, time()+3600*24*(-100), null, null, false, true);
    header ('location: index.php'); 
	exit;
   }
   elseif(!isset($_COOKIE['is_successful_login']) || $_COOKIE['is_successful_login'] == 'false' )
   {
	   //include('signedindex.php');
	   
	   include('notsignedindex.php');
	   
   }
   else
   {
	  $_SESSION['session_id'] = $_COOKIE['uid'] ;
	  
	  include('signedindex.php');
   }
   
?>
