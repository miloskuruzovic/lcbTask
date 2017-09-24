<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$category = $arg[2];
?>
<div class="container">
	<h1 class="text-center">Add category</h1>
	<div class="row">
		<form method="POST" action="Category/update">
			<div class="form-group">
				<label for="category-title">Naziv Kategorije</label>
				<input type="text" name="name" class="form-control"  
				id="category-title" value="<?= $category->name ?>" required >
			</div>
			<div class="form-group">
				<input type="hidden" name="category_id" 
				value="<?= $category->category_id ?>">
				<input type="submit" name="submit" value="Update" class="btn btn-default">
			</div>
		</form>
	</div>
</div>
<?php 
	include_once "templates/footer.php";
 ?>