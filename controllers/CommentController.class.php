<?php 

/**
* 
*/
class CommentController extends Controller
{
	
	public function update($params)
	{
		echo "We are going to update comment " .$params[0] ." here!";
	}

	public function delete($params)
	{
		echo "We are going to delete comment " .$params[0] ." here! :(";
	}
}