<?php

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
define('APP_NAME', 'zonelasercms');
define('APP_ENV', APP_ENV_DEVELOPMENT);
define('APP_DIR', BASE_DIR . '/app/' . APP_NAME);
define('PUBLIC_DIR', BASE_DIR . '/public/' . APP_NAME);

// Start PHP session
session_start();

/**
 * Instantiate Slim Framework
 * Loads the setting for current environment
 */
$config = include APP_DIR . '/env/' . APP_ENV . '.php';
$app = new \Slim\App($config);

/**
 * Initialize dependencies
 */
// DI Configuration
$container = $app->getContainer();

include APP_DIR . '/dependencies/containers.php';

// Register middleware
//$app->add($container['csrf']);
$app->add(new \Slim\HttpCache\Cache('public', 86400));

// Register Routers
$routers = glob(APP_DIR . '/routers/*.router.php');
foreach ($routers as $route) {
	include $route;
}
unset($route, $routers);

/**
 * Initialize Slim Framework
 */
$app->run();