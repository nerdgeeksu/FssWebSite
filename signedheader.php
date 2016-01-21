
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <meta name="keywords" content="Faculté des Sciences de Sfax , Faculté , Sfax , Faculté Sfax">
    <meta name="description" content="Site Officiel de la Faculté des Sciences de Sfax">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="includes/script/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="includes/script/bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="includes/script/bootstrap/js/bootstrap.min.js"></script>
    <link href="includes/script/bootstrap/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
         Bootstrap core CSS 
    <link href="includes/script/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     -->
    <link href="includes/script/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="includes/script/magic.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="includes/script/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]>
        <script src="../../assets/js/ie8-responsive-file-warning.js">
    </script>
  <![endif]-->
  <script src="includes/script/bootstrap/js/ie-emulation-modes-warning.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements
  and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="includes/script/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </head>
  
  <body>
    
	    	
      
    <div class="fade modal text-center" id="connexion-modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $lang['CONNEXION_MODAL_TITLE']; ?>
              <br>
            </h4>
          </div>
          <div class="modal-body">
            <div id="container" class="container-fluid text-center">
              <div class="col-sm-10 col-md-offset-1" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span><?php echo $lang['CONNEXION_MODAL_TIP']; ?></h4>
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
                <div id="messages"></div>
                <!-- FORM -->
                <form id="connexionform">
                  <!-- E-mail -->
                  <div id="email-group" class="form-group">
                    <label><?php echo $lang['CONNEXION_MODAL_EMAIL']; ?></label>
                    <input type="email" name="email" class="form-control" placeholder="<?php echo $lang['CONNEXION_MODAL_EMAIL_PLCH']; ?>">
                    <span class="help-block"></span>
                  </div>
                  <!-- Password -->
                  <div id="password-group" class="form-group">
                    <label><?php echo $lang['CONNEXION_MODAL_PASSWORD']; ?></label>
                    <input type="password" name="password" class="form-control" placeholder="<?php echo $lang['CONNEXION_MODAL_PASSWORD_PLCH']; ?>">
					
                    <span class="help-block"></span>
                  </div>
                  <span class="ajax_wait" align="center">
                    <!--don't delete this span class="ajax_wait"-->
                  </span>
				  <input type="text" name="tag" value="login" hidden>
				  
                  <!-- SUBMIT BUTTON -->
                  <button type="submit" class="btn btn-success btn-lg btn-block">
                    <span class="fa fa-fw fa-sign-in"></span><?php echo $lang['CONNEXION_MODAL_SUBMIT']; ?></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="fade modal text-center" id="inscription-modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $lang['INSCRIPTION_MODAL_TITLE']; ?>
              <br>
            </h4>
          </div>
          <div class="modal-body">
            <div id="container" class="container-fluid text-center">
              <div class="col-md-10 col-md-offset-1">
                <!-- PAGE TITLE -->
                
                  
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
                <div id="reg_messages"></div>
                <!-- FORM -->
                <form id="inscriptionform">
				<!-- Username -->
                  <div id="reg_username-group" class="form-group">
                    <label><?php echo $lang['INSCRIPTION_MODAL_USERNAME']; ?></label>
                    <input type="text" name="reg_username" class="form-control" placeholder="<?php echo $lang['INSCRIPTION_MODAL_USERNAME_PLCH']; ?> "> 
                    <span class="help-block"></span>
                  </div>
                  <!-- E-mail -->
                  <div id="reg_email-group" class="form-group">
                    <label><?php echo $lang['INSCRIPTION_MODAL_EMAIL']; ?></label>
                    <input type="email" name="reg_email" class="form-control" placeholder="<?php echo $lang['INSCRIPTION_MODAL_EMAIL_PLCH']; ?>">
                    <span class="help-block"></span>
                  </div>
                  <!-- Password -->
                  <div id="reg_password-group" class="form-group">
                    <label><?php echo $lang['INSCRIPTION_MODAL_PASSWORD']; ?></label>
                    <input type="password" name="reg_password" class="form-control" placeholder="<?php echo $lang['INSCRIPTION_MODAL_PASSWORD_PLCH']; ?>">
                    <span class="help-block"></span>
                  </div>
                  <span class="ajax_wait" align="center">
                    <!--don't delete this span class="ajax_wait"-->
                  </span>
				  <input type="text" name="reg_tag" value="register" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type="submit" class="btn btn-success btn-lg btn-block">
                    <span class="fa fa-fw fa-user"></span><?php echo $lang['INSCRIPTION_MODAL_SUBMIT']; ?></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <a href="index.php" >
		<div class="section section-info">
		  <div class="background-image" style="background-image : url('includes/images/header.jpg')"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-header text-center">
						  <h1>
							<small>
							  <br>
							  <br>
							</small>
						  </h1>
						</div>
					</div>
				</div>
			</div>
				<div class="section">
					<div class="col-md-3 pull-right " >
						<ul class="breadcrumb" draggable="true">
							<li class="breadcrumb-item">
								<a href="index.php?fss_lang=fr">FR <img src="languages/fr.png" alt="Francais" > </a>
							</li>
							<li class="breadcrumb-item">
								<a href="index.php?fss_lang=en">EN <img src="languages/en.png" alt="English" /> </a>
							</li>
							<li class="breadcrumb-item active">
								<a href="index.php?fss_lang=ar">AR <img src="languages/ar.png" alt="Arabic" /> </a>
							</li>
						</ul>
					</div>
				</div>
		  </div>
	 	  
	</a>
	
    <div class="navbar navbar-default navbar-static-top " id="mynavbar">
      <div class="container" id="navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse " id="navbar-ex-collapse">
          <ul class="nav navbar-nav nav-pills navbar-right " id="menu">
            <li class="active btn btn-default">
              <a href="index.php" class="btn btn-default"><?php echo $lang['MENU_HOME']; ?><i class="fa fa-star fa-fw"></i></a>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default"><?php echo $lang['MENU_FORMATION']; ?><i class="fa fa-fw fa-book"></i></a>
              <ul class="list-unstyled text-center">
                <li>
                  <a href="#"><?php echo $lang['MENU_FORMATION_SM1']; ?></a>
                </li>
                <li>
                  <a href="#"><?php echo $lang['MENU_FORMATION_SM2']; ?></a>
                </li>
                <li>
                  <a href="#"><?php echo $lang['MENU_FORMATION_SM3']; ?></a>
                </li>
                <li>
                  <a href="#"><?php echo $lang['MENU_FORMATION_SM4']; ?></a>
                </li>
              </ul>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default"><?php echo $lang['MENU_DEPARTEMENTS']; ?><i class="fa fa-fw fa-bank"></i></a>
              <ul class="list-unstyled text-center">
                 <?php
				
    $query=$fssdb->prepare(" SELECT * FROM fss_departements ");
    $query->execute();
				
				while($data=$query->fetch())
				{
				$depid=$data['dep_id'];
				$deplib=$data['lib_dep'];
				echo'
				<li>
                  <a href="departement.php?depid='.$depid.'">'.$deplib.'</a>
                </li>';
				}
                ?>
              </ul>
            </li>
            <li class="btn btn-default">
              <a href="http://www.edsf.fss.rnu.tn/" class="btn btn-default" target="_new"><?php echo $lang['MENU_ECOLE_DOC']; ?><i class="fa fa-fw fa-graduation-cap"></i></a>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default"><?php echo $lang['MENU_DOCUMENTS']; ?><i class="fa fa-fw fa-leanpub"></i></a>
            </li>
            <li >
			<div class="btn-group btn-group-sm-1 " role="group" aria-label="user-button" id="userbutton">
      <div class="input-group " id="facsearchzone">
        <input type="text" class="form-control" placeholder="<?php echo $lang['MENU_RECHERCHE']; ?>">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go !</button>
        </span>
      </div>
    </div>
			</li>
		 <li class="btn btn-default pull-right" style="display:inline-block;">
              <a> <img class="center-block img-circle text-center thumbnail col-sm-5 col-sm-5" src="includes/images/drake.jpg"><?php echo $lang['MENU_ESPACE']; ?>
              <span class="caret"></span>
             </a>
              <ul class="list-unstyled text-center">
                <li>
                  <a href="profil.php?unid=<?php echo 'A01034643'; ?>"><?php echo $lang['MENU_PROFIL']; ?></a>
                </li>
                <li>
                  <a href="index.php?logout=true"><?php echo $lang['MENU_DECONNEXION']; ?><i class="fa fa-fw fa-sign-out"></i></a>
                </li>
              </ul>
            </li>
			
          </ul>
    </div>
           
        </div>
      </div>
      <!-- Large button group -->

 