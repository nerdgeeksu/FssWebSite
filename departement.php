
<?php
 include('includes/script/ajaxLoginModule.class.php');
   $ajaxLoginModule = new ajaxLoginModule;
   
   // !isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false || condition supplementaire

  if(isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == true && !isset($_GET['depid']))
   {
	   //$actid=$_GET['depid'];
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
   elseif(!isset($_SESSION['is_successful_login']) && $_SESSION['is_successful_login'] == false && !isset($_GET['depid']))
   {  
    header ('location: index.php'); 
	exit;
   }
   elseif( !isset($_SESSION['is_successful_login']) && $_SESSION['is_successful_login'] == false && isset($_GET['depid']) )
   {
	   include('notsignedheader.php');
	  
	     $actid=$_GET['depid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT lib_dep,presentation_dep,parcours_dep,chef_dep,adjchef_dep,img_dep,nom_img,chemin_img FROM fss_departements,fss_images WHERE dep_id =:code_dep ');
$query->bindValue(':code_dep',$actid, PDO::PARAM_STR);
$query->execute();     
	   
	   
	   while($data=$query->fetch())
	   {
	   include('includes/script/deptemp.php');
	   }
	   include('footer.php');
	   
   }
   elseif( isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == true && isset($_GET['depid']))
   {
	   include('signedheader.php');
	  
	     $actid=$_GET['depid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT lib_dep,presentation_dep,parcours_dep,chef_dep,adjchef_dep,img_dep,nom_img,chemin_img FROM fss_departements,fss_images WHERE dep_id =:code_dep ');
$query->bindValue(':code_dep',$actid, PDO::PARAM_STR);
$query->execute();
	   
	   while($data=$query->fetch())
	   {
	   include('includes/script/deptemp.php');
	   }
	   
	   include('footer.php');
   }
   
	
?>	
