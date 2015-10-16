<?php
namespace ExpressLibrary\actions\user;

/**
 * Created by PhpStorm.
 * User: akiujih
 * Date: 16/10/15
 * Time: 12:52
 */

use ExpressLibrary\actions\user\BaseAction;
use ExpressLibrary\models\User;
use Silex\Application;


class loginAction extends BaseAction
{

    public function handle(User $user)
    {
        $conn = $this->app['db'];
        $loggedUser = $conn->fetchAssoc('SELECT * FROM user WHERE username = ? AND status = ?',
            array($user->getUsername(), "active"));

        if(count($loggedUser) > 0) {

            $passCheck = password_verify($user->getPassword(), $loggedUser['password']);

            if($passCheck) {

                return true;

            } else

                return false;

        } else {

            return false;
        }
    }
}