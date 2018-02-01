<?php

namespace InvOcoAPI\Units\Authentication\Http\Routes;

use InvOcoAPI\Support\Routing\RouteFile;
use Illuminate\Http\Request;

/**
 * Class Api
 * @package InvOcoAPI\Units\Authentication\Http\Routes
 */
class Api extends RouteFile
{
    protected function routes()
    {
        $this->registerDefaultRoutes();
    }

    protected function registerDefaultRoutes()
    {
        $this->userRoutes();
        $this->loginRoutes();
    }

    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            return $request->user();
        })->middleware('auth:api');
    }
    protected function loginRoutes()
    {
        $this->router->post('login', 'LoginController@login');
    }
}
