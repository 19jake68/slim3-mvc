<?php

namespace APIDocGen\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController extends BaseController
{
	public function index(Request $request, Response $response, $args)
	{
		$this->view->render($response, 'main/index.twig');
	}
}