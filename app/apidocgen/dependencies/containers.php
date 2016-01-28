<?php

// Twig Engine
$container['view'] = function($c) {
	$settings = $c->get('settings')['renderer'];
	$view = new \Slim\Views\Twig(
		$settings['template_path'],
		$settings['twig']
	);
	
	// Add extensions
	$view->addExtension(new \Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
	$view->addExtension(new \Twig_Extension_Debug());
	
	// Twig global variables
	$view->getEnvironment()->addGlobal('siteTitle', 'API Doc Gen');
	
	return $view;
};

// Slim Flash Message
$container['flash'] = function($c) {
	return new \Slim\Flash\Messages;
};

// Monolog
$container['logger'] = function($c) {
	$settings = $c->get('settings')['logger'];
	$logger = new \Monolog\Logger($settings['name']);
	$logger->pushProcessor(new \Monolog\Processor\UidProcessor());
	$logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));
	return $logger;
};

// Slim CSRF
$container['csrf'] = function($c) {
	return new \Slim\Csrf\Guard;
};

// Http Cache
$container['cache'] = function($c) {
	return new \Slim\HttpCache\CacheProvider();
};

// Error 404 Not Found
$container['notFoundHandler'] = function ($c) { 
	return function ($request, $response) use ($c) { 
		return $c['view']->render($response, 'error/404.twig')->withStatus(404); 
	};
};