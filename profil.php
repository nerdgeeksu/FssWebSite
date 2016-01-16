<?php

  /*  if(!isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false || !isset($_GET['unid']) )
   {
	session_destroy();
    header ('location: index.php'); 
	exit;
   } 
   */
    include('signedheader.php')   

?>

    <div class="section">
      <div class="container ">
        <div class="row pull-left">
          <div class="col-md-5 ">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-sm-2 ">
                    <img src="https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?w=1024&amp;q=50&amp;fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708"
                    class="center-block img-responsive img-thumbnail">
                  </div>
                  <div class="col-sm-4">
                    <h1>Bachir Diop</h1>
                    <h4>Filiere : LFI 3</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Profil</a>
              </li>
              <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Messages</a>
              </li>
              <li role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Mes Devoirs</a>
              </li>
              <li role="presentation">
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reglages</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home"><? $text = file_get_contents('loremipsum.txt'); echo $text ; ?></div>
              <div role="tabpanel" class="tab-pane" id="profile"><? $text = file_get_contents('loremipsum.txt'); echo $text ; ?></div>
              <div role="tabpanel" class="tab-pane" id="messages"><? $text = file_get_contents('loremipsum.txt'); echo $text ; ?></div>
              <div role="tabpanel" class="tab-pane" id="settings"><? $text = file_get_contents('loremipsum.txt'); echo $text ; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <? include('footer.php');?>