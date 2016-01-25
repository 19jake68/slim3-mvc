<?php

namespace APIDocGen\Model;

use Illuminate\Database\Capsule\Manager as Capsule;
use \Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	protected $conn;
	
	public function __construct()
	{
		$settings = [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'apidocgen',
			'username' => 'root',
			'password' => '',
			'collation' => 'utf8_general_ci',
			'prefix' => '',
			'charset'   => 'utf8',
		];
		
		$capsule = new Capsule;
		$capsule->addConnection($settings);
		$capsule->bootEloquent();
		$capsule->setAsGlobal();
		
		// Connect using the Laravel Database component
		$this->conn = $capsule->connection();
	}
}