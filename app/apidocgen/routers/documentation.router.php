<?php

// List Documentations
$app->get('/documentation', 'APIDocGen\Controller\DocumentationController:index')->setName('documentation');

// Add Documentation
$app->map(['GET', 'POST'], '/documentation/add', 'APIDocGen\Controller\DocumentationController:post')->setName('addDoc');