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
					<?php if (isset($_SESSION['user_id']) 
					&& $_SESSION['user_id'] == $comment->author ): ?>
					<div class="panel-footer">
						<a href="Comment/update/<?= $comment->comment_id ?>">Update</a>
						<a class="delete-link" href="Comment/delete/<?= $comment->comment_id ?>">Delete</a>
					</div>	
					<?php endif ?>
				</div>
			<?php endforeach ?>
	</div>
	<?php if (isset($_SESSION['user_id'])): ?>
	<div class="row">
		<h4 class="text-right"><kbd>Dodaj Komentar:</kbd></h4>
		<form method="POST" action="Comment/create">
			<div class="form-group">
				<label for="coment-title">Ime</label>
				<input type="text" name="name" class="form-control"  
				id="coment-title" value="<?= $_SESSION['username'] ?>" required >
			</div>
			<div class="form-group">
				<label for="comment-text">Tekst Komentara</label>
				<textarea id="comment-text" class="form-control" name="content" rows="5" required ></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="article_id" 
				value="<?= $article->article_id ?>">
				<input type="submit" name="submit" value="Dodaj Komentar" class="btn btn-default">
			</div>
		</form>
	</div>
	<?php else: ?>
		<blockquote>Morate biti ulogovani da biste komentarisali</blockquote>
	<?php endif ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>