
<?php

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