<?php 

/**
* 
*/
class UserController extends Controller
{
	public function register()
	{
		$_SESSION['test'] = "Testing Session";
		echo "Register Page - " . $_SESSION['test'];	
	}

	public function login()
	{
		var_dump($_SESSION, $_POST);
		echo "Login page";
	}

	public function logout()
	{
		session_destroy();
	}
}
