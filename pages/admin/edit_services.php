<?php
$dao->setTable("category");
$categories = $dao->all();

$dao->setTable("services");
?>


<div class="container">

	<h1 class="text-dark text-center">Ediçao dos tipos de serviços</h1>
	<br>

	<div class="row text-center">
		<?php foreach($categories as $c):?>
		<div class="col-md-6">
			<h2><?=$c->name?></h2>
			<ul>
			<?php
				$services = $dao->findAll($c->id,"category_id"); 
				foreach($services as $s):
			?>
				<li><?= $s->name;?></li>
			<?php endforeach;?>
			</ul>
		</div>
		<?php endforeach;?>
	</div>

</div>