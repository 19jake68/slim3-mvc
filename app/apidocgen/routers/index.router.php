<?php

/**
 * Main Router
 */
$app->get('/', 'APIDocGen\Controller\HomeController:index')->setName('home');