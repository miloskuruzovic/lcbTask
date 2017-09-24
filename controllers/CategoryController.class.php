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

	public function create()
	{
		$title = "Add Category";

		self::view('catAdd', $title);
		if (isset($_POST['submit'])) 
		{
			$category = new Category;
			$category->name = $_POST['name'];
			$category->insert();
		}
	}

	public function update($params)
	{
		if ($params) 
		{
			$category = Category::get($params[0]);
			$title = "Lcb - " . $category->name . " - UPDATE";

			self::view('catUpdate', $title, $category);
		}
		elseif (isset($_POST['submit'])) 
		{
			ob_start();
			$id = $_POST['category_id'];
			Category::update($id,
				array('name' => $_POST['name'])
				);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function delete($params)
	{
		($_SESSION['user_id'])?Category::remove($params[0]):"";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}