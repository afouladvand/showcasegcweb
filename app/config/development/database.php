<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	*/

	'connections' => array(	

		'mysql' => array(
			'driver'         => $_ENV['driver'],
			'host'            => $_ENV['host'],
			'database' => $_ENV['database'],
			'username' => $_ENV['username'],
			'password' => $_ENV['password'],
			'charset'      => $_ENV['charset'],
			'collation'    => $_ENV['collation'],
			'prefix'          => $_ENV['prefix'],
		),

	),

);
