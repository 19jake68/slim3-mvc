<?php

namespace ZoneLaser\Model;

final class User extends BaseModel
{
	protected $table = 'memb_profile';
	
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Create table
	 */
	public function createTable()
	{
		// $this->getConnection()->getSchemaBuilder()->create($this->getTable(), function($table) {
		// 	$table->increments('id');
		// 	$table->string('name', 100);
		// 	$table->string('version', 5);
		// 	$table->string('description', 255);
		// 	$table->string('title', 100);
		// 	$table->string('url', 100);
		// 	$table->string('header', 100)->nullable();
		// 	$table->text('header_content')->nullable();
		// 	$table->string('footer', 100)->nullable();
		// 	$table->text('footer_content')->nullable();
		// 	$table->timestamps();
		// 	$table->unique(['name', 'version']);
		// });
	}

	public function UserReference()
	{
		return $this->hasOne('ZoneLaser\Model\UserReference','OMemb_ID');
	}


}