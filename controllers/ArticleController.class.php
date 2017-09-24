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
		$title = "All Articles";
		$articles = Article::getAll();
		self::view('all', $title, $articles);
	}

	public function show($params)
	{
		$article = Article::get($params[0]);
		$title = "Lcb - " . $article->title;
		self::view('article', $title, $article);
	}

	public function category($params)
	{
		$category = Category::get($params[0]);
		$title = "Lcb - " . $category->name;
		$filter =  "WHERE category = " . $params[0];
		$articles = Article::getAll($filter);
		self::view('category', $title, $articles);
	}
}