<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$article = $arg[2];
	$categories = $arg[3];
?>
<div class="container">
	<h1 class="text-center">Update article</h1>
	<div class="row">
		<form method="POST" action="Article/update">
			<div class="form-group">
				<label for="article-title">Naslov</label>
				<input type="text" name="title" class="form-control"  
				id="article-title" value="<?= $article->title ?>" >
			</div>
			<div class="form-group">
				<label for="article-select">Kategorija</label>
				<select class="form-control" id="article-select" name="category">
					<?php foreach ($categories as $category): ?>
						<option value="<?= $category->category_id ?>"
						<?= ($article->category == $category->category_id )?
						"selected":"" ?>>
							<?= $category->name ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="article-text">Tekst Posta</label>
				<textarea id="article-text" class="form-control" name="text" rows="10"><?= $article->text ?></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="article_id" 
				value="<?= $article->article_id ?>">
				<input type="submit" name="submit" value="Update" class="btn btn-default">
			</div>
		</form>
	</div>
</div>
 <?php 
	include_once "templates/footer.php";
 ?>