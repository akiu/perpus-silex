<?php

namespace ExpressLibrary\models;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
use ExpressLibrary\models\BaseModel;

class User extends BaseModel {


	const DEFAULT_STATUS = "pending"; 

	protected $username;

	protected $password;

	protected $email;

	protected $status;

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

	public function setEmail($em) {
		$this->email = $em;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setStatus($stat) {
		$this->status = $stat;
	}

	public function getStatus() {
		return $this->status;
	}

	public function login() {

		$loggedUser = $this->db->fetchAssoc('SELECT * FROM user WHERE username = ? AND status = ?', array($this->username, "active"));

		if(count($loggedUser) > 0) {

			$passCheck = password_verify($this->password, $loggedUser['password']);
			
			if($passCheck) {

				return true;

			} else

				return false;

		} else {

			return false;
		}

	}

	public function signUp() {

		$this->db->insert('user', array('username' => $this->username, 'password' => password_hash($this->password, PASSWORD_DEFAULT), 'email' => $this->email, 'status' => self::DEFAULT_STATUS));
	}
}