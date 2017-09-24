<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";
?>
<div class="container">
	<h1 class="text-center">Add category</h1>
	<div class="row">
		<form method="POST" action="Category/create">
			<div class="form-group">
				<label for="category-title">Naziv Kategorije</label>
				<input type="text" name="name" class="form-control"  
				id="category-title" placeholder="Naziv" required >
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