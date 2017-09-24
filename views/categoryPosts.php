<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$articles = $arg[2];
 ?>

<div class="container">
	<?= var_dump($articles) ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>