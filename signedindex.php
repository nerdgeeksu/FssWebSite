<?php

   if(!isset($_COOKIE['is_successful_login']) || $_COOKIE['is_successful_login'] == false )
   {
	session_destroy();
    header ('location: index.php'); 
	exit;
   } 
   
  
   include('signedheader.php'); 
   include('includes/script/loadcarousel.php');
   include('includes/script/load.php');
   include('footer.php');
?>
    
