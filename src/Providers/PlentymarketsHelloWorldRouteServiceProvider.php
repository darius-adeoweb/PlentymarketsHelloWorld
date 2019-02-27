<?php

namespace PlentymarketsHelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use PlentymarketsHelloWorld\Controllers\ContentController;

class PlentymarketsHelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello', ContentController::class . '@sayHello');
    }
}