<?php 
	include_once 'templates/header.php';
	include_once "templates/navigation.php";

	$categories = $arg[2];
 ?>

<div class="container" style="margin-bottom: 100px;">
	<h1 class="text-center" style="margin-bottom: 20px">Svi postovi</h1>
	<?php foreach ($categories as $category): ?>
		<div class="row" style="border-top: 1px rgba(0,0,0,0.2) solid; padding-top:  5px;">
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading"><?= $category->name?></h4>	
				</div>
				<div class="media-right">
<?php if (isset($_SESSION['user_id'])): ?>
				<a href="Category/update/<?= $category->category_id ?>">Update</a>
				<a class="delete-link" href="Category/delete/<?= $category->category_id ?>">Delete</a>
<?php endif ?>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

 <?php 
	include_once "templates/footer.php";
 ?>