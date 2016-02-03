<?php

namespace ZoneLaser\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use ZoneLaser\Model\User;
use ZoneLaser\Model\UserPrefs;

final class UserController extends BaseController
{
	public function index(Request $request, Response $response, $args)
	{
		
		
		//Response does not contain any data.
	}

	private function errorResponse($msg){
		return json_encode(['response' => $msg, 'success' => 0]);
	}
	private function successResponse($data){
		return json_encode(['data' => $data, 'success' => 1]);
	}
	public function login(Request $request, Response $response, $args)
	{
		$dataRequest = $request->getParsedBody();

		$dataUser = User::where( 'Email', $dataRequest['email'] )->first();
		if($dataUser){
			
			$dataUserPrefs = UserPrefs::where( ['OMemb_ID'=> $dataUser->OMemb_ID, 'Password' =>  md5($dataRequest['password'])] )->first();
			if($dataUserPrefs)
			{
				echo $this->successResponse( $dataUser );
			}else{
				echo $this->errorResponse('Username and password do not match');
			}
		}else{
			echo $this->errorResponse('Username and password do not match');
		}
	}

}