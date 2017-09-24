<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$categories = $arg[2];
?>
<div class="container">
	<h1 class="text-center">Add article</h1>
	<div class="row">
		<form method="POST" action="Article/create">
			<div class="form-group">
				<label for="article-title">Naslov</label>
				<input type="text" name="title" class="form-control"  
				id="article-title" placeholder="Naslov" >
			</div>
			<div class="form-group">
				<label for="article-select">Kategorija</label>
				<select class="form-control" id="article-select" name="category">
					<?php foreach ($categories as $category): ?>
						<option value="<?= $category->category_id ?>">
							<?= $category->name ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="article-text">Tekst Posta</label>
				<textarea id="article-text" class="form-control" name="text" rows="10"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Create" class="btn btn-default">
			</div>
		</form>
	</div>
</div>
<?php 
	include_once "templates/footer.php";
 ?>