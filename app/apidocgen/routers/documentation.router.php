<?php

// List Documentations
$app->get('/documentation', 'APIDocGen\Controller\DocumentationController:index')->setName('documentation');

// Add Documentation
$app->map(['GET', 'POST'], '/documentation/add', 'APIDocGen\Controller\DocumentationController:post')->setName('addDoc');

// View Documentation
$app->get('/documentation/{id:[0-9]+}', 'APIDocGen\Controller\DocumentationController:get')->setName('viewDoc');