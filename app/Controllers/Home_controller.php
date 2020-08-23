<?php 
use App\Classes\Controller;


class Home_controller extends Controller{



	public function index($params){

		echo "This is the Home Page";
	}

	public function about($params){

		echo "This is the Home | About";
		
	}



}