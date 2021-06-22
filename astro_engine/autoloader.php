<?php

function load_sys($class_name)
{
	$path_to_file = '../astro_engine/sys/' . $class_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}

function load_controller($service_name)
{
	$path_to_file = '../astro_engine/controllers/' . $service_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}

spl_autoload_register('load_sys');
spl_autoload_register('load_controller');
