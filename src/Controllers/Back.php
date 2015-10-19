<?php

namespace ExpressLibrary\Controllers;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use ExpressLibrary\models\Category;
use ExpressLibrary\forms\AddCategory;
use ExpressLibrary\actions\admin\AddCategoryAction;
use ExpressLibrary\actions\admin\RetrieveCategoryAction;

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

       
        $controllers->match('/login', [$this, 'loginAction'])->bind("adminlogin");
        $controllers->match('/home', [$this, 'dashboardAction'])->bind("adminHome");
        $controllers->match('/add', [$this, 'addProductAction'])->bind('addProduct');
        $controllers->match("/addcat", [$this, 'addCategoryAction'])->bind('addCategory');

        return $controllers;
    }

    public function indexAction(Request $request)
    {
        return 'hello from admin';
    }

    public function loginAction(Request $request)
    {
        if ($request->getMethod() == "POST") {
            return $this->app->redirect($this->app["url_generator"]->generate("adminHome"));
        }
        return $this->app['twig']->render('admin/login.twig.html');
    }

    public function dashboardAction()
    {
        return $this->app['twig']->render('admin/home.twig');
    }


    public function addProductAction()
    {
        return $this->app['twig']->render('admin/addProduct.twig');
    }

    public function addCategoryAction(Request $request)
    {
        $category = new Category();

        $action = new AddCategoryAction($this->app);

        $retrieveAction = new  RetrieveCategoryAction($this->app);


        $form = $this->app['form.factory']->create(new AddCategory(), $category);

        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $action->handle($category);
                $categories = $retrieveAction->handle();

                return $this->app['twig']->render(
                    'admin/addCategory.twig',
                    ['form' => $form->createView(), 'categories' => $categories]
                );
            }
        }
        $categories = $retrieveAction->handle();

        return $this->app['twig']->render(
            'admin/addCategory.twig',
            ['form' => $form->createView(), 'categories' => $categories]
        );
    }
}
