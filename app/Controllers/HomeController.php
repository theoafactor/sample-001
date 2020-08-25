<?php 
use App\Classes\Controller;


class HomeController extends Controller{



	public function index($params){

		echo "This is the Home Page";
	}

	public function about($params){

		echo "This is the Home | About";
		
	}



}