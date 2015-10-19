<?php

namespace ExpressLibrary\actions\admin;

use ExpressLibrary\actions\admin\BaseAction;
use ExpressLibrary\models\Category;

class AddCategoryAction extends BaseAction
{
    /**
     * @param Category $category
     */
    public function handle(Category $category)
    {
        $conn = $this->app['db'];
        $conn->insert('category', array('name' => $category->getName(), 'slug' => $category->getSlug()));
    }
}
