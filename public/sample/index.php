<?php

namespace Sample;

if ( PHP_SAPI == 'cli-server' ) {
	// To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}

/**
 * Include common setup
 */
include __DIR__ . '/../common.php';

/**
 * Define the base directory of the current application
 */
define('APP_ENV', APP_ENV_DEVELOPMENT);
define('APP_DIR', BASE_DIR . '/app/sample');

// Start PHP session
session_start();

/**
 * Instantiate Slim Framework
 * Loads the setting for current environment
 */
$config = include APP_DIR . '/etc/' . APP_ENV . '.php';
$app = new \Slim\App($config);

/**
 * Initialize dependencies
 */
// DI Configuration
$container = $app->getContainer();

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

// Register middleware
$app->add($container['csrf']);
$app->add(new \Slim\HttpCache\Cache('public', 86400));

$app->get('/', 'App\Controller\HomeController:index');

/**
 * Initialize Slim Framework
 */
$app->run();