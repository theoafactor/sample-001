<?php 
require_once "./Classes/User.php";
class App{

	private function __construct(){
		echo "Runs the application";

	}


	/**
	 * Bootstraps the application...
	 * Bootstraps the theme engine and other relevant sectors..
	 * Calls the relevant classes to get started..
	 * @return [type] [description]
	 */
	public static function start(){

		echo "Starts the application";

		$user = new User();
		$user->checkUserExists();
	}




}