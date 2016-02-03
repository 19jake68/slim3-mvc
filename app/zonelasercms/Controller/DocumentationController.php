<?php

namespace APIDocGen\Controller;

use APIDocGen\Lib\APIDoc;
use APIDocGen\Model\Documentation;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\NotFoundException;

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
	 * Creates a new documentation
	 *
	 * @param Request $request
	 * @param Response $response
	 * @param $args
	 */
	public function post(Request $request, Response $response, $args)
	{		
		if ( $request->isPost() ) {
			// GET form data
			$data = $request->getParsedBody();
			// $data = [
				// 'name' => 'MarbleLife API Documentation',
				// 'version' => '1.0.1',
				// 'description' => 'This is a documentation for MarbleLife RESTful API',
				// 'title' => 'MarbleLife API Documentation v1.0.1',
				// 'url' => 'http://128.199.156.89',
				// 'header' => 'Header Title',
				// 'header_content' => 'Content',
				// 'footer' => 'Footer Title',
				// 'footer_content' => 'Content',
			// ];
			
			// Initialize API Doc generator
			// $gen = new APIDoc($data);
			// $gen->createPath();
			// $gen->createFile();
			// $path = $gen->generate();
			// return $this->redirectTo($response, $request->getUri()->getBasePath() . $path);
			
			// Initialize model
			$model = new Documentation;
			$model->name = $data['name'];
			$model->version = $data['version'];
			$model->description = $data['description'];
			$model->title = $data['title'];
			$model->url = $data['url'];
			$model->header = $data['header'];
			$model->header_content = $data['header_content'];
			$model->footer = $data['footer'];
			$model->footer_content = $data['footer_content'];
			
			if ( $id = $model->save() )
				return $this->redirectTo($response, 'viewDoc', ['id' => $id]);
		}		
		
		// Render page
		$this->view->render($response, 'documentation/create.twig');
	}
	
	/**
	 * Fetches a specific documentation
	 */
	public function get(Request $request, Response $response, $args)
	{
		$id = intval($args['id']);
		
		// Initialize model
		$model = new Documentation;
		$data = $model->find($id);
		
		if ( !$data )
			throw new NotFoundException($request, $response);
		
		// Render page
		$this->view->render($response, 'documentation/view.twig', $data->getAttributes());
	}
}