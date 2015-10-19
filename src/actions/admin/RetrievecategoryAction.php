<?php

namespace ExpressLibrary\actions\admin;

use ExpressLibrary\actions\admin\BaseAction;

class RetrievecategoryAction extends BaseAction
{
    public function handle()
    {
        $conn = $this->app['db'];
        $data = $conn->fetchAll("select * from category");
        return $data;
    }
}