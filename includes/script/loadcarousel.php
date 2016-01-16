<div class="section" style="height:125%;">
      <div class="container" >
        <div class="row" >
          <div class="col-lg-20" >
<div class="carousel slide" id="carousel-example-generic" data-interval="5000" data-ride="carousel" style="height:15%;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	  	  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

	  <?php 
	  $i = 1;
	  while($i<5)
	  {
		  
        echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" ></li>';
		$i++;
      }
	  ?>
	  
	  </ol>
	  
      <div class="carousel-inner">
        
		<?php
		
		$db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'diopbach', 'nabounanc1');
    $query=$db->prepare(" SELECT titre,description,contenu,news_image,nom_img,chemin_img FROM fss_news,fss_images where news_image=nom_img ");
    $query->execute();
	
		$i = 0;
		while($data=$query->fetch())
	  {
		  $path=$data['chemin_img'].$data['nom_img'];
		  $title=$data['titre'];
		  $desc=$data['description'];
		  
		  if($i==0)
		  {
        echo '<div class="active item">
          <img src="'.$path.'" alt="'.$title.'">
          <div class="carousel-caption">
            <h2 class="text-center">'.$title.'</h2>
            <p class="lead text-left">'.$desc.'</p>
          </div>
        </div>';
		  }
		  elseif($i==5)
			{
				break;
			}
		  else
		  {
			echo '<div class="item">
          <img src="'.$path.'">
          <div class="carousel-caption">
            <h2 class="text-center">'.$title.'</h2>
            <p class="lead text-left">'.$desc.'</p>
          </div>
        </div>';  
		  }
		 
			$i++;
	  }
		?>
      </div>
	  
	   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
   </div>
   </div>
        </div>
      </div>
    </div>
      