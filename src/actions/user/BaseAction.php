<?php

namespace ExpressLibrary\actions\user;

use Silex\Application;

class BaseAction
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {

        $this->app = $app;
    }
}