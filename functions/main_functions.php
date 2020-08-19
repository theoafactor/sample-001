<?php 
use App\App;

/**
 * The main_functions is responsible for doing some dirty tasks for the application.
 * - Also, it serves as the errand boy between the core classes and the client. 
 * - The philosophy at this point in development is that the client should not be directly exposed to the
 * core classes.
 */





/**
 * Handles the dirty processes of calling the application 
 * The application is not exposed to the index.php file directly here ..
 * 
 * @return [type] [description]
 */
function start_app(){
	App::start();//Call the start() method to start the bootstrapping process
}