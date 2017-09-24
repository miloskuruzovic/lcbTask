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
		ob_start();
		$username = $_POST['username'] ?? null;
		$password = $_POST['password'] ?? null;

		$filter = "WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1";
		$user = (User::getAll($filter))?User::getAll($filter)[0]:null;

		if ($user) {
			$_SESSION['user_id'] = $user->user_id;
			$_SESSION['username'] = $user->username;
			$_SESSION['password'] = $user->password;
			$_SESSION['login_msg'] = "Zdravo ";
		}else {
			$_SESSION['login_msg'] = "Pokusajte ponovo!";
		}

		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	public function logout()
	{
		ob_start();
		session_destroy();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}
