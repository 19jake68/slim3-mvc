<?php

namespace APIDocGen\Controller;

use APIDocGen\Lib\APIDoc;
use APIDocGen\Model\Documentation;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class DocumentationController extends BaseController
{
	/**
	 * Index
	 *
	 * Lists all documentations
	 */
	public function index(Request $request, Response $response, $args)
	{
		// Render page
		$this->view->render($response, 'documentation/index.twig');
	}
	
	/**
	 * Post
	 *
	 * Creates a new documentation
	 */
	public function post(Request $request, Response $response, $args)
	{		
		// if ( $request->isPost() ) {
			// GET form data
			// $data = $request->getParsedBody();
			
			// Initialize API Doc generator
			// $gen = new APIDoc($data);
			// $gen->createPath();
			// $gen->createFile();
			// $path = $gen->generate();
			// return $this->redirectTo($response, $request->getUri()->getBasePath() . $path);
		// }
		
		$model = new Documentation;
		echo '<pre>';
		print_r($model->all());
		exit;
		
		// Render page
		$this->view->render($response, 'documentation/create.twig');
	}
}