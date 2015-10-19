<?php
namespace ExpressLibrary\actions\user;

/**
 * Created by PhpStorm.
 * User: akiujih
 * Date: 16/10/15
 * Time: 12:52
 */

use ExpressLibrary\models\User;
use ExpressLibrary\actions\user\BaseAction;


class SignupAction extends BaseAction
{

    public function handle(User $user)
    {
        $conn = $this->app['db'];
        $conn->insert('user', array('username' => $user->getUsername(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'email' => $user->getEmail(), 'status' => $user::DEFAULT_STATUS,
            'created' => date("y-m-d"), 'updated' => date("y-m-d")));

    }
}