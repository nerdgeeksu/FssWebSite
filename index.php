<?php

   
   
   if($_GET['logout'] == true && isset($_GET['logout']))
   {
    /* if not logged in then back to login page */
    session_destroy();
    header ('location: index.php'); 
	exit;
   }
   elseif(!isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false )
   {
	   //include('signedindex.php');
	   include('notsignedindex.php');
	   
   }
   else
   {
	  include('signedindex.php');
   }
   
?>
