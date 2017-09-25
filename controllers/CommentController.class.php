<?php 

/**
* 
*/
class CommentController extends Controller
{
	public function create()
	{
		if (isset($_POST['submit'])) 
		{
			$comment = new Comment;
			$comment->name = $_POST['name'];
			$comment->content = $_POST['content'];
			$comment->article = $_POST['article_id'];
			$comment->author = $_SESSION['user_id'];

			$comment->insert();
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function update($params)
	{
		if ($params) 
		{
			$comment = Comment::get($params[0]);
			$title = "Lcb - " . $comment->name . " - UPDATE";

			self::view('commentUpdate', $title, $comment);
		}
		elseif (isset($_POST['submit'])) 
		{
			ob_start();
			$id = $_POST['comment_id'];
			Comment::update($id,
				array(
					'name' => $_POST['name'],
					'content' => $_POST['content']
					)
				);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function delete($params)
	{
		($_SESSION['user_id'])?Comment::remove($params[0]):"";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}