<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
		  
		  <?php

		  
	     $db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'diopbach', 'nabounanc1');
    $query=$db->prepare(' SELECT * FROM fss_news ');
    $query->execute();
	   
	   
$i=1;
while($data=$query->fetch() )
{
	$idact =$data['newsid'];
	$titleact =$data['titre'];
	$descact =$data['description'];
	
?>	

			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="actualite.php?actid=<?php echo $idact; ?>"><h3 class="panel-title"><?php echo $titleact; ?></h3></a>
				</div>
					<div class="panel-body">
						<?php echo $descact; ?>
						<a href="actualite.php?actid=<?php echo $idact; ?>">Voir la suite <a>
					</div>
				</div>
			
			<?php
			$i++;
			if($i>5)
			{
				break;
			}
		}
			
			
			?>
		  
		  </div>
          <div class="col-md-4">
		  
		  <?php

$i=1;
while($i<5)
{
	$idact ='lorips';
	$titleact ='Lorem';
	$descact ='Lorem Ipsum';
	
?>	

			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="actualite.php?actid=<?php echo $idact; ?>"><h3 class="panel-title"><?php echo $titleact; ?></h3></a>
				</div>
					<div class="panel-body">
						<?php echo $descact; ?>
						<a href="actualite.php?actid=<?php echo $idact; ?>">Voir la suite <a>
					</div>
				</div>
			
			<?php
			$i++;
		}
			
			
			?>
		  
		  </div>
        </div>
      </div>
    </div>