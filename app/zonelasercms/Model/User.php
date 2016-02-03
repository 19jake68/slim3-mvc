<?php

namespace APIDocGen\Model;

final class User extends BaseModel
{
	protected $table = 'user';
	
	public function __construct()
	{
		parent::__construct();
	}
}