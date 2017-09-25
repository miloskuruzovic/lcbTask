<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$articles = $arg[2];
 ?>

<div class="container" style="margin-bottom: 100px;">
	<h1 class="text-center" style="margin-bottom: 20px">Svi postovi</h1>
	<?php foreach ($articles as $article): ?>
		<div class="row" style="border-top: 1px rgba(0,0,0,0.2) solid; padding-top:  5px;">
			<div class="media">
				<div class="media-body">
					<a href="Article/show/<?= $article->article_id ?>">
					<h4 class="media-heading"><?= $article->title?></h4>	
					</a>		
					<p><?= $article->text ?></p>
				</div>
				<div class="media-right">
		<?php if (isset($_SESSION['user_id']) 
				&& $_SESSION['user_id'] == $article->author): ?>
				<a href="Article/update/<?= $article->article_id ?>">Update</a>
				<a class="delete-link" href="Article/delete/<?= $article->article_id ?>">Delete</a>
		<?php endif ?>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
<script type="text/javascript" src="<?= Config::get('home') ?>js/deleteConfirmation.js" ></script>
 <?php 
	include_once "templates/footer.php";
 ?>