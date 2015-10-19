<?php
namespace ExpressLibrary\actions\user;

use ExpressLibrary\models\User;
use Silex\Application;

class LoginAction extends BaseAction
{
    /**
     * @param User $user
     * @return bool
     */
    public function handle(User $user)
    {
        $conn = $this->app['db'];
        $loggedUser = $conn->fetchAssoc('SELECT * FROM user WHERE username = ? AND status = ?',
            array($user->getUsername(), "active"));

        if (count($loggedUser) > 0) {
            $passCheck = password_verify($user->getPassword(), $loggedUser['password']);
            if ($passCheck) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
