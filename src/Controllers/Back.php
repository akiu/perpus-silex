<?php

namespace ExpressLibrary\Controllers;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class Back extends BaseController implements ControllerProviderInterface
{
    /**
     * @param Application $app
     * @return ControllerCollection
     */
    public function connect(Application $app)
    {
        /**
         * @var ControllerCollection $controllers
         */
        $controllers = $app['controllers_factory'];

       
        $controllers->get('/login', [$this, 'loginAction'])->bind("adminlogin");

        return $controllers;
    }

    public function indexAction(Request $request)
    {
        return 'hello from admin';
    }

    public function loginAction(Request $request)
    {
        return $this->app['twig']->render('admin/login.twig.html');
    }
}
