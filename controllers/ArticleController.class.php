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

	public function create()
	{
		if (!isset($_SESSION['user_id'])) {
			header('Location: ' . Config::get('home'));
		}
		$categories = Category::getAll();
		$title = "Add Post";
		self::view('articleAdd', $title, $categories);

		if (isset($_POST['submit'])) 
		{
			$article = new Article;
			$article->title = $_POST['title'];
			$article->text = $_POST['text'];
			$article->category = $_POST['category'];
			$article->author = $_SESSION['user_id'];
			$article->insert();
		}
	}

	public function update($params = null)
	{
		if ($params) 
		{
			$id = $params[0];
			$article = Article::get($params[0]);
			$categories = Category::getAll();
			$title = "Lcb - " . $article->title . " - UPDATE";

			self::view('articleUpdate', $title, $article, $categories);
		}
		elseif (isset($_POST['submit'])) 
		{
			ob_start();
			$id = $_POST['article_id'];
			Article::update($id,
				array('title' => $_POST['title'],
					'text' => $_POST['text'],
					'category' => $_POST['category']
					)
				);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		
	}

	public function delete($params)
	{
		($_SESSION['user_id'])?Article::remove($params[0]):"";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
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