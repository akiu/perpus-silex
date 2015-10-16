<?php

namespace ExpressLibrary\models;

class BaseModel {

	protected $db;

	public function __construct() {

		$this->db = \Doctrine\DBAL\DriverManager::getConnection(['dbname' => 'perpus',
		    'user' => 'root',
		    'password' => 'root',
		    'host' => 'localhost',
		    'driver' => 'pdo_mysql'], new \Doctrine\DBAL\Configuration());

	} 
}


