<?php 

/**
* 
*/
class ArticleController extends Controller
{
	
	public function index()
	{
		$title = "Lcb Test Home Page";
		self::view('index', $title);
	}

	public function all()
	{
		$title = "Svi postovi";
		$articles = Article::getAll();
		self::view('all', $title, $articles);
	}

	public function show($params)
	{
		$article = Article::get($params[0]);
		$filter = "WHERE article = " . $params[0];
		$comments = Comment::getAll($filter);
		$title = "Lcb - " . $article->title;
		self::view('article', $title, $article, $comments);
	}

	public function update($params)
	{
		echo "We are going to update article " .$params[0] ." here!";
	}

	public function delete($params)
	{
		echo "We are going to delete article " .$params[0] ." here! :(";
	}

	public function categoryPosts($params)
	{
		$category = Category::get($params[0]);
		$title = "Lcb - " . $category->name;
		$filter =  "WHERE category = " . $params[0];
		$articles = Article::getAll($filter);
		self::view('categoryPosts', $title, $articles);
	}
}