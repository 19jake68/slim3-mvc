<?php

/**
 * Main Router
 */
$app->post('/', 'ZoneLaser\Controller\UserController:index')->setName('home');

$app->post('/login', 'ZoneLaser\Controller\UserController:login')->setName('login');
