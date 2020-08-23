<?php
use App\Classes\Controller;

class Products_controller extends Controller{

	public function index($params){
		echo "This is the Products page";
	}

	public function laptop($params){

		echo "Laptops for sale";

	}

}

