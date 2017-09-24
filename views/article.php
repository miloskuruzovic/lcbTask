<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$article = $arg[2];
	$comments = $arg[3];
 ?>

<div class="container">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?= $article->title?>
			</div>
			<div class="panel-body">
				<?= $article->text ?>
			</div>
			<div class="panel-footer">
				update/delete
			</div>
		</div>
	</div>
	<h4 class="text-right"><kbd>Komentari:</kbd></h4>
	<div class="row">
			<?php foreach ($comments as $comment): ?>
				<div class="panel panel-info">
					<div class="panel-body">
						<mark><?= $comment->name ?></mark> <br><hr>
						<?= $comment->content ?>
					</div>
				</div>
			<?php endforeach ?>
	</div>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>