<?php

retutn array(
	'active' => 'testdb',

	'testdb' => array(
		'type' => 'mysqli',
		'connection' => array(
			'hostname'		 => 'loaclhost',
			'socket'		 => '/var/lib/mysql/mysql.sock',
			'database'		 => 'fuel_test_db',
			'username'		 => 'root',
			'password'		 => 'vbserver',
			'presistent'	 => FALSE,
		),
		'table_prefix'	 => '',
		'charset'		 => 'utf8',
		'caching'		 => false,
		'profiling'		 => ture,
	),
);
