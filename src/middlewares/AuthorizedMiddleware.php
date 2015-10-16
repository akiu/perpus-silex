<?php
namespace ExpressLibrary\middlewares;

use ExpressLibrary\middlewares\BaseMiddleware;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthorizedMiddleware extends BaseMiddleware
{

	public function authorize()
	{
		$role = $this->app['session']->get('role');

		if(!isset($role['value']) || $role['value'] != "user") {

			$this->app['session']->getFlashBag()->add('message', 'Please login first!');


			return $this->app->redirect($this->app["url_generator"]->generate("userLogin"));

		}
	}
}