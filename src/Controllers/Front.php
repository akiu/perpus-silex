<?php

namespace ExpressLibrary\Controllers;

use ExpressLibrary\actions\user\LoginAction;
use ExpressLibrary\actions\user\SignupAction;
use ExpressLibrary\forms\LoginType;
use ExpressLibrary\forms\SignupType;
use ExpressLibrary\middlewares\AuthorizedMiddleware;
use ExpressLibrary\models\User;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class Front extends BaseController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        /**
         * @var ControllerCollection $controllers
         */
        $controllers = $app['controllers_factory'];

        $controllers->get('/home', [$this, 'homeAction'])->bind('homepage');
        $controllers->match('/user/login', [$this, 'userloginAction'])->bind('userLogin');
        $controllers->match('/user/signup', [$this, 'signupAction'])->bind('userSignup');
        $controllers->match('/user/profile', [$this, 'profileAction'])
            ->bind('userProfile')
            ->before([new AuthorizedMiddleware($app), 'authorize'])
            ->bind('userProfile');
        $controllers->get('/user/logout', [$this, 'logoutAction'])->bind('userLogout');


        return $controllers;
    }

    public function helloAction(Request $request)
    {
        return $this->app['twig']->render('hello.twig', ['name' => 'Pras']);
    }

    public function homeAction(Request $request)
    {
        return $this->app['twig']->render('home.html');

    }

    public function userloginAction(Request $request)
    {

        $user = new User();
        $loginAction = new LoginAction($this->app);

        $form = $this->app['form.factory']->create(new LoginType, $user);


        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $login = $loginAction->handle($user);

                if ($login) {
                    $this->app['session']->set('role', ['value' => 'user']);
                    return $this->app->redirect($this->app["url_generator"]->generate("userProfile"));
                } else {
                    $this->app['session']->getFlashBag()->add(
                        'message',
                        'Invalid login credential or your account is not active'
                    );
                    return $this->app['twig']->render('login.twig', array('form' => $form->createView()));
                }
            } else {
                return $this->app['twig']->render('login.twig', array('form' => $form->createView()));
            }
        } else {
            return $this->app['twig']->render('login.twig', array('form' => $form->createView()));
        }


    }

    public function signupAction(Request $request)
    {
        $user = new User();
        $signup = new SignupAction($this->app);

        $form = $this->app['form.factory']->create(new SignupType, $user);

        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $signup->handle($user);
                return $this->app['twig']->render('success.html');
            } else {
                return $this->app['twig']->render('signup.html', array('form' => $form->createView()));
            }
        } else {
            return $this->app['twig']->render('signup.html', array('form' => $form->createView()));
        }


    }

    public function profileAction(Request $request)
    {
        return $this->app['twig']->render('userProfile.twig');
    }

    public function logoutAction()
    {
        $this->app['session']->remove('role');
        $this->app['session']->getFlashBag()->add('message', 'You are logged out now');
        return $this->app->redirect($this->app["url_generator"]->generate("userLogin"));
    }
}
