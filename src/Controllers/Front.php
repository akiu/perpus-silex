<?php

namespace ExpressLibrary\Controllers;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use ExpressLibrary\models\User;
use ExpressLibrary\forms\LoginType;
use ExpressLibrary\forms\SignupType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\EqualTo;
use ExpressLibrary\middlewares\AuthorizedMiddleware;


class Front extends BaseController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        /**
         * @var ControllerCollection $controllers
         */
        $controllers = $app['controllers_factory'];
       
        $controllers->get('/home', [$this, 'homeAction'])->before([new AuthorizedMiddleware($app), 'authorize'])->bind('homepage');
        $controllers->match('/user/login', [$this, 'userloginAction'])->bind('userLogin');
        $controllers->match('/user/signup', [$this, 'signupAction'])->bind('userSignup');




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

        $form = $this->app['form.factory']->create(new LoginType, $user);


        if($request->getMethod() == "POST") {

            $form->handleRequest($request);


            if($form->isValid()) {

               $login = $user->login();

               if($login) {

                    $this->app['session']->set('login', ['value' => 1]);

                    return "user ada";
               } else {
                    return "user invalid";
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

        $form = $this->app['form.factory']->create(new SignupType, $user);


        if($request->getMethod() == "POST") {

            $form->handleRequest($request);


            if($form->isValid()) {

               $user->signUp(); 

                return $this->app['twig']->render('success.html');
            
            } else {

                return $this->app['twig']->render('signup.html', array('form' => $form->createView()));

            } 
        } else {

                return $this->app['twig']->render('signup.html', array('form' => $form->createView()));

        }

        
    }
      
}
