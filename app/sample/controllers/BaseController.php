<?php

namespace App\Controller;

use Slim\Container;

class BaseController
{
	protected $view;
	protected $logger;
	protected $flash;
	
	/**
	 * Instantiate Base controller
	 */
	public function __construct(Container $c)
	{
		$this->view = $c->get('view');
		$this->logger = $c->get('logger');
		$this->flash = $c->get('flash');
	}
}