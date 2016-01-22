<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController extends BaseController
{
	public function index(Request $request, Response $response, $args)
	{
		$this->logger->info('Home page action dispatched');
		$this->flash->addMessage('info', 'Sample flash message');
		$this->view->render($response, 'home.twig', [
			'data' => 'Hello World!',
			'flash' => $this->flash->getMessage('info')
		]);
	}
}