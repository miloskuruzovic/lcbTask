<?php 
	include_once 'templates/header.php';

	$article = $arg[2];
	$comments = $arg[3];
 ?>

<div class="container">
	<?= var_dump($article, $comments) ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>