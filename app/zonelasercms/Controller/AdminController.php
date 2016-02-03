<?php

namespace APIDocGen\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class AdminController extends BaseController
{
	/**
	 * Login
	 *
	 * Logs into the Admin Panel
	 */
	public function login(Request $request, Response $response, $args)
	{
		if ( $request->isPost() ) {
			// GET form data
			$data = $request->getParsedBody();
			return $this->redirectTo($response, 'home');
		}
		
		// Render page
		$this->view->render($response, 'admin/login.twig');
	}
	
	/**
	 * Logout
	 *
	 * Logs out from the Admin Panel
	 */
	public function logout(Request $request, Response $response, $args)
	{
		return $this->redirectTo($response, 'login');
	}
	
	/**
	 * Register
	 *
	 * Creates new admin account
	 */
	public function register(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Forgot Password
	 *
	 * Generates a new password via email address
	 */
	public function forgotpassword(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Change Password
	 *
	 * Modifies the existing password
	 */
	public function changepassword(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Profile
	 *
	 * Views admin account profile
	 */
	public function profile(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Update Profile
	 *
	 * Modifies admin profile
	 */
	public function update(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Index
	 *
	 * Lists admin accounts
	 */
	public function index(Request $request, Response $response, $args)
	{
		
	}
	
	/**
	 * Delete
	 *
	 * Removes existing admin account
	 */
	public function delete(Request $request, Response $response, $args)
	{
		
	}
}