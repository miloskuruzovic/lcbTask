<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$comment = $arg[2];
?>
<div class="container">
	<h1 class="text-center">Edit comment</h1>
	<div class="row">
		<form method="POST" action="Comment/update">
			<div class="form-group">
				<label for="comment-title">Naziv Kategorije</label>
				<input type="text" name="name" class="form-control"  
				id="comment-title" value="<?= $comment->name ?>" required >
			</div>
			<div class="form-group">
				<label for="comment-text">Tekst Posta</label>
				<textarea id="comment-text" class="form-control" name="content" rows="10"><?= $comment->content ?></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="comment_id" 
				value="<?= $comment->comment_id ?>">
				<input type="submit" name="submit" value="Update" class="btn btn-default">
			</div>
		</form>
		<a href="Article/show/<?= $comment->article ?>">Nazad na post</a>
	</div>
</div>
<?php 
	include_once "templates/footer.php";
 ?>