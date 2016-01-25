<?php

namespace APIDocGen\Model;

final class Documentation extends BaseModel
{
	protected $table = 'documentation';
	
	public function __construct()
	{
		parent::__construct();
	}
}