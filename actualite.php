
<?php
 
   // !isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false || condition supplementaire
 include("/includes/script/files/config.php");
 include("common.php");
 
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
	     
		$query=$fssdb->prepare('SELECT * FROM fss_news WHERE newsid =:code_act ');
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
	   
$query=$fssdb->prepare('SELECT * FROM fss_news WHERE newsid =:code_act ');
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
