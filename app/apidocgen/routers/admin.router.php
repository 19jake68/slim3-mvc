<?php

// Login
$app->map(['GET', 'POST'], '/login', 'APIDocGen\Controller\AdminController:login')->setName('login');

// Logout
$app->get('/logout', 'APIDocGen\Controller\AdminController:logout')->setName('logout');

// Register
$app->map(['GET', 'POST'], '/register', 'APIDocGen\Controller\AdminController:logout')->setName('register');

// Forget Password
$app->map(['GET', 'POST'], '/forgotpass', 'APIDocGen\Controller\AdminController:forgotpassword')->setName('forgotpass');

// Change Password
$app->map(['GET', 'POST'], '/changepass', 'APIDocGen\Controller\AdminController:changepassword')->setName('changepass');

// View Profile
$app->get('/profile', 'APIDocGen\Controller\AdminController:profile')->setName('profile');

// Update Profile
$app->map(['GET', 'POST'], '/profile/update', 'APIDocGen\Controller\AdminController:update')->setName('updateprofile');

// List Admin accounts
$app->map(['GET', 'POST'], '/admin', 'APIDocGen\Controller\AdminController:index')->setName('listadmin');