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
}