<?php

namespace ZoneLaser\Model;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
	protected $capsule;

	/**
	 * Initialize Eloquent DB
	 */
	public function __construct()
	{
		$settings = [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'zonelasertag',
			'username' => 'root',
			'password' => '',
			'collation' => 'utf8_general_ci',
			'prefix' => '',
			'charset'   => 'utf8',
		];
		
		$this->capsule = new Capsule;
		$this->capsule->addConnection($settings);
		
		/**
		 * Make this Capsule instance available
		 * globally via static methods (optional)
		 */
		$this->capsule->setAsGlobal();
		
		/**
		 * Setup the Eloquent ORM
		 * (optional; unless you've used setEventDispatcher())
		 */
		$this->capsule->bootEloquent();
		
		// Connect using the Laravel Database component
		$this->capsule->connection();
		
		// Check if table exists, create if not
		if ( !$this->getConnection()->getSchemaBuilder()->hasTable($this->getTable()) )
			$this->createTable();
	}
	
	/**
	 * Get Table Columns
	 */
	public function getTableColumns()
	{
		return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
	}
	
	/**
	 * Abstract method Create Table,
	 * Other model should have this method
	 */
	abstract protected function createTable();
}