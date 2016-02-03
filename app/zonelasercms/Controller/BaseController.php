<?php

namespace ZoneLaserCms\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Container;
use Slim\Exception\NotFoundException;

class BaseController
{
	protected $view;
	protected $logger;
	protected $flash;
	protected $csrf;
	protected $router;
	
	/**
	 * Instantiate Base controller
	 */
	public function __construct(Container $c)
	{
		$this->view = $c->get('view');
		$this->logger = $c->get('logger');
		$this->flash = $c->get('flash');
		$this->csrf = $c->get('csrf');
		$this->router = $c->get('router');
		
		// Append csrf token
		$this->setCSRFToken();
	}
	
	/**
	 * Redirects the app to the new path
	 */
	protected function redirectTo(Response $response, $name, array $data = [], array $queryParams = [])
	{
		$url = (strstr($name, '/')) ? $name : $this->router->pathFor($name, $data, $queryParams);
		return $response->withStatus(301)->withHeader('Location', $url);
	}
	
	/**
	 * Sets CSRF Token to view data
	 */
	private function setCSRFToken()
	{
		// CSRF Keys
		$this->view->offsetSet('csrfNameKey', $this->csrf->getTokenNameKey());
		$this->view->offsetSet('csrfValueKey', $this->csrf->getTokenValueKey());
		
		// CSRF Values
		$this->view->offsetSet('csrfName', $this->csrf->getTokenName());
		$this->view->offsetSet('csrfValue', $this->csrf->getTokenValue());
	}
}