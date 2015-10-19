<?php
namespace ExpressLibrary\actions\user;

use ExpressLibrary\models\User;
use ExpressLibrary\actions\user\BaseAction;


class SignupAction extends BaseAction
{
    /**
     * @param User $user
     */
    public function handle(User $user)
    {
        $conn = $this->app['db'];
        $conn->insert('user', array('username' => $user->getUsername(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'email' => $user->getEmail(), 'status' => $user::DEFAULT_STATUS,
            'created' => date("y-m-d"), 'updated' => date("y-m-d")));

    }
}
