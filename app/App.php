<?php 
namespace App;

class App{

	private static $app_instance = null;

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

		//checks if this application instance has been created already.. 
		if(!self::$app_instance){

			self::$app_instance = new App;

		}

		return self::$app_instance;
		

	}




}