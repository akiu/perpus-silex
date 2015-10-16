<?php

namespace ExpressLibrary\Controllers;


use ExpressLibrary\actions\user\SignupAction;
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
use ExpressLibrary\actions\user\loginAction;


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
        $controllers->match('/user/profile', [$this, 'profileAction'])->bind('userProfile')->before([new AuthorizedMiddleware($app), 'authorize'])->bind('userProfile');




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
        $loginAction = new loginAction($this->app);

        $form = $this->app['form.factory']->create(new LoginType, $user);


        if($request->getMethod() == "POST") {

            $form->handleRequest($request);


            if($form->isValid()) {

               $login = $loginAction->handle($user);

               if($login) {

                   $this->app['session']->set('role', ['value' => 'user']);

                   return $this->app->redirect("userProfile");

               } else {

                   $this->app['session']->getFlashBag()->add('message', 'Invalid login credential or your account is not active');

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


        if($request->getMethod() == "POST") {

            $form->handleRequest($request);


            if($form->isValid()) {

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
        //return $this->app['session']->render()
        return "this is profile page";
    }
      
}
