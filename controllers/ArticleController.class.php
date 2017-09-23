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
}