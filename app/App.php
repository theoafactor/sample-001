<?php 
namespace App;

use App\Classes\Router;


class App{

	private static $app_instance = null;

	private function __construct(){
		//runs the application .. 
		
		//calls the router..
		$resolved_routes = self::router();

		//call the appropriate controller??
		$home = $resolved_routes[0];

		echo "This is the $home page";

		

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


	/**
	 * Primarily resolves the routes of this app request
	 * this captures the route into its specific parts ..
	 * Please note that this routing is currently adaptable to Apache servers
	 * @return [type] [description]
	 */
	private static function router(){

		//calls the Router class
		$router = new Router();
		return $router->parseUrl();


	}




}