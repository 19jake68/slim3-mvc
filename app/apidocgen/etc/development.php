<?php

return [
	'settings' => [
		'displayErrorDetails' => true,
		
		// Twig settings
		'renderer' => [
			'template_path' => APP_DIR . '/views',
			'twig' => [
				'cache' => APP_DIR . '/cache/twig',
				'debug' => true,
				'auto_reload' => true
			]
		],
		
		// Monolog settings
		'logger' => [
			'name' => 'app',
			'path' => APP_DIR . '/log/app.log'
		]
	]
];