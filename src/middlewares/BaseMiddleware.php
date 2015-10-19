<?php

namespace ExpressLibrary\middlewares;

use Silex\Application;

class BaseMiddleware
{
    public $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
