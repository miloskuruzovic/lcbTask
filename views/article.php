<?php 
	include_once 'templates/header.php';

	$article = $arg[2];
	$comments = $arg[3];
 ?>

<div class="container">
	<?= var_dump($article, $comments) ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<?= $article->title?>
		</div>
		<div class="panel-body">
			<?= $article->text ?>
		</div>
		<div class="panel-footer">
			<?php foreach ($comments as $comment): ?>
				<div class="panel panel-info">
					<div class="panel-heading">
						<?= $comment->name ?>
					</div>
					<div class="panel-body">
						<?= $comment->content ?>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>