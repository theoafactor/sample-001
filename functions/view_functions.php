<?php 
use App\Classes\Theme;
/**
 * Handles the processing involving the views 
 * The templating system uses Blade Templating Engine ..
 * 
 */




/**
 * Gets the parameters handled down by the controller..
 * Renders the template and template file(s) specified by the controller..
 * @param  [string] $view  [path to the templates files]
 * @param  [array] $param [array of parameters passed from the controller]
 * @return [type]        [description]
 */
function view($view, $param = []){

	//look for the $views ..
	//
	Theme::renderView($view, $param);


}
