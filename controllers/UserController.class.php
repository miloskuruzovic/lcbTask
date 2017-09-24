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
		var_dump($_SESSION);
		echo "Login page";
	}

	public function logout()
	{
		session_destroy();
	}
}
