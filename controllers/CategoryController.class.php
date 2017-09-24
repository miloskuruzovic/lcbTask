<?php 

/**
* 
*/
class CategoryController extends Controller
{
	public function all()
	{
		$title = "All Categories";
		$categories = Category::getAll();
		self::view('catAll', $title, $categories);
	}

	public function show($params)
	{
		$category = Category::get($params[0]);
		$title = "Lcb - " . $category->name;
		self::view('catShow', $title, $category);
	}

	public function update($params)
	{
		echo "We are going to update category " .$params[0] ." here!";
	}

	public function delete($params)
	{
		echo "We are going to delete category " .$params[0] ." here! :(";
	}
}