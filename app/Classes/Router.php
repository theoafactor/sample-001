<?php 
namespace App\Classes;
/**
 * Simple Routing System..
 * This routing will undergo radical changes in future..
 * I am using this system as a makshift and also for educational purpose..
 *
 * The Router class uses the .htaccess file in the root directory to parse the $url GET variable 
 * See the .htaccess file for more information
 */

class Router{

	public $path_box = null;

	public function __construct(){
		//spins off the router
		if(isset($_GET['url'])){
			//resolve .. 
			$path_box = trim($_GET['url']);

			//the $path_box should contain the controller and the method..
			$this->path_box = $path_box;
			//echo $path_box;
		}

	}




	public function parseUrl(){
		//splits the $path_bo
		//index 0 -> Controller 
		//index 1 -> Method
		//index 2 -> Params
		$paths_array = [];
		if($this->path_box != null){
			$this->path_box = filter_var(rtrim($this->path_box, "/"), FILTER_SANITIZE_URL);
			//echo $this->path_box;
			$paths_array = explode("/", $this->path_box);
			//print_r($paths_array);
		}

		return $paths_array;

	}

}