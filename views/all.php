<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$articles = $arg[2];
 ?>

<div class="container" style="margin-bottom: 100px;">
	<h1 class="text-center" style="margin-bottom: 20px">Svi postovi</h1>
	<?php foreach ($articles as $article): ?>
		<div class="row">
			<div class="media">
				<div class="media-body">
					<a href="Article/show/<?= $article->article_id ?>">
					<h4 class="media-heading"><?= $article->title?></h4>	
					</a>		
					<p><?= $article->text ?></p>
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