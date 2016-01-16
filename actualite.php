
<?php
 include('includes/script/ajaxLoginModule.class.php');
   $ajaxLoginModule = new ajaxLoginModule;
   
   // !isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false || condition supplementaire

  if(isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == true && !isset($_GET['actid']))
   {
	   //$actid=$_GET['actid'];
	 $actid='Lorem Ipsum';
     $text = file_get_contents('loremipsum.txt');
	   include('signedheader.php');
	   echo'<div class="section">
      <div class="container"> 
	   <div class="col-md-8 ">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">'.$actid.'</h3>
				</div>
					<div class="panel-body">
						'.$text.'
					</div>
				</div>
			</div> 
</div> 
</div> 			
			';
	   include('footer.php');
   }
   elseif(!isset($_SESSION['is_successful_login']) && $_SESSION['is_successful_login'] == false && !isset($_GET['actid']))
   {  
    header ('location: index.php'); 
	exit;
   }
   elseif( !isset($_SESSION['is_successful_login']) && $_SESSION['is_successful_login'] == false && isset($_GET['actid']) )
   {
	   
	    $actid=$_GET['actid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT * FROM fss_news WHERE newsid =:code_act ');
$query->bindValue(':code_act',$actid, PDO::PARAM_STR);
$query->execute();
	   
	     
	   include('notsignedheader.php');
	   
	   while($data=$query->fetch())
	   { 
	   echo'
	   <div class="section">
      <div class="container"><div class="col-md-8 ">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">'.$data['titre'].'</h3>
				</div>
					<div class="panel-body">
						'.$data['contenu'].'
					</div>
				</div>
</div> 
</div> 		
		</div>  
	   
	   ';
	   }
	   include('footer.php');
	   
   }
   elseif( isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == true && isset($_GET['actid']))
   {
	     $actid=$_GET['actid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT * FROM fss_news WHERE newsid =:code_act ');
$query->bindValue(':code_act',$actid, PDO::PARAM_STR);
$query->execute();
	   
	     
	   include('signedheader.php');
	   
	   while($data=$query->fetch())
	   { 
	   echo'
	   <div class="section">
      <div class="container"><div class="col-md-8 ">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">'.$data['titre'].'</h3>
				</div>
					<div class="panel-body">
						'.$data['contenu'].'
					</div>
				</div>
</div> 
</div> 		
		</div>  
	   
	   ';
	   }
	   include('footer.php');
   }
   
	
?>	
