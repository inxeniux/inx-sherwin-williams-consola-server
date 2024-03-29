<?php

spl_autoload_register(function ($class){

	$prefix = "Mike42\\";
	$base_dir = $_SERVER['DOCUMENT_ROOT'] . "/".PROJECT."/app/libs/src/Mike42/";
	
	/* Only continue for classes in this namespace */
	$len = strlen ( $prefix );
	if (strncmp ( $prefix, $class, $len ) !== 0) {
		return;
	}
	
	/* Require the file if it exists */
	$relative_class = substr ( $class, $len );
	$file = $base_dir . str_replace ( '\\', '/', $relative_class ) . '.php';
	if (file_exists ( $file )) {
		require $file;
	}
} );
