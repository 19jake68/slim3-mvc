<?php

namespace ZoneLaserCms\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class UserController extends BaseController
{
	/**
	 * Index
	 *
	 * Lists admin accounts
	 */
	public function index(Request $request, Response $response, $args)
	{
		echo 'CONNECTED';
	}

}