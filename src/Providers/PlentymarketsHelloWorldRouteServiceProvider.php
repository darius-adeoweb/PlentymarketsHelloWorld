<?php

namespace PlentymarketsHelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class PlentymarketsHelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello', 'PlentymarketsHelloWorld\Controllers\ContentController@sayHello');
    }
}