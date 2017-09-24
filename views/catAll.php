<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$categories = $arg[2];
 ?>

<div class="container" style="margin-bottom: 100px;">
	<h1 class="text-center" style="margin-bottom: 20px">Svi postovi</h1>
	<?php foreach ($categories as $category): ?>
		<div class="row">
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading"><?= $category->name?></h4>	
				</div>
				<div class="media-right">
					update/delete ce biti ovde
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>