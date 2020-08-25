<?php 
namespace App\Classes;


class Theme {


	public static $views_directory = "resources/views/";//views directory..
	public static $template_directory = "resources/layouts";


	/**
	 * Powers up the views files
	 * @param  [type] $view   [an indication o where the view files are located]
	 * @param  [type] $params [array of  parameters received from the view function]
	 * @return [type]         [description]
	 */
	public static function renderView($view, $params){

		//resolve the $view to the directory and template..
		//

		$check_directories = new \RecursiveDirectoryIterator(self::$views_directory."/");


			//loop through the $check_directories..
		foreach(new \RecursiveIteratorIterator($check_directories) as $dir_or_file){
				if($dir_or_file->getfilename() != ".." && $dir_or_file->getfilename() != "."){


					if($dir_or_file->getfilename() == basename($view).".php"){

						$dir_name = dirname($dir_or_file);
						$loader = new \Twig\Loader\FilesystemLoader(["{$dir_name}", self::$template_directory]);

						$twig = new \Twig\Environment($loader, [

								'cache' => 'caches',
								'auto_reload' => TRUE,
								'strict_variables' => TRUE

								]);
						$twig->addGlobal('asset_url', "public");
						$page_to_view = basename($view);

						echo $twig->render("{$page_to_view}.php", $params);

					} 



				}

		


		}




	}


}