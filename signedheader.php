<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="favicon.ico">
    <meta name="keywords" content="Faculté des Sciences de Sfax , Faculté , Sfax , Faculté Sfax">
    <meta name="description" content="Site Officiel de la Faculté des Sciences de Sfax">
    <title>Faculté des Sciences de Sfax</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
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
    <script type="text/javascript" src="includes/script/FssScript.js"></script>
	<script type="text/javascript" src="includes/script/magic.js">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="includes/script/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="includes/script/signin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
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
    <link href="includes/script/login.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="fade modal text-center" id="connexion-modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Connexion
              <br>
            </h4>
          </div>
          <div class="modal-body">
            <div id="container" class="container-fluid text-center">
             
<div class="col-md-6 col-md-offset-3">

  <!-- PAGE TITLE -->
  <div class="page-header">
    <h1><span class="glyphicon glyphicon-tower"></span> Submitting Forms with Angular</h1>
  </div>

  <!-- SHOW ERROR/SUCCESS MESSAGES -->
  <div id="messages"></div>

  <!-- FORM -->
  <form>
    <!-- NAME -->
    <div id="name-group" class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Bruce Wayne">
      <span class="help-block"></span>
    </div>

    <!-- SUPERHERO NAME -->
    <div id="superhero-group" class="form-group">
      <label>Superhero Alias</label>
      <input type="text" name="superheroAlias" class="form-control" placeholder="Caped Crusader">
      <span class="help-block"></span>
    </div>

	<span class="ajax_wait" align=center>
        <!--don't delete this span class="ajax_wait"-->
    </span>
	
    <!-- SUBMIT BUTTON -->
    <button type="submit" class="btn btn-success btn-lg btn-block">
      <span class="glyphicon glyphicon-flash"></span> Submit!
    </button>
	
	
	
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
            <h4 class="modal-title" id="myModalLabel">Inscription
              <br>
            </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid text-center">
              <form class="form-signin">
                <h2 class="form-signin-heading">Veuillez saisir vos informations d'identification</h2>
                <label for="inputFName" class="sr-only">Nom :</label>
                <input type="text" id="inputFName" class="form-control" placeholder="Nom" required="" autofocus="">
                <label for="inputLName" class="sr-only">Prenom :</label>
                <input type="text" id="inputLName" class="form-control" placeholder="Prenom" required="">
                <label for="inputBDate" class="sr-only">Date de Naissance :</label>
                <input type="text" id="inputBDate" class="form-control" placeholder="Date de Naissance" required="">
                <label for="inputEmail" class="sr-only">Adresse mail :</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse E-mail" required="">
                <label for="inputPassword" class="sr-only">Mot de passe :</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required="">
                <br>
                <button class="btn btn-block btn-lg btn-primary" type="submit">S'inscrire</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="index.php"><div class="section section-info">
      <div class="background-image" style="background-image : url('includes/images/header.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header text-center" >
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
              <a href="index.php" class="btn btn-default">Accueil<i class="fa fa-star fa-fw"></i></a>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default">Formations<i class="fa fa-fw fa-book"></i></a>
              <ul class="list-unstyled text-center">
                <li>
                  <a href="#">Etudes Préparatoires</a>
                </li>
                <li>
                  <a href="#">Master</a>
                </li>
                <li>
                  <a href="#">Doctorat</a>
                </li>
                <li>
                  <a href="#">Habilitation Universitaire</a>
                </li>
              </ul>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default">Départements<i class="fa fa-fw fa-bank"></i></a>
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
              <a href="http://www.edsf.fss.rnu.tn/" class="btn btn-default" target="_new">Ecole Doctorale<i class="fa fa-fw fa-graduation-cap"></i></a>
            </li>
            <li class="btn btn-default">
              <a href="#" class="btn btn-default">Documents<i class="fa fa-fw fa-leanpub"></i></a>
            </li>
			<li >
			<div class="btn-group btn-group-sm-1 " role="group" aria-label="user-button" id="userbutton2">
      <div class="input-group " id="facsearchzone">
        <input type="text" class="form-control" placeholder="Chercher ...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go !</button>
        </span>
      </div>
    </div>
			
			</li>
			
            <li class="btn btn-default pull-right" style="display:inline-block;">
              <a> <img class="center-block img-circle text-center thumbnail col-sm-5 col-sm-5" src="includes/images/drake.jpg">Mon Espace
              <span class="caret"></span>
             </a>
              <ul class="list-unstyled text-center">
                <li>
                  <a href="profil.php?unid=<?php echo 'A01034643'; ?>">Voir Profil</a>
                </li>
                <li>
                  <a href="index.php?logout=true">Se Deconnecter<i class="fa fa-fw fa-sign-out"></i></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Large button group -->
    </div>