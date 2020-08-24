<?php 
namespace App;

use App\Classes\Router;

class App{

	private static $app_instance = null;
	public $resolved_routes = null;
	public $page_controller = 'home'; //set the default page controller
	public $params = []; //possible parameters, currently empty



	private function __construct(){
		//runs the application .. 
		
		//calls the router..
		$this->resolved_routes = self::router();		

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

	/**
	 * Calls the relevant controller to load the correct files..
	 * @return [type] [description]
	 */
	public function callController(){

		if(empty($this->resolved_routes)){

			$this->resolved_routes[0] = $this->page_controller;
		
		}
		
		if(file_exists("./app/Controllers/".ucfirst($this->resolved_routes[0])."Controller.php")){
			
			require_once("./app/Controllers/".ucfirst($this->resolved_routes[0]."Controller.php"));

			$this->page_controller = ucfirst($this->resolved_routes[0]);
			unset($this->resolved_routes[0]);
			//instantiate the controller ..
			
			$this->page_controller = new $this->page_controller();

			if(isset($this->resolved_routes[1])){
				//bring in the method..
				if(method_exists($this->page_controller, $this->resolved_routes[1])){
					$this->page_method = $this->resolved_routes[1];
					unset($this->resolved_routes[1]);
				}else{
					$this->page_method = $this->page_controller->page_method; //call the default method
				}
			}else{
				$this->page_method = $this->page_controller->page_method; //call the default method
			}

			//echo "This is the method: ".$this->page_controller->$this->page_method;

			$this->params[] = $this->resolved_routes ? array_values($this->resolved_routes) : null;

			call_user_func_array([$this->page_controller, $this->page_method], $this->params);

		}else{
			echo "Error 404";
		}

	}




}