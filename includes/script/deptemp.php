<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $data['chemin_img'].$data['nom_img'];?>"
            class="img-responsive">
            <h1><?echo $data['lib_dep'];?></h1>
            <p></p>
            <p><?echo $data['presentation_dep'];?></p>
            <p></p>
          </div>
          <div class="col-md-6">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1 class="text-center">Direction</h1>
                    <!-- <p class="text-center">We are a group of skilled individuals.</p> -->
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-3">
				  <?
				  
				   $actid=$_GET['depid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT unique_id,email,image_profil,settings,user_dep,profil_name,chemin_img,nom_img FROM fss_users,fss_usersettings,fss_images WHERE unique_id =:code_user AND user_dep =:code_dep AND settings_id=settings AND image_id=image_profil');
$query->bindValue(':code_dep',$actid, PDO::PARAM_STR);
$query->bindValue(':code_user',$data['chef_dep'], PDO::PARAM_STR);
$query->execute();
	   
	  while($data=$query->fetch())
	   { 
       $path=$data['chemin_img'].$data['nom_img'];
	   $head_nom = $data['profil_name'];
       $head_fonc = $data['profil_name'];
	   $head_mail = $data['email'];
	   $head_corps = $data['profil_name'];
	   $head_spec = $data['profil_name'];
	   $head_inst = $data['profil_name'];
	   }
				  ?> 
                    <img src="<? echo $path; ?>"
                    class="center-block img-circle img-responsive">
                    <h3 class="text-center"><? echo $head_nom; ?></h3>
                    <p class="text-center">Fonction : <?echo $head_fonc; ?></p>
					<p class="text-center">E-mail : <? echo $head_mail; ?></p>
					<p class="text-center">Corps : <? echo $head_corps; ?></p>
					<p class="text-center">Specialité : <? echo $head_spec; ?></p>
					<p class="text-center">Institution <? echo $head_inst; ?></p>
                  </div>
                  <div class="col-md-3">
				  <?
				  
				   $actid=$_GET['depid'];
	     $db = new PDO('mysql:host=localhost;dbname=fss-db', 'diopbach', 'nabounanc1');
$query=$db->prepare('SELECT unique_id,email,image_profil,settings,user_dep,profil_name,chemin_img,nom_img FROM fss_users,fss_usersettings,fss_images WHERE unique_id =:code_user AND user_dep =:code_dep AND settings_id=settings AND image_id=image_profil');
$query->bindValue(':code_dep',$actid, PDO::PARAM_STR);
$query->bindValue(':code_user',$data['adjchef_dep'], PDO::PARAM_STR);
$query->execute();
	   
	  while($data=$query->fetch())
	   { 
       $path=$data['chemin_img'].$data['nom_img'];
	   $head_nom = $data['profil_name'];
       $head_fonc = $data['profil_name'];
	   $head_mail = $data['email'];
	   $head_corps = $data['profil_name'];
	   $head_spec = $data['profil_name'];
	   $head_inst = $data['profil_name'];
	   }
				  ?> 
                    <img src="<? echo $path; ?>"
                    class="center-block img-circle img-responsive">
                    <h3 class="text-center"><? echo $head_nom; ?></h3>
                    <p class="text-center">Fonction : <?echo $head_fonc; ?></p>
					<p class="text-center">E-mail : <? echo $head_mail; ?></p>
					<p class="text-center">Corps : <? echo $head_corps; ?></p>
					<p class="text-center">Specialité : <? echo $head_spec; ?></p>
					<p class="text-center">Institution <? echo $head_inst; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Parcours </h3>
              </div>
              <div class="panel-body">
                <p><? echo $data['parcours_dep']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>