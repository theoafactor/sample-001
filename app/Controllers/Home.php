<?php 
use App\Classes\Controller;


class Home extends Controller{



	/**
	 * Loads the default home page with its index page
	 * @param  [type] $params [description]
	 * @return [type]         [description]
	 */
	public function index($params){


		return view("checkmeout", $params);//render the checkmeout view..
		
	}

	public function about($params){
		//print_r($params);

		return view("about-us");
		
	}



}