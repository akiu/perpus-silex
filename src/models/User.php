<?php

namespace ExpressLibrary\models;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class User
{
    const DEFAULT_STATUS = "pending";

    protected $username;

    protected $password;

    protected $email;

    protected $status;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function setPassword($pass)
    {
        $this->password = $pass;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($em)
    {
        $this->email = $em;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setStatus($stat)
    {
        $this->status = $stat;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
