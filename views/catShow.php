<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$category = $arg[2];
 ?>

<div class="container">
	<?= var_dump($category) ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>