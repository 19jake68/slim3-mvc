<?php

/**
 * Main Router
 */
$app->get('/', 'ZoneLaser\Controller\UserController:index')->setName('home');