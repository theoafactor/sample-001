<?php 
namespace App\Classes;


/**
 * Currently the rough rendition of the base controller that all other controllers will extend.
 * This rendition is currently rough.. and will undergo radical changes in future development
 * 
 */
class Controller {

	public $page_method = 'index';


	public function __construct(){}

	public function index($params){
		echo "This is the default index for any page";
	}


}