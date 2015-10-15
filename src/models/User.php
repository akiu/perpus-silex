<?php

namespace ExpressLibrary\models;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class User {

	protected $username;

	protected $password;

	public function getUsername() {
		return $this->username;
	} 

	public function setUsername($name) {
		$this->username = $name;
	}

	public function setPassword($pass) {
		$this->password = $pass;
	}

	public function getPassword() {
		return $this->password;
	}

	public function login() {
		
	}
}