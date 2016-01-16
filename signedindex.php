<?php

   /* if(!isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false )
   {
	session_destroy();
    header ('location: index.php'); 
	exit;
   } */
   
   include('includes/script/ajaxLoginModule.class.php');
   $ajaxLoginModule = new ajaxLoginModule;
   include('signedheader.php'); 
   include('includes/script/loadcarousel.php');

?>
    
    <?php include('includes/script/load.php'); ?>
	
   <? include('footer.php'); ?>