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
		echo 1;
		exit;
		//85c4110a4fb15c1a8dc2e1c0ec9381f2
		$email = 'comments@planetzeon.com';
		$password = 'test';
		echo  json_encode($request);
		exit;
		$dataUser = User::where( 'Email', $email )->first();
		if($dataUser){
			$passEnc = md5($password);
			$dataUserPrefs = UserPrefs::where( ['OMemb_ID'=> $dataUser->OMemb_ID, 'Password' => $passEnc] )->first();
			//$this->trace($dataUserPrefs);
			if($dataUserPrefs)
			{
				echo $dataUser;
			}
		}
	}

	public function login(Request $request, Response $response, $args)
	{

	}

}