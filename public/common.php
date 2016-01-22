<?php

/**
 * Includes the composer autoloader
 */
include __DIR__ . '/../vendor/autoload.php';

/**
 * Define the base directory of the whole project
 */
define('BASE_DIR', realpath(__DIR__ . '/../'));

/**
 * Define Application environment
 *
 * For development and production
 */
define('APP_ENV_PRODUCTION', 'production');
define('APP_ENV_DEVELOPMENT', 'development');

/**
 * Set the default encoding
 */
mb_internal_encoding('UTF-8');

/**
 * Set the default timezone
 */
date_default_timezone_set('Asia/Manila');
